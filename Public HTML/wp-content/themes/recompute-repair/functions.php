<?php
/**
 * Theme setup and assets.
 *
 * @package recompute-repair
 */

if (!defined('ABSPATH')) {
	exit;
}

add_action('after_setup_theme', function () {
	load_theme_textdomain('recompute-repair', get_template_directory() . '/languages');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('custom-logo');

	register_nav_menus([
		'primary' => __('Primary Menu', 'recompute-repair'),
	]);
});

function recompute_languages(): array
{
	return [
		'sv' => 'Svenska',
		'en' => 'English',
		'ar' => 'العربية',
		'es' => 'Español',
		'fi' => 'Suomi',
		'ku' => 'Kurdî',
		'tr' => 'Türkçe',
		'pl' => 'Polski',
		'uk' => 'Українська',
	];
}

function recompute_default_translations(): array
{
	return [
		'sv' => [
			'label_language' => 'Språk',
			'nav_services' => 'Tjänster',
			'nav_about' => 'Om oss',
			'nav_tradera' => 'Tradera',
			'nav_contact' => 'Kontakt',
			'cta_book' => 'Boka reparation',
			'hero_eyebrow' => 'ÅTERBRUK & REPARATION',
			'hero_title' => 'Ge din elektronik ett nytt liv – vi reparerar, uppgraderar och återbrukar.',
			'hero_lead' => 'Specialister på begagnad elektronik och reparation – datorer, mobiler, TV och ljud. Alltid till bra pris, alltid med miljön i åtanke.',
			'hero_cta_services' => 'Våra tjänster',
			'hero_cta_tradera' => 'Köp begagnat på Tradera',
			'hero_card_title' => 'Varför re:Compute-IT?',
			'hero_card_1' => 'Kostnadsfri felsökning – du betalar bara om vi lagar den',
			'hero_card_2' => 'Reparation och försäljning av datorer, mobiler, TV, hifi och mer',
			'hero_card_3' => 'Hitta oss på ReTuna Återbruksgalleria i Eskilstuna',
			'services_eyebrow' => 'TJÄNSTER & REPARATION',
			'services_title' => 'Vi lagar det du vill behålla – och säljer det du behöver',
			'service1_title' => 'Dator & skärm',
			'service1_body' => 'Stationära och bärbara datorer, skärmar och tillbehör. Vi reparerar, uppgraderar och säljer begagnade exemplar till bra pris.',
			'service2_title' => 'Mobil & iPhone',
			'service2_body' => 'Glasbyte, batteribyten och mjukvarufelsökning för iPhone, Samsung och de flesta smartphones. Kom förbi – vi löser det oftast medan du är i gallerian.',
			'service3_title' => 'Konsol & spel',
			'service3_body' => 'Vi reparerar PS4, PS5, Xbox och Nintendo Switch. Vi säljer även begagnade konsoler, spel och tillbehör – alltid kontrollerade.',
			'service4_title' => 'Hifi & skivspelare',
			'service4_body' => 'Vi har ett brett utbud av hifi-utrustning, skivspelare och headset – både nytt och begagnat. Reparation och kalibrering utförs på plats.',
			'about_eyebrow' => 'OM RE:COMPUTE-IT',
			'about_title' => 'Specialister på elektronik med återbruk i fokus – sedan 2014 i ReTuna',
			'about_body' => 're:Compute-IT är den miljömedvetna dator- och elektronikbutiken i ReTuna Återbruksgalleria i Eskilstuna. Vi återbrukar, reparerar och säljer begagnad elektronik – datorer, mobiler, TV, hifi och mycket mer. Hos oss hittar du alltid något bra till ett bra pris, och du kan lämna in din trasiga enhet för reparation eller uppgradering. Vi hjälper både privatpersoner, föreningar och företag.',
			'stat1_label' => 'Sålda objekt på Tradera',
			'stat2_label' => 'Snabb återkoppling',
			'stat3_title' => 'Fokus',
			'stat3_label' => 'Hållbar elektronik',
			'tradera_eyebrow' => 'KÖP BEGAGNAT',
			'tradera_title' => 'Senaste från re:Compute-IT på Tradera',
			'tradera_json' => 'Visa JSON',
			'tradera_loading' => 'Laddar annonser...',
			'tradera_bid' => 'Bud',
			'tradera_ends' => 'Slutar',
			'tradera_no_listings' => 'Inga aktiva annonser just nu – kolla in oss igen snart!',
			'tradera_load_error' => 'Tradera kunde inte nås just nu. Besök vår profil direkt på Tradera.com!',
			'tradera_see_listing' => 'Se annons',
			'tradera_load_more' => 'Ladda fler',
			'tradera_all_loaded' => 'Inga fler annonser',
			'instagram_eyebrow' => 'INSTAGRAM',
			'instagram_title' => 'Senaste från Instagram',
			'instagram_fallback_empty' => 'Ingen Instagram-feed är kopplad ännu.',
			'instagram_open_profile' => 'Öppna vår Instagram',
			'footer_tagline' => 'Återbruk, reparation och försäljning av elektronik – på ReTuna i Eskilstuna.',
			'footer_contact_title' => 'Kontakt',
			'footer_email' => 'E-post: kontakt@recompute.it',
			'footer_phone' => 'Telefon: 016-541 67 00',
			'footer_hours_title' => 'Öppettider',
			'footer_hours_weekday' => 'Mån–Fre: Enligt ReTunas öppettider',
			'footer_hours_weekend' => 'Lör–Sön: Enligt ReTunas öppettider',
		],
		'en' => [
			'label_language' => 'Language',
			'nav_services' => 'Services',
			'nav_about' => 'About',
			'nav_tradera' => 'Tradera',
			'nav_contact' => 'Contact',
			'cta_book' => 'Book repair',
			'hero_eyebrow' => 'ELECTRONICS WORKSHOP',
			'hero_title' => 'Fast, reliable repair for technology worth keeping.',
			'hero_lead' => 'Inspired by premium repair studios: clear process, professional diagnostics, and quality-tested delivery.',
			'hero_cta_services' => 'View services',
			'hero_cta_tradera' => 'View Tradera',
			'hero_card_title' => 'Why choose us?',
			'hero_card_1' => 'Diagnosis within 24h for most devices',
			'hero_card_2' => 'Repair for computers, phones, consoles, and audio',
			'hero_card_3' => 'Pickup and drop-off by agreement',
			'services_eyebrow' => 'SERVICES',
			'services_title' => 'Built for modern electronics service',
			'service1_title' => 'Computer & workstation',
			'service1_body' => 'Motherboards, cooling issues, storage, and performance optimization.',
			'service2_title' => 'Phone & tablet',
			'service2_body' => 'Screen, charging port, battery, camera module, and software diagnostics.',
			'service3_title' => 'Console & gaming',
			'service3_body' => 'HDMI, overheating, control circuits, and controller repairs.',
			'service4_title' => 'Audio & vintage',
			'service4_body' => 'Recap, cleaning, signal path troubleshooting, and calibration of classic equipment.',
			'about_eyebrow' => 'ABOUT US',
			'about_title' => 'A technical workshop focused on lifespan and resale value',
			'about_body' => 'We combine repair work with active second-hand sales. This means each repair is made with practical market awareness of what is worth fixing, preserving, or upgrading.',
			'stat1_label' => 'Auction items handled',
			'stat2_label' => 'Typical response time',
			'stat3_title' => 'Focus',
			'stat3_label' => 'Sustainable electronics',
			'tradera_eyebrow' => 'TRADERA',
			'tradera_title' => 'Latest listings from Recompute',
			'tradera_json' => 'View JSON',
			'tradera_loading' => 'Loading listings...',
			'tradera_bid' => 'Bid',
			'tradera_ends' => 'Ends',
			'tradera_no_listings' => 'No listings found right now.',
			'tradera_load_error' => 'Unable to load Tradera right now. Please try again later.',
			'tradera_see_listing' => 'View listing',
			'tradera_load_more' => 'Load more',
			'tradera_all_loaded' => 'No more listings',
			'instagram_eyebrow' => 'INSTAGRAM',
			'instagram_title' => 'Latest from Instagram',
			'instagram_fallback_empty' => 'No Instagram feed is connected yet.',
			'instagram_open_profile' => 'Open our Instagram',
			'footer_tagline' => 'Repair, diagnostics, and second-hand electronics sales.',
			'footer_contact_title' => 'Contact',
			'footer_email' => 'Email: info@recomputeitnordic.se',
			'footer_phone' => 'Phone: +46 70 000 00 00',
			'footer_hours_title' => 'Opening hours',
			'footer_hours_weekday' => 'Mon-Fri: 09:00-18:00',
			'footer_hours_weekend' => 'Weekend: By appointment',
		],
		'ar' => [
			'label_language' => 'اللغة',
			'nav_services' => 'الخدمات',
			'nav_about' => 'من نحن',
			'nav_tradera' => 'تراديرا',
			'nav_contact' => 'اتصل بنا',
			'cta_book' => 'احجز الإصلاح',
			'hero_eyebrow' => 'ورشة إلكترونيات',
			'hero_title' => 'إصلاح سريع وموثوق للتقنية التي تستحق الاحتفاظ بها.',
			'hero_lead' => 'مستوحى من استوديوهات الإصلاح المميزة: عملية واضحة وتشخيص احترافي وتسليم مختبر الجودة.',
			'hero_cta_services' => 'عرض الخدمات',
			'hero_cta_tradera' => 'عرض تراديرا',
			'hero_card_title' => 'لماذا تختارنا؟',
			'hero_card_1' => 'تشخيص خلال 24 ساعة لمعظم الأجهزة',
			'hero_card_2' => 'إصلاح الكمبيوتر والهواتف وأجهزة الألعاب والصوتيات',
			'hero_card_3' => 'استلام وتسليم حسب الاتفاق',
			'services_eyebrow' => 'الخدمات',
			'services_title' => 'مصمم لخدمة الإلكترونيات الحديثة',
			'service1_title' => 'كمبيوتر ومحطات عمل',
			'service1_body' => 'لوحات أم ومشاكل التبريد والتخزين وتحسين الأداء.',
			'service2_title' => 'هاتف وجهاز لوحي',
			'service2_body' => 'شاشة ومنفذ شحن وبطارية ووحدة كاميرا وتشخيص برمجي.',
			'service3_title' => 'أجهزة ألعاب وجيمنج',
			'service3_body' => 'HDMI وارتفاع الحرارة ودوائر التحكم وإصلاح الأيدي.',
			'service4_title' => 'صوتيات وأجهزة كلاسيكية',
			'service4_body' => 'استبدال مكثفات وتنظيف وتتبع إشارة ومعايرة.',
			'about_eyebrow' => 'من نحن',
			'about_title' => 'ورشة تقنية تركز على عمر الجهاز وقيمته عند إعادة البيع',
			'about_body' => 'نجمع بين الإصلاح والبيع المستعمل، مما يمنح كل إصلاح رؤية سوقية واقعية حول ما يستحق الإصلاح أو الحفظ أو الترقية.',
			'stat1_label' => 'عناصر مزادات تمت معالجتها',
			'stat2_label' => 'متوسط وقت الرد',
			'stat3_title' => 'التركيز',
			'stat3_label' => 'إلكترونيات مستدامة',
			'tradera_eyebrow' => 'تراديرا',
			'tradera_title' => 'أحدث الإعلانات من Recompute',
			'tradera_json' => 'عرض JSON',
			'tradera_loading' => 'جارٍ تحميل الإعلانات...',
			'tradera_bid' => 'المزايدة',
			'tradera_ends' => 'ينتهي',
			'tradera_no_listings' => 'لا توجد إعلانات حالياً.',
			'tradera_load_error' => 'تعذر تحميل Tradera الآن. حاول لاحقاً.',
			'tradera_see_listing' => 'عرض الإعلان',
			'footer_tagline' => 'إصلاح وتشخيص وبيع إلكترونيات مستعملة.',
			'footer_contact_title' => 'اتصل بنا',
			'footer_email' => 'البريد: info@recomputeitnordic.se',
			'footer_phone' => 'الهاتف: +46 70 000 00 00',
			'footer_hours_title' => 'ساعات العمل',
			'footer_hours_weekday' => 'الإثنين-الجمعة: 09:00-18:00',
			'footer_hours_weekend' => 'عطلة نهاية الأسبوع: حسب الموعد',
		],
		'es' => [
			'label_language' => 'Idioma',
			'nav_services' => 'Servicios',
			'nav_about' => 'Sobre nosotros',
			'nav_tradera' => 'Tradera',
			'nav_contact' => 'Contacto',
			'cta_book' => 'Reservar reparación',
			'hero_eyebrow' => 'TALLER DE ELECTRÓNICA',
			'hero_title' => 'Reparación rápida y fiable para tecnología que vale la pena conservar.',
			'hero_lead' => 'Inspirado en estudios premium de reparación: proceso claro, diagnóstico profesional y entrega probada.',
			'hero_cta_services' => 'Ver servicios',
			'hero_cta_tradera' => 'Ver Tradera',
			'hero_card_title' => '¿Por qué elegirnos?',
			'hero_card_1' => 'Diagnóstico en 24h para la mayoría de dispositivos',
			'hero_card_2' => 'Reparación de ordenadores, móviles, consolas y audio',
			'hero_card_3' => 'Recogida y entrega según acuerdo',
			'services_eyebrow' => 'SERVICIOS',
			'services_title' => 'Diseñado para servicio moderno de electrónica',
			'service1_title' => 'Ordenador y workstation',
			'service1_body' => 'Placas base, problemas de refrigeración, almacenamiento y optimización.',
			'service2_title' => 'Móvil y tablet',
			'service2_body' => 'Pantalla, puerto de carga, batería, módulo de cámara y software.',
			'service3_title' => 'Consola y gaming',
			'service3_body' => 'HDMI, sobrecalentamiento, circuitos de control y mandos.',
			'service4_title' => 'Audio y vintage',
			'service4_body' => 'Recap, limpieza, rutas de señal y calibración.',
			'about_eyebrow' => 'SOBRE NOSOTROS',
			'about_title' => 'Taller técnico centrado en vida útil y valor de reventa',
			'about_body' => 'Combinamos trabajo de taller con venta de segunda mano para reparar con criterio real de mercado.',
			'stat1_label' => 'Artículos de subasta gestionados',
			'stat2_label' => 'Tiempo típico de respuesta',
			'stat3_title' => 'Enfoque',
			'stat3_label' => 'Electrónica sostenible',
			'tradera_eyebrow' => 'TRADERA',
			'tradera_title' => 'Últimos anuncios de Recompute',
			'tradera_json' => 'Ver JSON',
			'tradera_loading' => 'Cargando anuncios...',
			'tradera_bid' => 'Puja',
			'tradera_ends' => 'Termina',
			'tradera_no_listings' => 'No se encontraron anuncios por ahora.',
			'tradera_load_error' => 'No se pudo cargar Tradera ahora. Inténtalo más tarde.',
			'tradera_see_listing' => 'Ver anuncio',
			'footer_tagline' => 'Reparación, diagnóstico y venta de electrónica de segunda mano.',
			'footer_contact_title' => 'Contacto',
			'footer_email' => 'Correo: info@recomputeitnordic.se',
			'footer_phone' => 'Teléfono: +46 70 000 00 00',
			'footer_hours_title' => 'Horario',
			'footer_hours_weekday' => 'Lun-Vie: 09:00-18:00',
			'footer_hours_weekend' => 'Fin de semana: Con cita previa',
		],
		'fi' => [
			'label_language' => 'Kieli',
			'nav_services' => 'Palvelut',
			'nav_about' => 'Meistä',
			'nav_tradera' => 'Tradera',
			'nav_contact' => 'Yhteystiedot',
			'cta_book' => 'Varaa korjaus',
			'hero_eyebrow' => 'ELEKTRONIIKKATYÖPAJA',
			'hero_title' => 'Nopea ja luotettava korjaus tekniikalle, jonka haluat säilyttää.',
			'hero_lead' => 'Premium-korjaamoista inspiroitu: selkeä prosessi, ammattidiagnostiikka ja testattu toimitus.',
			'hero_cta_services' => 'Katso palvelut',
			'hero_cta_tradera' => 'Katso Tradera',
			'hero_card_title' => 'Miksi valita meidät?',
			'hero_card_1' => 'Diagnoosi 24 tunnissa useimmille laitteille',
			'hero_card_2' => 'Tietokone-, puhelin-, konsoli- ja audiokorjaukset',
			'hero_card_3' => 'Nouto ja palautus sopimuksen mukaan',
			'services_eyebrow' => 'PALVELUT',
			'services_title' => 'Rakennettu moderniin elektroniikkahuoltoon',
			'service1_title' => 'Tietokone & työasema',
			'service1_body' => 'Emolevyt, jäähdytys, tallennus ja suorituskyvyn optimointi.',
			'service2_title' => 'Puhelin & tabletti',
			'service2_body' => 'Näyttö, latausportti, akku, kamera ja ohjelmistodiagnostiikka.',
			'service3_title' => 'Konsoli & pelaaminen',
			'service3_body' => 'HDMI, ylikuumeneminen, ohjauspiirit ja ohjainkorjaukset.',
			'service4_title' => 'Audio & vintage',
			'service4_body' => 'Recap, puhdistus, signaalireitit ja kalibrointi.',
			'about_eyebrow' => 'MEISTÄ',
			'about_title' => 'Tekninen työpaja, fokus käyttöiässä ja jälleenmyyntiarvossa',
			'about_body' => 'Yhdistämme korjaustyön aktiiviseen käytettyjen myyntiin, jotta jokainen korjaus tehdään markkinatiedolla.',
			'stat1_label' => 'Käsiteltyä huutokauppakohdetta',
			'stat2_label' => 'Tyypillinen vastausaika',
			'stat3_title' => 'Fokus',
			'stat3_label' => 'Kestävä elektroniikka',
			'tradera_eyebrow' => 'TRADERA',
			'tradera_title' => 'Uusimmat ilmoitukset Recomputelta',
			'tradera_json' => 'Näytä JSON',
			'tradera_loading' => 'Ladataan ilmoituksia...',
			'tradera_bid' => 'Tarjous',
			'tradera_ends' => 'Päättyy',
			'tradera_no_listings' => 'Ilmoituksia ei löytynyt juuri nyt.',
			'tradera_load_error' => 'Traderaa ei voitu ladata nyt. Yritä myöhemmin uudelleen.',
			'tradera_see_listing' => 'Näytä ilmoitus',
			'footer_tagline' => 'Korjaus, diagnostiikka ja käytetyn elektroniikan myynti.',
			'footer_contact_title' => 'Yhteystiedot',
			'footer_email' => 'Sähköposti: info@recomputeitnordic.se',
			'footer_phone' => 'Puhelin: +46 70 000 00 00',
			'footer_hours_title' => 'Aukioloajat',
			'footer_hours_weekday' => 'Ma-Pe: 09:00-18:00',
			'footer_hours_weekend' => 'Viikonloppu: Sopimuksen mukaan',
		],
		'ku' => [
			'label_language' => 'Ziman',
			'nav_services' => 'Xizmet',
			'nav_about' => 'Derbarê me de',
			'nav_tradera' => 'Tradera',
			'nav_contact' => 'Têkilî',
			'cta_book' => 'Çakirinê rezerwê bike',
			'hero_eyebrow' => 'WORKSHOPA ELEKTRONÎKÊ',
			'hero_title' => 'Çakirinê zû û ewle ji bo teknolojiyê ya ku hûn dixwazin biparêzin.',
			'hero_lead' => 'Ji studioyên çakirinê yên profesyonel hatiye îlhambûn: pêvajoyek zelal, teşhîsa profesyonel û radestkirina testkirî.',
			'hero_cta_services' => 'Xizmetan bibîne',
			'hero_cta_tradera' => 'Tradera bibîne',
			'hero_card_title' => 'Çima em?',
			'hero_card_1' => 'Di 24 saetan de teşhîs ji bo piraniya amûran',
			'hero_card_2' => 'Çakirinê bo komputer, mobil, konsol û deng',
			'hero_card_3' => 'Girtin û teslimkirin li gorî peymanê',
			'services_eyebrow' => 'XIZMET',
			'services_title' => 'Ji bo servîsa elektronîkê ya nûjen hatiye çêkirin',
			'service1_title' => 'Komputer & workstation',
			'service1_body' => 'Motherboard, pirsgirêkên sarbûnê, storage û optimîzasyona performansê.',
			'service2_title' => 'Mobil & tablet',
			'service2_body' => 'Ekran, portê şarjê, batarya, kamerayê û teşhîsa software.',
			'service3_title' => 'Konsol & gaming',
			'service3_body' => 'HDMI, zêde germbûn, çerxên kontrolê û çakirinê controller.',
			'service4_title' => 'Audio & vintage',
			'service4_body' => 'Recap, paqijkirin, rêyên signal û kalîbrasyon.',
			'about_eyebrow' => 'DERBARÊ ME DE',
			'about_title' => 'Workshopa teknîkî bi fokus li temenê amûrê û nirxa firotina carek din',
			'about_body' => 'Em karê workshopê bi firotina second-hand re têkilî dikin da ku her çakirin bi têgihiştina bazarê were birêvebirin.',
			'stat1_label' => 'Tiştên mezadê yên hate birêvebirin',
			'stat2_label' => 'Dema bersivê ya asayî',
			'stat3_title' => 'Fokus',
			'stat3_label' => 'Elektronîka domdar',
			'tradera_eyebrow' => 'TRADERA',
			'tradera_title' => 'Daxuyaniyên herî dawî ji Recompute',
			'tradera_json' => 'JSON nîşan bide',
			'tradera_loading' => 'Daxuyaniyên tê barkirin...',
			'tradera_bid' => 'Pêşkêş',
			'tradera_ends' => 'Diqede',
			'tradera_no_listings' => 'Niha daxuyanî nehatin dîtin.',
			'tradera_load_error' => 'Niha Tradera nayê barkirin. Ji kerema xwe paşê dîsa biceribîne.',
			'tradera_see_listing' => 'Daxuyanî bibîne',
			'footer_tagline' => 'Çakirin, teşhîs û firotina elektronîka second-hand.',
			'footer_contact_title' => 'Têkilî',
			'footer_email' => 'E-name: info@recomputeitnordic.se',
			'footer_phone' => 'Telefon: +46 70 000 00 00',
			'footer_hours_title' => 'Demjimêrên vekirinê',
			'footer_hours_weekday' => 'Duşem-Înê: 09:00-18:00',
			'footer_hours_weekend' => 'Dawiya hefteyê: Bi peyman',
		],
		'tr' => [
			'label_language' => 'Dil',
			'nav_services' => 'Hizmetler',
			'nav_about' => 'Hakkımızda',
			'nav_tradera' => 'Tradera',
			'nav_contact' => 'İletişim',
			'cta_book' => 'Onarım randevusu al',
			'hero_eyebrow' => 'ELEKTRONİK ATÖLYESİ',
			'hero_title' => 'Korunmaya değer teknoloji için hızlı ve güvenilir onarım.',
			'hero_lead' => 'Premium onarım stüdyolarından ilham: net süreç, profesyonel teşhis ve kalite testli teslimat.',
			'hero_cta_services' => 'Hizmetleri gör',
			'hero_cta_tradera' => 'Tradera’yı gör',
			'hero_card_title' => 'Neden bizi seçmelisiniz?',
			'hero_card_1' => 'Çoğu cihaz için 24 saat içinde teşhis',
			'hero_card_2' => 'Bilgisayar, telefon, konsol ve ses onarımları',
			'hero_card_3' => 'Anlaşmaya göre teslim alma ve bırakma',
			'services_eyebrow' => 'HİZMETLER',
			'services_title' => 'Modern elektronik servisi için tasarlandı',
			'service1_title' => 'Bilgisayar ve workstation',
			'service1_body' => 'Anakart, soğutma sorunları, depolama ve performans optimizasyonu.',
			'service2_title' => 'Telefon ve tablet',
			'service2_body' => 'Ekran, şarj portu, batarya, kamera modülü ve yazılım teşhisi.',
			'service3_title' => 'Konsol ve oyun',
			'service3_body' => 'HDMI, aşırı ısınma, kontrol devreleri ve gamepad onarımları.',
			'service4_title' => 'Ses ve vintage',
			'service4_body' => 'Recap, temizlik, sinyal yolları ve kalibrasyon.',
			'about_eyebrow' => 'HAKKIMIZDA',
			'about_title' => 'Cihaz ömrü ve ikinci el değerine odaklı teknik atölye',
			'about_body' => 'Onarımı aktif ikinci el satışla birleştiriyoruz; böylece her iş gerçek piyasa bilgisiyle yapılır.',
			'stat1_label' => 'Yönetilen açık artırma ürünü',
			'stat2_label' => 'Tipik yanıt süresi',
			'stat3_title' => 'Odak',
			'stat3_label' => 'Sürdürülebilir elektronik',
			'tradera_eyebrow' => 'TRADERA',
			'tradera_title' => 'Recompute’tan son ilanlar',
			'tradera_json' => 'JSON göster',
			'tradera_loading' => 'İlanlar yükleniyor...',
			'tradera_bid' => 'Teklif',
			'tradera_ends' => 'Bitiş',
			'tradera_no_listings' => 'Şu anda ilan bulunamadı.',
			'tradera_load_error' => 'Tradera şu anda yüklenemiyor. Lütfen daha sonra tekrar deneyin.',
			'tradera_see_listing' => 'İlanı gör',
			'footer_tagline' => 'Onarım, teşhis ve ikinci el elektronik satışı.',
			'footer_contact_title' => 'İletişim',
			'footer_email' => 'E-posta: info@recomputeitnordic.se',
			'footer_phone' => 'Telefon: +46 70 000 00 00',
			'footer_hours_title' => 'Çalışma saatleri',
			'footer_hours_weekday' => 'Pzt-Cuma: 09:00-18:00',
			'footer_hours_weekend' => 'Hafta sonu: Randevu ile',
		],
		'pl' => [
			'label_language' => 'Język',
			'nav_services' => 'Usługi',
			'nav_about' => 'O nas',
			'nav_tradera' => 'Tradera',
			'nav_contact' => 'Kontakt',
			'cta_book' => 'Zarezerwuj naprawę',
			'hero_eyebrow' => 'WARSZTAT ELEKTRONICZNY',
			'hero_title' => 'Szybka i niezawodna naprawa technologii, którą warto zachować.',
			'hero_lead' => 'Inspiracja premium serwisami: jasny proces, profesjonalna diagnostyka i testowana jakość.',
			'hero_cta_services' => 'Zobacz usługi',
			'hero_cta_tradera' => 'Zobacz Tradera',
			'hero_card_title' => 'Dlaczego my?',
			'hero_card_1' => 'Diagnostyka w 24h dla większości urządzeń',
			'hero_card_2' => 'Naprawa komputerów, telefonów, konsol i audio',
			'hero_card_3' => 'Odbiór i zwrot po uzgodnieniu',
			'services_eyebrow' => 'USŁUGI',
			'services_title' => 'Stworzone dla nowoczesnego serwisu elektroniki',
			'service1_title' => 'Komputer i stacja robocza',
			'service1_body' => 'Płyty główne, chłodzenie, pamięć i optymalizacja wydajności.',
			'service2_title' => 'Telefon i tablet',
			'service2_body' => 'Ekran, port ładowania, bateria, moduł kamery i diagnostyka oprogramowania.',
			'service3_title' => 'Konsola i gaming',
			'service3_body' => 'HDMI, przegrzewanie, układy sterujące i naprawy kontrolerów.',
			'service4_title' => 'Audio i vintage',
			'service4_body' => 'Recap, czyszczenie, tory sygnału i kalibracja.',
			'about_eyebrow' => 'O NAS',
			'about_title' => 'Warsztat techniczny skupiony na żywotności i wartości odsprzedaży',
			'about_body' => 'Łączymy naprawy z aktywną sprzedażą używaną, dzięki czemu każda naprawa ma realny kontekst rynkowy.',
			'stat1_label' => 'Obsłużonych pozycji aukcyjnych',
			'stat2_label' => 'Typowy czas odpowiedzi',
			'stat3_title' => 'Fokus',
			'stat3_label' => 'Zrównoważona elektronika',
			'tradera_eyebrow' => 'TRADERA',
			'tradera_title' => 'Najnowsze ogłoszenia Recompute',
			'tradera_json' => 'Pokaż JSON',
			'tradera_loading' => 'Ładowanie ogłoszeń...',
			'tradera_bid' => 'Oferta',
			'tradera_ends' => 'Koniec',
			'tradera_no_listings' => 'Brak ogłoszeń w tej chwili.',
			'tradera_load_error' => 'Nie można teraz załadować Tradera. Spróbuj ponownie później.',
			'tradera_see_listing' => 'Zobacz ogłoszenie',
			'footer_tagline' => 'Naprawa, diagnostyka i sprzedaż używanej elektroniki.',
			'footer_contact_title' => 'Kontakt',
			'footer_email' => 'E-mail: info@recomputeitnordic.se',
			'footer_phone' => 'Telefon: +46 70 000 00 00',
			'footer_hours_title' => 'Godziny otwarcia',
			'footer_hours_weekday' => 'Pon-Pt: 09:00-18:00',
			'footer_hours_weekend' => 'Weekend: Po umówieniu',
		],
		'uk' => [
			'label_language' => 'Мова',
			'nav_services' => 'Послуги',
			'nav_about' => 'Про нас',
			'nav_tradera' => 'Tradera',
			'nav_contact' => 'Контакти',
			'cta_book' => 'Забронювати ремонт',
			'hero_eyebrow' => 'МАЙСТЕРНЯ ЕЛЕКТРОНІКИ',
			'hero_title' => 'Швидкий і надійний ремонт техніки, яку варто зберігати.',
			'hero_lead' => 'Натхненно преміум-сервісами: чіткий процес, професійна діагностика та перевірена якість.',
			'hero_cta_services' => 'Переглянути послуги',
			'hero_cta_tradera' => 'Переглянути Tradera',
			'hero_card_title' => 'Чому обирають нас?',
			'hero_card_1' => 'Діагностика за 24 години для більшості пристроїв',
			'hero_card_2' => 'Ремонт ПК, телефонів, консолей і аудіо',
			'hero_card_3' => 'Забір і повернення за домовленістю',
			'services_eyebrow' => 'ПОСЛУГИ',
			'services_title' => 'Створено для сучасного сервісу електроніки',
			'service1_title' => 'Комп’ютер і workstation',
			'service1_body' => 'Материнські плати, охолодження, накопичувачі та оптимізація продуктивності.',
			'service2_title' => 'Телефон і планшет',
			'service2_body' => 'Екран, порт зарядки, батарея, камера та діагностика ПЗ.',
			'service3_title' => 'Консоль і gaming',
			'service3_body' => 'HDMI, перегрів, керуючі схеми та ремонт контролерів.',
			'service4_title' => 'Аудіо та vintage',
			'service4_body' => 'Recap, чистка, сигнальні ланцюги та калібрування.',
			'about_eyebrow' => 'ПРО НАС',
			'about_title' => 'Технічна майстерня з фокусом на довговічність і ринкову цінність',
			'about_body' => 'Ми поєднуємо ремонт з активним продажем б/в техніки, тому кожне рішення базується на реальному ринку.',
			'stat1_label' => 'Оброблено аукціонних позицій',
			'stat2_label' => 'Типовий час відповіді',
			'stat3_title' => 'Фокус',
			'stat3_label' => 'Стійка електроніка',
			'tradera_eyebrow' => 'TRADERA',
			'tradera_title' => 'Останні оголошення від Recompute',
			'tradera_json' => 'Показати JSON',
			'tradera_loading' => 'Завантаження оголошень...',
			'tradera_bid' => 'Ставка',
			'tradera_ends' => 'Завершення',
			'tradera_no_listings' => 'Наразі оголошень не знайдено.',
			'tradera_load_error' => 'Не вдалося завантажити Tradera зараз. Спробуйте пізніше.',
			'tradera_see_listing' => 'Переглянути оголошення',
			'footer_tagline' => 'Ремонт, діагностика та продаж вживаної електроніки.',
			'footer_contact_title' => 'Контакти',
			'footer_email' => 'E-mail: info@recomputeitnordic.se',
			'footer_phone' => 'Телефон: +46 70 000 00 00',
			'footer_hours_title' => 'Години роботи',
			'footer_hours_weekday' => 'Пн-Пт: 09:00-18:00',
			'footer_hours_weekend' => 'Вихідні: За домовленістю',
		],
	];
}


