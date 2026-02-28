(() => {
	const container = document.getElementById("tradera-listings");
	const loadMoreButton = document.getElementById("tradera-load-more");
	if (!container || !loadMoreButton || typeof recomputeTheme === "undefined") {
		return;
	}
	const locale = recomputeTheme.locale || "sv";
	const pageSize = 9;
	let allItems = [];
	let visibleCount = pageSize;

	const asCurrency = (value) => {
		const n = Number(value);
		if (Number.isNaN(n) || n <= 0) return recomputeTheme.labelSeeListing || "View listing";
		return `${n.toLocaleString(locale)} kr`;
	};

	const asDate = (value) => {
		const d = new Date(value);
		if (Number.isNaN(d.getTime())) return "";
		return d.toLocaleString(locale, { dateStyle: "medium", timeStyle: "short" });
	};

	const updateButton = () => {
		if (!allItems.length) {
			loadMoreButton.style.display = "none";
			return;
		}
		if (visibleCount >= allItems.length) {
			loadMoreButton.disabled = true;
			loadMoreButton.textContent = recomputeTheme.labelAllLoaded || "No more listings";
			return;
		}
		loadMoreButton.disabled = false;
		loadMoreButton.textContent = recomputeTheme.labelLoadMore || "Load more";
	};

	const render = () => {
		const items = allItems.slice(0, visibleCount);
		if (!items.length) {
			container.innerHTML = `<p class="empty">${recomputeTheme.labelNoListings || "No listings found right now."}</p>`;
			loadMoreButton.style.display = "none";
			return;
		}

		container.innerHTML = items
			.map((item) => {
				const bid = item.nextBid || item.buyNow || item.openingBid;
				const image = item.image || item.thumbnail || "/images/marketing/product-tv.jpg";
				const rawLink = item.itemLink || recomputeTheme.traderaFallback;
				const link = String(rawLink).replace(/^http:\/\//i, "https://");
				return `
					<article class="listing-card">
						<a class="listing-link" href="${link}" target="_blank" rel="noopener noreferrer">
							<img src="${image}" alt="${(item.title || "Tradera-annons").replace(/"/g, "&quot;")}">
							<div class="listing-body">
								<h3 class="listing-title">${item.title || "Annons"}</h3>
								<p class="listing-meta">${recomputeTheme.labelBid || "Bid"}: ${asCurrency(bid)}</p>
								<p class="listing-meta">${recomputeTheme.labelEnds || "Ends"}: ${asDate(item.endDate)}</p>
							</div>
						</a>
					</article>
				`;
			})
			.join("");

		updateButton();
	};

	loadMoreButton.addEventListener("click", () => {
		visibleCount += pageSize;
		render();
	});

	fetch(recomputeTheme.traderaUrl, { cache: "no-store" })
		.then((response) => {
			if (!response.ok) throw new Error("Unable to fetch Tradera listings.");
			return response.json();
		})
		.then((payload) => {
			allItems = Array.isArray(payload.items) ? payload.items : [];
			render();
		})
		.catch(() => {
			container.innerHTML = `<p class="empty">${recomputeTheme.labelLoadError || "Unable to load Tradera right now. Please try again later."}</p>`;
			loadMoreButton.style.display = "none";
		});
})();
