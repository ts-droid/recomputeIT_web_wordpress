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

function recompute_apply_sv_textblock_update_once(): void
{
	$flag = 'recompute_sv_copy_update_20260301';
	if (get_option($flag) === 'done') {
		return;
	}

	$defaults = recompute_default_translations();
	$sv_defaults = $defaults['sv'] ?? [];
	if (!is_array($sv_defaults) || empty($sv_defaults)) {
		return;
	}

	$cms = recompute_cms_translations();
	$sv = is_array($cms['sv'] ?? null) ? $cms['sv'] : [];

	$keys_to_update = [
		'hero_eyebrow',
		'hero_title',
		'hero_lead',
		'hero_cta_services',
		'hero_cta_tradera',
		'hero_card_title',
		'hero_card_1',
		'hero_card_2',
		'hero_card_3',
		'services_eyebrow',
		'services_title',
		'service1_title',
		'service1_body',
		'service2_title',
		'service2_body',
		'service3_title',
		'service3_body',
		'service4_title',
		'service4_body',
		'about_eyebrow',
		'about_title',
		'about_body',
		'stat1_label',
		'stat2_label',
		'tradera_eyebrow',
		'tradera_title',
		'tradera_no_listings',
		'tradera_load_error',
		'footer_tagline',
		'footer_email',
		'footer_phone',
		'footer_hours_weekday',
		'footer_hours_weekend',
	];

	foreach ($keys_to_update as $key) {
		if (isset($sv_defaults[$key]) && is_scalar($sv_defaults[$key])) {
			$sv[$key] = (string) $sv_defaults[$key];
		}
	}

	$cms['sv'] = $sv;
	update_option('recompute_cms_translations', $cms, false);
	update_option($flag, 'done', false);
}

add_action('init', 'recompute_apply_sv_textblock_update_once');

function recompute_current_lang(): string
{
	$supported = array_keys(recompute_languages());

	if (isset($_GET['lang'])) {
		$lang = sanitize_key(wp_unslash($_GET['lang']));
		if (in_array($lang, $supported, true)) {
			return $lang;
		}
	}

	$locale = determine_locale();
	if (str_starts_with($locale, 'en')) {
		return 'en';
	}

	return 'sv';
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

function recompute_openai_translate_batch(array $texts, string $target_lang_name): array
{
	$api_key = recompute_openai_api_key();
	if ($api_key === '') {
		return [];
	}

	$payload = [
		'model' => recompute_openai_model(),
		'temperature' => 0.2,
		'messages' => [
			[
				'role' => 'system',
				'content' => 'You are a translation engine. Translate Swedish text to the requested target language. Return only valid minified JSON with this schema: {"translations":["..."]}. Keep order and length identical to input.',
			],
			[
				'role' => 'user',
				'content' => wp_json_encode([
					'source_language' => 'Swedish',
					'target_language' => $target_lang_name,
					'texts' => array_values($texts),
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

	$parsed = json_decode($content, true);
	if (!is_array($parsed) || !isset($parsed['translations']) || !is_array($parsed['translations'])) {
		return [];
	}

	$out = [];
	foreach ($parsed['translations'] as $entry) {
		if (is_scalar($entry)) {
			$out[] = (string) $entry;
		}
	}

	return $out;
}

add_action('recompute_auto_translate_event', function () {
	$api_key = recompute_openai_api_key();
	if ($api_key === '') {
		return;
	}

	$defaults = recompute_default_translations();
	$cms = recompute_cms_translations();
	$sv_defaults = $defaults['sv'] ?? [];
	$sv_cms = is_array($cms['sv'] ?? null) ? $cms['sv'] : [];
	$source = array_merge($sv_defaults, $sv_cms);
	$targets = recompute_translation_targets();

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
	}

	update_option('recompute_cms_translations', $cms, false);
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

			if ($selected_lang === 'sv') {
				recompute_schedule_auto_translation();
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

add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style(
		'recompute-repair-main',
		get_template_directory_uri() . '/assets/theme.css',
		[],
		'1.0.0'
	);

	wp_enqueue_script(
		'recompute-repair-main',
		get_template_directory_uri() . '/assets/theme.js',
		[],
		'1.0.0',
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