function recompute_current_lang(): string
{
	$supported = array_keys(recompute_languages());

	if (isset($_GET['lang'])) {
		$lang = sanitize_key(wp_unslash($_GET['lang']));
		if (in_array($lang, $supported, true)) {
			if (!headers_sent()) {
				setcookie('recompute_lang', $lang, [
					'expires' => time() + YEAR_IN_SECONDS,
					'path' => COOKIEPATH ?: '/',
					'secure' => is_ssl(),
					'httponly' => false,
					'samesite' => 'Lax',
				]);
			}
			return $lang;
		}
	}

	if (isset($_COOKIE['recompute_lang'])) {
		$lang = sanitize_key(wp_unslash((string) $_COOKIE['recompute_lang']));
		if (in_array($lang, $supported, true)) {
			return $lang;
		}
	}

	$country = recompute_request_country_code();
	if ($country === 'SE') {
		return 'sv';
	}

	return 'sv';
}

function recompute_request_country_code(): string
{
	$candidates = [
		'HTTP_CF_IPCOUNTRY',      // Cloudflare
		'GEOIP_COUNTRY_CODE',     // GeoIP module
		'HTTP_X_COUNTRY_CODE',    // Proxy/CDN custom header
		'HTTP_X_APPENGINE_COUNTRY', // App Engine style header
	];

	foreach ($candidates as $key) {
		if (!isset($_SERVER[$key])) {
			continue;
		}
		$value = strtoupper(trim((string) $_SERVER[$key]));
		if (preg_match('/^[A-Z]{2}$/', $value)) {
			return $value;
		}
	}

	return '';
}

function recompute_lang_url(string $lang): string
{
	$current_url = (is_ssl() ? 'https://' : 'http://') . wp_unslash($_SERVER['HTTP_HOST']) . wp_unslash($_SERVER['REQUEST_URI']);
	return esc_url(add_query_arg('lang', $lang, $current_url));
}

function recompute_translations_for_lang(string $lang): array
{
	$defaults = recompute_default_translations();
	$base = $defaults[$lang] ?? $defaults['en'];
	$cms = recompute_cms_translations();
	$cms_lang = $cms[$lang] ?? [];

	$merged = $base;

	foreach ($cms_lang as $key => $value) {
		if (is_string($key) && is_scalar($value) && (string) $value !== '') {
			$merged[$key] = (string) $value;
		}
	}

	return $merged;
}

function recompute_copy(string $key, ?string $lang = null): string
{
	$resolved_lang = $lang ?: recompute_current_lang();
	$current = recompute_translations_for_lang($resolved_lang);
	if (isset($current[$key])) {
		return $current[$key];
	}

	$en = recompute_translations_for_lang('en');
	if (isset($en[$key])) {
		return $en[$key];
	}

	$sv = recompute_translations_for_lang('sv');
	return $sv[$key] ?? $key;
}

function recompute_cms_translations(): array
{
	$stored = get_option('recompute_cms_translations', []);
	return is_array($stored) ? $stored : [];
}

function recompute_openai_api_key(): string
{
	if (defined('RECOMPUTE_OPENAI_API_KEY') && is_string(RECOMPUTE_OPENAI_API_KEY)) {
		return trim(RECOMPUTE_OPENAI_API_KEY);
	}

	$env_key = getenv('RECOMPUTE_OPENAI_API_KEY');
	return is_string($env_key) ? trim($env_key) : '';
}

function recompute_openai_model(): string
{
	if (defined('RECOMPUTE_OPENAI_MODEL') && is_string(RECOMPUTE_OPENAI_MODEL) && trim(RECOMPUTE_OPENAI_MODEL) !== '') {
		return trim(RECOMPUTE_OPENAI_MODEL);
	}

	return 'gpt-4o-mini';
}

function recompute_translation_targets(): array
{
	return [
		'en' => 'English',
		'ar' => 'Arabic',
		'es' => 'Spanish',
		'fi' => 'Finnish',
		'ku' => 'Kurdish (Kurmanji)',
		'tr' => 'Turkish',
		'pl' => 'Polish',
		'uk' => 'Ukrainian',
	];
}

function recompute_schedule_auto_translation(): void
{
	if (wp_next_scheduled('recompute_auto_translate_event')) {
		return;
	}

	// Run shortly after save; WP-Cron executes on next request.
	wp_schedule_single_event(time() + 20, 'recompute_auto_translate_event');
}

function recompute_extract_json_object(string $content): string
{
	$trimmed = trim($content);
	$trimmed = preg_replace('/^```(?:json)?\s*/i', '', $trimmed);
	$trimmed = preg_replace('/\s*```$/', '', (string) $trimmed);
	$trimmed = trim((string) $trimmed);

	if ($trimmed !== '' && $trimmed[0] === '{') {
		return $trimmed;
	}

	$start = strpos($trimmed, '{');
	$end = strrpos($trimmed, '}');
	if ($start !== false && $end !== false && $end > $start) {
		return substr($trimmed, $start, $end - $start + 1);
	}

	return $trimmed;
}

function recompute_translation_locked_terms(): array
{
	return [
		're:Compute-IT',
		'Recompute-IT',
		'Recompute IT',
		'recompute.it',
		'Tradera',
	];
}

function recompute_protect_locked_terms(array $texts): array
{
	$terms = recompute_translation_locked_terms();
	usort($terms, static function (string $a, string $b): int {
		return strlen($b) <=> strlen($a);
	});

	$protected = [];
	$maps = [];

	foreach ($texts as $text) {
		$value = is_scalar($text) ? (string) $text : '';
		$map = [];

		foreach ($terms as $idx => $term) {
			if ($term === '' || !str_contains($value, $term)) {
				continue;
			}
			$placeholder = '__BRAND_LOCK_' . $idx . '__';
			$value = str_replace($term, $placeholder, $value);
			$map[$placeholder] = $term;
		}

		$protected[] = $value;
		$maps[] = $map;
	}

	return [$protected, $maps];
}

function recompute_restore_locked_terms(array $texts, array $maps): array
{
	$restored = [];

	foreach ($texts as $idx => $text) {
		$value = is_scalar($text) ? (string) $text : '';
		$map = isset($maps[$idx]) && is_array($maps[$idx]) ? $maps[$idx] : [];
		if (!empty($map)) {
			$value = str_replace(array_keys($map), array_values($map), $value);
		}
		$restored[] = $value;
	}

	return $restored;
}

function recompute_openai_translate_batch(array $texts, string $target_lang_name): array
{
	$api_key = recompute_openai_api_key();
	if ($api_key === '') {
		return [];
	}

	[$texts_for_translation, $locked_maps] = recompute_protect_locked_terms(array_values($texts));

	$payload = [
		'model' => recompute_openai_model(),
		'temperature' => 0.2,
		'response_format' => ['type' => 'json_object'],
		'messages' => [
			[
				'role' => 'system',
				'content' => 'You are a translation engine. Translate Swedish text to the requested target language. Never translate or modify placeholders in the form __BRAND_LOCK_N__. Return only valid minified JSON with this schema: {"translations":["..."]}. Keep order and length identical to input.',
			],
			[
				'role' => 'user',
				'content' => wp_json_encode([
					'source_language' => 'Swedish',
					'target_language' => $target_lang_name,
					'texts' => $texts_for_translation,
				], JSON_UNESCAPED_UNICODE),
			],
		],
	];

	$response = wp_remote_post('https://api.openai.com/v1/chat/completions', [
		'timeout' => 40,
		'headers' => [
			'Authorization' => 'Bearer ' . $api_key,
			'Content-Type' => 'application/json',
		],
		'body' => wp_json_encode($payload, JSON_UNESCAPED_UNICODE),
	]);

	if (is_wp_error($response)) {
		return [];
	}

	$status = (int) wp_remote_retrieve_response_code($response);
	$body = json_decode((string) wp_remote_retrieve_body($response), true);
	if ($status < 200 || $status >= 300 || !is_array($body) || !isset($body['choices'][0]['message']['content'])) {
		return [];
	}

	$content = $body['choices'][0]['message']['content'];
	if (!is_string($content) || trim($content) === '') {
		return [];
	}

	$parsed = json_decode(recompute_extract_json_object($content), true);
	if (!is_array($parsed) || !isset($parsed['translations']) || !is_array($parsed['translations'])) {
		return [];
	}

	$out = [];
	foreach ($parsed['translations'] as $entry) {
		if (is_scalar($entry)) {
			$out[] = (string) $entry;
		}
	}

	return recompute_restore_locked_terms($out, $locked_maps);
}

function recompute_run_auto_translation(): array
{
	$api_key = recompute_openai_api_key();
	if ($api_key === '') {
		return ['ok' => false, 'message' => 'missing_api_key', 'updated' => 0];
	}

	$defaults = recompute_default_translations();
	$cms = recompute_cms_translations();
	$sv_defaults = $defaults['sv'] ?? [];
	$sv_cms = is_array($cms['sv'] ?? null) ? $cms['sv'] : [];
	$source = array_merge($sv_defaults, $sv_cms);
	$targets = recompute_translation_targets();
	$updated = 0;

	foreach ($targets as $lang_code => $target_lang_name) {
		if ($lang_code === 'sv') {
			continue;
		}

		$lang_defaults = $defaults[$lang_code] ?? ($defaults['en'] ?? []);
		$lang_current = is_array($cms[$lang_code] ?? null) ? $cms[$lang_code] : [];
		$merged = array_merge($lang_defaults, $lang_current);

		$keys = array_keys($sv_defaults);
		$texts = [];
		foreach ($keys as $key) {
			$value = $source[$key] ?? '';
			$texts[] = is_scalar($value) ? (string) $value : '';
		}

		$translated = recompute_openai_translate_batch($texts, $target_lang_name);
		if (count($translated) !== count($texts)) {
			continue;
		}

		foreach ($keys as $idx => $key) {
			$merged[$key] = $translated[$idx];
		}

		$cms[$lang_code] = $merged;
		$updated++;
	}

	update_option('recompute_cms_translations', $cms, false);
	return ['ok' => true, 'message' => 'done', 'updated' => $updated];
}

add_action('recompute_auto_translate_event', function () {
	recompute_run_auto_translation();
});

function recompute_is_large_text_key(string $key): bool
{
	$large_markers = ['_body', '_lead', '_title', '_loading', '_error', '_weekday', '_weekend'];
	foreach ($large_markers as $marker) {
		if (str_contains($key, $marker)) {
			return true;
		}
	}
	return false;
}

function recompute_humanize_key(string $key): string
{
	$key = str_replace('_', ' ', $key);
	return ucwords($key);
}

function recompute_hidden_cms_keys(): array
{
	return ['tradera_json'];
}

add_action('admin_menu', function () {
	add_theme_page(
		__('Recompute CMS', 'recompute-repair'),
		__('Recompute CMS', 'recompute-repair'),
		'manage_options',
		'recompute-cms',
		'recompute_render_cms_page'
	);
});

function recompute_render_cms_page(): void
{
	if (!current_user_can('manage_options')) {
		return;
	}

	$languages = recompute_languages();
	$defaults = recompute_default_translations();
	$selected_lang = isset($_GET['lang']) ? sanitize_key(wp_unslash($_GET['lang'])) : 'sv';
	if (!isset($languages[$selected_lang])) {
		$selected_lang = 'sv';
	}

	$option_data = recompute_cms_translations();
	$lang_defaults = $defaults[$selected_lang] ?? ($defaults['en'] ?? []);
	$current = array_merge($lang_defaults, $option_data[$selected_lang] ?? []);
	$current_instagram_profile_url = recompute_instagram_profile_url();
	$current_instagram_shortcode = recompute_instagram_shortcode();

	if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recompute_cms_nonce'])) {
		if (wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['recompute_cms_nonce'])), 'recompute_cms_save')) {
			$submitted = isset($_POST['copy']) && is_array($_POST['copy']) ? wp_unslash($_POST['copy']) : [];
			$sanitized = [];

			foreach ($lang_defaults as $key => $default_value) {
				$value = isset($submitted[$key]) ? (string) $submitted[$key] : '';
				$sanitized[$key] = sanitize_textarea_field($value);
			}

			$option_data[$selected_lang] = $sanitized;
			update_option('recompute_cms_translations', $option_data, false);
			$current = array_merge($lang_defaults, $sanitized);

			$instagram_profile_submitted = isset($_POST['instagram_profile_url']) ? (string) wp_unslash($_POST['instagram_profile_url']) : '';
			$instagram_shortcode_submitted = isset($_POST['instagram_shortcode']) ? (string) wp_unslash($_POST['instagram_shortcode']) : '';
			$instagram_profile_sanitized = esc_url_raw(trim($instagram_profile_submitted));
			$instagram_shortcode_sanitized = sanitize_text_field($instagram_shortcode_submitted);

			if ($instagram_profile_sanitized === '') {
				$instagram_profile_sanitized = 'https://www.instagram.com/recomputeitnordic/';
			}

			set_theme_mod('recompute_instagram_profile_url', $instagram_profile_sanitized);
			set_theme_mod('recompute_instagram_shortcode', $instagram_shortcode_sanitized);
			$current_instagram_profile_url = $instagram_profile_sanitized;
			$current_instagram_shortcode = $instagram_shortcode_sanitized;

			if ($selected_lang === 'sv') {
				$result = recompute_run_auto_translation();
				recompute_schedule_auto_translation();
				if (!empty($result['ok'])) {
					echo '<div class="notice notice-info is-dismissible"><p>' .
						esc_html(sprintf(__('Auto-translation updated %d language versions.', 'recompute-repair'), (int) ($result['updated'] ?? 0))) .
						'</p></div>';
				}
			}

			echo '<div class="notice notice-success is-dismissible"><p>' .
				esc_html__('Saved language content.', 'recompute-repair') .
				'</p></div>';

			if ($selected_lang === 'sv' && recompute_openai_api_key() === '') {
				echo '<div class="notice notice-warning is-dismissible"><p>' .
					esc_html__('Auto-translation is not active. Add RECOMPUTE_OPENAI_API_KEY in wp-config.php.', 'recompute-repair') .
					'</p></div>';
			}
		}
	}

	echo '<div class="wrap">';
	echo '<h1>' . esc_html__('Recompute CMS', 'recompute-repair') . '</h1>';
	echo '<p>' . esc_html__('Edit homepage text content per language.', 'recompute-repair') . '</p>';

	echo '<form method="get" style="margin: 12px 0 18px;">';
	echo '<input type="hidden" name="page" value="recompute-cms">';
	echo '<label for="lang" style="margin-right:8px;">' . esc_html__('Language', 'recompute-repair') . '</label>';
	echo '<select id="lang" name="lang" onchange="this.form.submit()">';
	foreach ($languages as $code => $label) {
		echo '<option value="' . esc_attr($code) . '"' . selected($selected_lang, $code, false) . '>' . esc_html($label) . '</option>';
	}
	echo '</select>';
	echo '</form>';

	echo '<form method="post">';
	wp_nonce_field('recompute_cms_save', 'recompute_cms_nonce');
	echo '<h2 style="margin-top:6px;">' . esc_html__('Social', 'recompute-repair') . '</h2>';
	echo '<table class="form-table" role="presentation">';
	echo '<tr>';
	echo '<th scope="row"><label for="instagram_profile_url">' . esc_html__('Instagram profile URL', 'recompute-repair') . '</label></th>';
	echo '<td><input id="instagram_profile_url" name="instagram_profile_url" type="url" class="regular-text" value="' . esc_attr($current_instagram_profile_url) . '"></td>';
	echo '</tr>';
	echo '<tr>';
	echo '<th scope="row"><label for="instagram_shortcode">' . esc_html__('Instagram feed shortcode', 'recompute-repair') . '</label></th>';
	echo '<td><input id="instagram_shortcode" name="instagram_shortcode" type="text" class="regular-text" value="' . esc_attr($current_instagram_shortcode) . '">';
	echo '<p class="description">' . esc_html__('Example: [instagram-feed feed=1]', 'recompute-repair') . '</p></td>';
	echo '</tr>';
	echo '</table>';
	echo '<h2 style="margin-top:16px;">' . esc_html__('Language Content', 'recompute-repair') . '</h2>';
	echo '<table class="form-table" role="presentation">';
	$hidden_keys = recompute_hidden_cms_keys();
	foreach ($lang_defaults as $key => $default_value) {
		if (in_array((string) $key, $hidden_keys, true)) {
			continue;
		}
		$value = isset($current[$key]) ? (string) $current[$key] : (string) $default_value;
		echo '<tr>';
		echo '<th scope="row"><label for="copy_' . esc_attr($key) . '">' . esc_html(recompute_humanize_key($key)) . '</label></th>';
		echo '<td>';
		if (recompute_is_large_text_key((string) $key)) {
			echo '<textarea id="copy_' . esc_attr($key) . '" name="copy[' . esc_attr($key) . ']" rows="3" class="large-text">' . esc_textarea($value) . '</textarea>';
		} else {
			echo '<input id="copy_' . esc_attr($key) . '" name="copy[' . esc_attr($key) . ']" type="text" class="regular-text" value="' . esc_attr($value) . '">';
		}
		echo '</td>';
		echo '</tr>';
	}
	echo '</table>';
	submit_button(__('Save Language Content', 'recompute-repair'));
	echo '</form>';
	echo '</div>';
}

function recompute_render_language_selector(): void
{
	$current_lang = recompute_current_lang();
	$languages = recompute_languages();

	echo '<form class="lang-form" method="get" action="">';
	echo '<label class="lang-label" for="recompute-lang-select">' . esc_html(recompute_copy('label_language')) . '</label>';
	echo '<div class="lang-select-wrap">';
	echo '<select id="recompute-lang-select" class="lang-select" name="lang" onchange="this.form.submit()">';

	foreach ($languages as $code => $label) {
		echo '<option value="' . esc_attr($code) . '"' . selected($current_lang, $code, false) . '>' . esc_html($label) . '</option>';
	}

	echo '</select>';
	echo '</div>';

	foreach ($_GET as $key => $value) {
		if ($key === 'lang') {
			continue;
		}
		if (!is_scalar($value)) {
			continue;
		}
		echo '<input type="hidden" name="' . esc_attr($key) . '" value="' . esc_attr(wp_unslash((string) $value)) . '">';
	}

	echo '</form>';
}

add_action('customize_register', function ($wp_customize) {
	$wp_customize->add_section('recompute_branding', [
		'title' => __('Recompute Branding', 'recompute-repair'),
		'priority' => 35,
	]);

	$wp_customize->add_setting('recompute_logo_header');
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'recompute_logo_header', [
		'label' => __('Header logo', 'recompute-repair'),
		'section' => 'recompute_branding',
	]));

	$wp_customize->add_setting('recompute_logo_footer');
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'recompute_logo_footer', [
		'label' => __('Footer logo', 'recompute-repair'),
		'section' => 'recompute_branding',
	]));

	$wp_customize->add_setting('recompute_logo_tradera');
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'recompute_logo_tradera', [
		'label' => __('Tradera logo', 'recompute-repair'),
		'section' => 'recompute_branding',
	]));

	$wp_customize->add_setting('recompute_instagram_profile_url', [
		'default' => 'https://www.instagram.com/recomputeitnordic/',
		'sanitize_callback' => 'esc_url_raw',
	]);
	$wp_customize->add_control('recompute_instagram_profile_url', [
		'label' => __('Instagram profile URL', 'recompute-repair'),
		'section' => 'recompute_branding',
		'type' => 'url',
	]);

	$wp_customize->add_setting('recompute_instagram_shortcode', [
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
	]);
	$wp_customize->add_control('recompute_instagram_shortcode', [
		'label' => __('Instagram feed shortcode', 'recompute-repair'),
		'description' => __('Example: [instagram-feed feed=1]', 'recompute-repair'),
		'section' => 'recompute_branding',
		'type' => 'text',
	]);
});

/**
 * Render a logo from customizer or site identity.
 */
function recompute_render_logo(string $location = 'header'): void
{
	$candidates = [];
	$location_key = $location === 'footer' ? 'recompute_logo_footer' : 'recompute_logo_header';
	$location_logo = (string) get_theme_mod($location_key);
	if ($location_logo !== '') {
		$candidates[] = $location_logo;
	}

	$header_logo = (string) get_theme_mod('recompute_logo_header');
	if ($header_logo !== '') {
		$candidates[] = $header_logo;
	}

	foreach ($candidates as $logo_url) {
		if ($logo_url !== '') {
			$resolved_logo_url = $logo_url;
			if (is_numeric($logo_url)) {
				$attachment_url = wp_get_attachment_url((int) $logo_url);
				if (is_string($attachment_url) && $attachment_url !== '') {
					$resolved_logo_url = $attachment_url;
				}
			}
			echo '<img class="brand-logo brand-logo-' . esc_attr($location) . '" src="' . esc_url($resolved_logo_url) . '" alt="' . esc_attr(get_bloginfo('name')) . '">';
			return;
		}
	}

	if (has_custom_logo()) {
		$logo_id = get_theme_mod('custom_logo');
		$logo = wp_get_attachment_image_src($logo_id, 'full');
		if (!empty($logo[0])) {
			echo '<img class="brand-logo brand-logo-' . esc_attr($location) . '" src="' . esc_url($logo[0]) . '" alt="' . esc_attr(get_bloginfo('name')) . '">';
			return;
		}
	}

	echo '<span class="brand-mark">R</span><span>Recompute IT Nordic</span>';
}

function recompute_tradera_logo_url(): string
{
	$logo = (string) get_theme_mod('recompute_logo_tradera');
	if ($logo !== '') {
		if (is_numeric($logo)) {
			$attachment_url = wp_get_attachment_url((int) $logo);
			if (is_string($attachment_url) && $attachment_url !== '') {
				return $attachment_url;
			}
		}
		return $logo;
	}

	return home_url('/images/marketing/tradera-symbol-black.png');
}

function recompute_instagram_profile_url(): string
{
	$url = (string) get_theme_mod('recompute_instagram_profile_url', 'https://www.instagram.com/recomputeitnordic/');
	$url = trim($url);
	return $url !== '' ? $url : 'https://www.instagram.com/recomputeitnordic/';
}

function recompute_instagram_shortcode(): string
{
	$shortcode = trim((string) get_theme_mod('recompute_instagram_shortcode', ''));
	if ($shortcode !== '') {
		return $shortcode;
	}

	// Sensible default for Smash Balloon to render latest 6 if connected.
	return '[instagram-feed num=6 cols=3 showheader=false showbutton=false showfollow=false]';
}

add_action('wp_enqueue_scripts', function () {
	$css_path = get_template_directory() . '/assets/theme.css';
	$js_path = get_template_directory() . '/assets/theme.js';
	$css_ver = file_exists($css_path) ? (string) filemtime($css_path) : '1.0.0';
	$js_ver = file_exists($js_path) ? (string) filemtime($js_path) : '1.0.0';

	wp_enqueue_style(
		'recompute-repair-main',
		get_template_directory_uri() . '/assets/theme.css',
		[],
		$css_ver
	);

	wp_enqueue_script(
		'recompute-repair-main',
		get_template_directory_uri() . '/assets/theme.js',
		[],
		$js_ver,
		true
	);

	wp_localize_script('recompute-repair-main', 'recomputeTheme', [
		'traderaUrl' => esc_url(home_url('/data/tradera.json')),
		'traderaFallback' => esc_url(home_url('/tradera')),
		'labelBid' => recompute_copy('tradera_bid'),
		'labelEnds' => recompute_copy('tradera_ends'),
		'labelNoListings' => recompute_copy('tradera_no_listings'),
		'labelLoadError' => recompute_copy('tradera_load_error'),
		'labelSeeListing' => recompute_copy('tradera_see_listing'),
		'labelLoadMore' => recompute_copy('tradera_load_more'),
		'labelAllLoaded' => recompute_copy('tradera_all_loaded'),
		'locale' => recompute_current_lang(),
	]);
});

/**
 * Tradera JSON sync.
 *
 * Supports two modes:
 * 1) External JSON source URL
 * 2) Direct Tradera API calls (GetUserByAlias + GetSellerItems)
 *
 * Configure in wp-config.php:
 * define('RECOMPUTE_CRON_TOKEN', 'long-random-token');
 *
 * // Mode 1 (optional)
 * define('RECOMPUTE_TRADERA_SOURCE_URL', 'https://your-source.example/tradera.json');
 *
 * // Mode 2 (optional, used if source URL is not set)
 * define('RECOMPUTE_TRADERA_APP_ID', '1234');
 * define('RECOMPUTE_TRADERA_APP_KEY', 'your-app-key');
 * define('RECOMPUTE_TRADERA_ALIAS', 'recomputeitnordic');
 * define('RECOMPUTE_TRADERA_SANDBOX', false);
 * define('RECOMPUTE_TRADERA_SYNC_MINUTES', 30);
 */
function recompute_tradera_target_file(): string
{
	return trailingslashit(ABSPATH) . 'data/tradera.json';
}

function recompute_tradera_min_interval_seconds(): int
{
	if (defined('RECOMPUTE_TRADERA_MIN_INTERVAL_SECONDS')) {
		$seconds = (int) RECOMPUTE_TRADERA_MIN_INTERVAL_SECONDS;
		return max(300, min(21600, $seconds));
	}

	$minutes = defined('RECOMPUTE_TRADERA_SYNC_MINUTES') ? (int) RECOMPUTE_TRADERA_SYNC_MINUTES : 30;
	$minutes = max(5, min(180, $minutes));
	return $minutes * MINUTE_IN_SECONDS;
}

function recompute_normalize_tradera_items(array $items): array
{
	$normalized = [];
	$seen_ids = [];
	foreach ($items as $item) {
		if (!is_array($item)) {
			continue;
		}

		$title = trim((string) ($item['title'] ?? ''));
		if ($title === '') {
			continue;
		}

		$end_date = (string) ($item['endDate'] ?? $item['end_date'] ?? $item['endsAt'] ?? '');
		$item_link = (string) ($item['itemLink'] ?? $item['url'] ?? $item['link'] ?? '');

		$id = (string) ($item['id'] ?? '');
		if ($id !== '') {
			if (isset($seen_ids[$id])) {
				continue;
			}
			$seen_ids[$id] = true;
		}

		$normalized[] = [
			'id' => $id,
			'title' => $title,
			'itemLink' => $item_link,
			'thumbnail' => (string) ($item['thumbnail'] ?? $item['thumb'] ?? ''),
			'image' => (string) ($item['image'] ?? ''),
			'endDate' => $end_date,
			'buyNow' => (string) ($item['buyNow'] ?? ''),
			'nextBid' => (string) ($item['nextBid'] ?? ''),
			'openingBid' => (string) ($item['openingBid'] ?? ''),
		];
	}

	usort($normalized, static function (array $a, array $b): int {
		$at = strtotime((string) ($a['endDate'] ?? '')) ?: 0;
		$bt = strtotime((string) ($b['endDate'] ?? '')) ?: 0;
		return $at <=> $bt;
	});

	$now = time();
	$active = array_values(array_filter($normalized, static function (array $item) use ($now): bool {
		$end_ts = strtotime((string) ($item['endDate'] ?? '')) ?: 0;
		return $end_ts > $now;
	}));

	return $active;
}

function recompute_tradera_write_document(array $document): array
{
	$target = recompute_tradera_target_file();
	$dir = dirname($target);
	if (!is_dir($dir)) {
		wp_mkdir_p($dir);
	}

	$json = wp_json_encode($document, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
	if (!is_string($json) || $json === '') {
		return ['ok' => false, 'message' => 'Failed to encode JSON'];
	}

	$tmp = $target . '.tmp';
	$written = @file_put_contents($tmp, $json . PHP_EOL, LOCK_EX);
	if ($written === false) {
		return ['ok' => false, 'message' => 'Unable to write temp file'];
	}

	if (!@rename($tmp, $target)) {
		@unlink($tmp);
		return ['ok' => false, 'message' => 'Unable to replace target file'];
	}

	$count = isset($document['items']) && is_array($document['items']) ? count($document['items']) : 0;
	update_option('recompute_tradera_last_sync', [
		'time' => time(),
		'count' => $count,
	], false);

	return ['ok' => true, 'count' => $count, 'target' => $target];
}

function recompute_tradera_api_endpoint(): string
{
	return 'https://api.tradera.com/v3/publicservice.asmx';
}

function recompute_tradera_xml_escape(string $value): string
{
	return htmlspecialchars($value, ENT_XML1 | ENT_QUOTES, 'UTF-8');
}

function recompute_tradera_soap_call(string $method, string $method_xml): array
{
	$app_id = defined('RECOMPUTE_TRADERA_APP_ID') ? trim((string) RECOMPUTE_TRADERA_APP_ID) : '';
	$app_key = defined('RECOMPUTE_TRADERA_APP_KEY') ? trim((string) RECOMPUTE_TRADERA_APP_KEY) : '';
	$sandbox = defined('RECOMPUTE_TRADERA_SANDBOX') ? (bool) RECOMPUTE_TRADERA_SANDBOX : false;
	if ($app_id === '' || $app_key === '') {
		return ['ok' => false, 'message' => 'Missing RECOMPUTE_TRADERA_APP_ID or RECOMPUTE_TRADERA_APP_KEY'];
	}

	$envelope = '<?xml version="1.0" encoding="utf-8"?>'
		. '<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" '
		. 'xmlns:xsd="http://www.w3.org/2001/XMLSchema" '
		. 'xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">'
		. '<soap:Header>'
		. '<AuthenticationHeader xmlns="http://api.tradera.com">'
		. '<AppId>' . recompute_tradera_xml_escape($app_id) . '</AppId>'
		. '<AppKey>' . recompute_tradera_xml_escape($app_key) . '</AppKey>'
		. '</AuthenticationHeader>'
		. '<ConfigurationHeader xmlns="http://api.tradera.com">'
		// Tradera expects integer values for these fields.
		. '<Sandbox>' . ($sandbox ? '1' : '0') . '</Sandbox>'
		. '<MaxResultAge>0</MaxResultAge>'
		. '</ConfigurationHeader>'
		. '</soap:Header>'
		. '<soap:Body>' . $method_xml . '</soap:Body>'
		. '</soap:Envelope>';

	$response = wp_remote_post(recompute_tradera_api_endpoint(), [
		'timeout' => 25,
		'headers' => [
			'Content-Type' => 'text/xml; charset=utf-8',
			'SOAPAction' => '"http://api.tradera.com/' . $method . '"',
		],
		'body' => $envelope,
	]);

	if (is_wp_error($response)) {
		return ['ok' => false, 'message' => $response->get_error_message()];
	}

	$status = (int) wp_remote_retrieve_response_code($response);
	$body = (string) wp_remote_retrieve_body($response);
	if ($body === '') {
		return ['ok' => false, 'message' => 'HTTP ' . $status . ' (empty response body)'];
	}

	// Tradera SOAP can return faults with HTTP 500 but a useful XML body.
	if ($status < 200 || $status >= 300) {
		return ['ok' => false, 'message' => 'HTTP ' . $status, 'body' => $body, 'status' => $status];
	}

	return ['ok' => true, 'body' => $body];
}

function recompute_tradera_xpath_text(DOMXPath $xpath, DOMNode $context, string $local_name): string
{
	$nodes = $xpath->query('./*[local-name()="' . $local_name . '"]', $context);
	if (!$nodes instanceof DOMNodeList || $nodes->length === 0) {
		return '';
	}
	$value = trim((string) $nodes->item(0)->textContent);
	return $value;
}

function recompute_tradera_fetch_items_from_api(): array
{
	$alias = defined('RECOMPUTE_TRADERA_ALIAS') ? trim((string) RECOMPUTE_TRADERA_ALIAS) : 'recomputeitnordic';
	if ($alias === '') {
		$alias = 'recomputeitnordic';
	}

	$configured_seller_id = defined('RECOMPUTE_TRADERA_SELLER_ID') ? (int) RECOMPUTE_TRADERA_SELLER_ID : 0;
	$legacy_alias_defaults = [
		// Found in previous static build profile URL: /profile/items/4863360/recomputeitnordic
		'recomputeitnordic' => 4863360,
	];
	if ($configured_seller_id <= 0) {
		$alias_key = strtolower($alias);
		if (isset($legacy_alias_defaults[$alias_key])) {
			$configured_seller_id = (int) $legacy_alias_defaults[$alias_key];
		}
	}
	if ($configured_seller_id > 0) {
		$seller_id = $configured_seller_id;
	} else {
		$cached_key = 'recompute_tradera_seller_id_' . md5(strtolower($alias));
		$seller_id = (int) get_option($cached_key, 0);
	}

	if ($seller_id <= 0 && $configured_seller_id <= 0) {
		$user_xml = '<GetUserByAlias xmlns="http://api.tradera.com"><userAlias>'
			. recompute_tradera_xml_escape($alias)
			. '</userAlias></GetUserByAlias>';
		$user_call = recompute_tradera_soap_call('GetUserByAlias', $user_xml);
		if (empty($user_call['ok'])) {
			return $user_call;
		}

		$user_dom = new DOMDocument();
		if (!@$user_dom->loadXML((string) $user_call['body'])) {
			return ['ok' => false, 'message' => 'Invalid XML from GetUserByAlias'];
		}
		$user_xpath = new DOMXPath($user_dom);
		$id_nodes = $user_xpath->query('//*[local-name()="GetUserByAliasResult"]//*[local-name()="Id" or local-name()="UserId" or local-name()="SellerId"]');
		if (!$id_nodes instanceof DOMNodeList || $id_nodes->length === 0) {
			return ['ok' => false, 'message' => 'Could not resolve seller id from alias'];
		}

		$resolved_id = 0;
		foreach ($id_nodes as $id_node) {
			$candidate = (int) trim((string) $id_node->textContent);
			if ($candidate > 0) {
				$resolved_id = $candidate;
				break;
			}
		}
		$seller_id = $resolved_id;
		if ($seller_id <= 0) {
			return ['ok' => false, 'message' => 'Resolved seller id is invalid'];
		}
		update_option($cached_key, $seller_id, false);
	}

	// PublicService v3 expects filterActive/filterItemType fields.
	$items_xml = '<GetSellerItems xmlns="http://api.tradera.com">'
		. '<userId>' . $seller_id . '</userId>'
		. '<categoryId>0</categoryId>'
		. '<filterActive>Active</filterActive>'
		. '<minEndDate>0001-01-01T00:00:00</minEndDate>'
		. '<maxEndDate>9999-12-31T00:00:00</maxEndDate>'
		. '<filterItemType>All</filterItemType>'
		. '</GetSellerItems>';
	$items_call = recompute_tradera_soap_call('GetSellerItems', $items_xml);
	if (empty($items_call['ok'])) {
		$raw_body = (string) ($items_call['body'] ?? '');
		if ($raw_body !== '') {
			$fault_dom = new DOMDocument();
			if (@$fault_dom->loadXML($raw_body)) {
				$fault_xpath = new DOMXPath($fault_dom);
				$fault_nodes = $fault_xpath->query('//*[local-name()="Fault"]//*[local-name()="faultstring"]');
				if ($fault_nodes instanceof DOMNodeList && $fault_nodes->length > 0) {
					$fault = trim((string) $fault_nodes->item(0)->textContent);
					return ['ok' => false, 'message' => $fault !== '' ? $fault : ((string) ($items_call['message'] ?? 'SOAP Fault'))];
				}
			}
		}
		return ['ok' => false, 'message' => (string) ($items_call['message'] ?? 'GetSellerItems failed')];
	}

	$dom = new DOMDocument();
	if (!@$dom->loadXML((string) $items_call['body'])) {
		return ['ok' => false, 'message' => 'Invalid XML from GetSellerItems'];
	}
	$xpath = new DOMXPath($dom);

	$fault_nodes = $xpath->query('//*[local-name()="Fault"]//*[local-name()="faultstring"]');
	if ($fault_nodes instanceof DOMNodeList && $fault_nodes->length > 0) {
		$fault = trim((string) $fault_nodes->item(0)->textContent);
		return ['ok' => false, 'message' => $fault !== '' ? $fault : 'SOAP Fault'];
	}

	$item_paths = [
		'//*[local-name()="GetSellerItemsResult"]//*[local-name()="Item"]',
		'//*[local-name()="GetSellerItemsResult"]//*[local-name()="SellerItem"]',
		'//*[local-name()="GetSellerItemsResult"]//*[local-name()="Auction"]',
		'//*[local-name()="GetSellerItemsResult"]//*[local-name()="Listing"]',
	];
	$items = [];
	$raw_item_node_count = 0;
	foreach ($item_paths as $path) {
		$item_nodes = $xpath->query($path);
		if (!$item_nodes instanceof DOMNodeList || $item_nodes->length === 0) {
			continue;
		}
		$raw_item_node_count += (int) $item_nodes->length;
		foreach ($item_nodes as $node) {
			$title = recompute_tradera_xpath_text($xpath, $node, 'ShortDescription');
			if ($title === '') {
				$title = recompute_tradera_xpath_text($xpath, $node, 'Title');
			}
			$image = recompute_tradera_xpath_text($xpath, $node, 'ImageLink');
			if ($image === '') {
				$image_nodes = $xpath->query('./*[local-name()="ImageLinks"]/*[1]', $node);
				if ($image_nodes instanceof DOMNodeList && $image_nodes->length > 0) {
					$image = trim((string) $image_nodes->item(0)->textContent);
				}
			}

			$items[] = [
				'id' => recompute_tradera_xpath_text($xpath, $node, 'Id'),
				'title' => $title,
				'itemLink' => recompute_tradera_xpath_text($xpath, $node, 'ItemLink'),
				'thumbnail' => recompute_tradera_xpath_text($xpath, $node, 'ThumbnailLink'),
				'image' => $image,
				'endDate' => recompute_tradera_xpath_text($xpath, $node, 'EndDate'),
				'buyNow' => recompute_tradera_xpath_text($xpath, $node, 'BuyItNowPrice'),
				'nextBid' => recompute_tradera_xpath_text($xpath, $node, 'NextBid'),
				'openingBid' => recompute_tradera_xpath_text($xpath, $node, 'OpeningBid'),
			];
		}
		// Prefer first matching path shape.
		if (!empty($items)) {
			break;
		}
	}

	return [
		'ok' => true,
		'alias' => $alias,
		'sellerIdUsed' => $seller_id,
		'rawItemNodeCount' => $raw_item_node_count,
		'items' => $items,
	];
}

function recompute_sync_tradera_json(bool $force = false, bool $debug = false): array
{
	$lock_key = 'recompute_tradera_sync_lock';
	if (!$force && get_transient($lock_key)) {
		return ['ok' => true, 'skipped' => true, 'message' => 'Sync already running'];
	}
	set_transient($lock_key, 1, 120);

	try {
		$last_sync = get_option('recompute_tradera_last_sync', []);
		$last_time = is_array($last_sync) ? (int) ($last_sync['time'] ?? 0) : 0;
		$min_interval = recompute_tradera_min_interval_seconds();
		$elapsed = time() - $last_time;
		if (!$force && $last_time > 0 && $elapsed < $min_interval) {
			return [
				'ok' => true,
				'skipped' => true,
				'message' => 'Synced recently',
				'lastSync' => gmdate('c', $last_time),
				'nextSyncInSeconds' => $min_interval - $elapsed,
			];
		}

	$source_url = defined('RECOMPUTE_TRADERA_SOURCE_URL') ? trim((string) RECOMPUTE_TRADERA_SOURCE_URL) : '';
	$has_api_config = (
		defined('RECOMPUTE_TRADERA_APP_ID') && trim((string) RECOMPUTE_TRADERA_APP_ID) !== '' &&
		defined('RECOMPUTE_TRADERA_APP_KEY') && trim((string) RECOMPUTE_TRADERA_APP_KEY) !== ''
	);

	// Prefer direct Tradera API when credentials exist; external JSON is fallback.
	if ($has_api_config) {
		$api_result = recompute_tradera_fetch_items_from_api();
		if (!empty($api_result['ok'])) {
			$document = [
				'alias' => (string) ($api_result['alias'] ?? 'recomputeitnordic'),
				'fetchedAt' => gmdate('c'),
				'items' => recompute_normalize_tradera_items((array) ($api_result['items'] ?? [])),
			];
			$result = recompute_tradera_write_document($document);
			$result['source'] = 'tradera_api';
			if ($debug) {
				$result['debug'] = [
					'alias' => (string) ($api_result['alias'] ?? ''),
					'sellerIdUsed' => (int) ($api_result['sellerIdUsed'] ?? 0),
					'rawItemNodeCount' => (int) ($api_result['rawItemNodeCount'] ?? 0),
				];
			}
			return $result;
		}
		// If API fails and a source URL is configured, fall back to source URL.
		if ($source_url === '') {
			return $api_result;
		}
	}

	if ($source_url !== '') {
		$response = wp_remote_get($source_url, [
			'timeout' => 25,
			'headers' => [
				'Accept' => 'application/json',
			],
		]);

		if (is_wp_error($response)) {
			return ['ok' => false, 'message' => $response->get_error_message()];
		}

		$status = (int) wp_remote_retrieve_response_code($response);
		if ($status < 200 || $status >= 300) {
			return ['ok' => false, 'message' => 'HTTP ' . $status];
		}

		$payload = json_decode((string) wp_remote_retrieve_body($response), true);
		if (!is_array($payload)) {
			return ['ok' => false, 'message' => 'Invalid JSON payload'];
		}

		$source_items = [];
		if (isset($payload['items']) && is_array($payload['items'])) {
			$source_items = $payload['items'];
		} elseif (array_is_list($payload)) {
			$source_items = $payload;
		}

		$document = [
			'alias' => (string) ($payload['alias'] ?? 'recomputeitnordic'),
			'fetchedAt' => gmdate('c'),
			'items' => recompute_normalize_tradera_items($source_items),
		];

		$result = recompute_tradera_write_document($document);
		$result['source'] = 'external_json';
		return $result;
	}

	return ['ok' => false, 'message' => 'Missing Tradera config (set API credentials or SOURCE_URL)'];
	} finally {
		delete_transient($lock_key);
	}
}

add_filter('cron_schedules', static function (array $schedules): array {
	$minutes = defined('RECOMPUTE_TRADERA_SYNC_MINUTES') ? (int) RECOMPUTE_TRADERA_SYNC_MINUTES : 30;
	$minutes = max(5, min(180, $minutes));
	$schedules['recompute_tradera_custom_interval'] = [
		'interval' => $minutes * MINUTE_IN_SECONDS,
		'display' => sprintf(__('Every %d minutes', 'recompute-repair'), $minutes),
	];
	return $schedules;
});

function recompute_schedule_tradera_sync(): void
{
	$hook = 'recompute_tradera_sync_event';
	$required_schedule = 'recompute_tradera_custom_interval';
	$next = wp_next_scheduled($hook);

	if ($next !== false && function_exists('wp_get_scheduled_event')) {
		$current = wp_get_scheduled_event($hook);
		if ($current && isset($current->schedule) && $current->schedule !== $required_schedule) {
			wp_unschedule_event($next, $hook);
			$next = false;
		}
	}

	if ($next === false) {
		wp_schedule_event(time() + 60, $required_schedule, $hook);
	}
}

add_action('after_switch_theme', 'recompute_schedule_tradera_sync');
add_action('init', 'recompute_schedule_tradera_sync');

add_action('recompute_tradera_sync_event', static function (): void {
	recompute_sync_tradera_json();
});

add_action('rest_api_init', static function (): void {
	register_rest_route('recompute/v1', '/tradera-sync', [
		'methods' => ['GET', 'POST'],
		'permission_callback' => static function (WP_REST_Request $request): bool {
			$token = defined('RECOMPUTE_CRON_TOKEN') ? (string) RECOMPUTE_CRON_TOKEN : '';
			if ($token === '') {
				return false;
			}
			$provided = (string) $request->get_param('key');
			return hash_equals($token, $provided);
		},
		'callback' => static function (WP_REST_Request $request): WP_REST_Response {
			$force = (string) $request->get_param('force') === '1';
			$debug = (string) $request->get_param('debug') === '1';
			$result = recompute_sync_tradera_json($force, $debug);
			if (empty($result['ok'])) {
				return new WP_REST_Response($result, 500);
			}
			return new WP_REST_Response($result, 200);
		},
	]);
});
