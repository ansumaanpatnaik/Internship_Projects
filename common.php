<?php
// Common layout for reuse
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title data-i18n="site_title">Mahanadi Coalfields Limited</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome (for icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- Your custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- Top Bar -->
<div class="top-bar">
    <div class="container">
        <div class="govt-info">
            <img src="images/indflag.svg" alt="Indian Flag" class="ind-flag">
            <span class="hindi-text" data-i18n="bharat_sarkar">भारत सरकार</span>
            <span class="eng-text" data-i18n="govt_of_india">Government of India</span>
        </div>
        <div class="accessibility-options">
            <a href="#main-content" class="access-btn" title="Skip to main content">
                <img src="images/stmc.svg" alt="Skip to main content" class="stmc-icon">
            </a>
            <div class="translate-dropdown">
                <button class="access-btn" title="Translate Page" id="translateBtn">
                    <img src="images/lang.svg" alt="Translate Page" class="lang-icon">
                </button>
                <div class="language-dropdown" id="languageDropdown">
                    <select onchange="changeLanguage(this.value)">
                        <option value="en" data-i18n="english_option">English</option>
                        <option value="hi" data-i18n="hindi_option">हिंदी</option>
                    </select>
                </div>
            </div>
            <button class="access-btn" title="Accessibility Options" onclick="toggleAccessibility()">
                <img src="images/access.svg" alt="Accessibility Options" class="access-icon">
            </button>
        </div>
    </div>
</div>

<!-- Main Header -->
<div class="main-header">
    <div class="container">
        <div class="header-content">
            <div class="logo">
                <a href="./index.php"><img src="images/mcl_logo.jpeg" alt="MCL Logo"></a>
                <div class="logo-text">
                    <h1 data-i18n="site_title">Mahanadi Coalfields Limited</h1>
                    <span data-i18n="goi_enterprise">A Government of India Enterprise</span>
                </div>
            </div>
            <div class="digital-india">
                <img src="images/digitalingia.svg" alt="Digital India">
            </div>
        </div>
    </div>
</div>

<!-- Navbar -->
<nav>
    <div class="container nav-container">
        <button class="hamburger-menu" id="hamburgerMenu" aria-label="Toggle navigation menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <ul class="main-menu">
            <li><a href="#" data-i18n="home">Home</a></li>
            <li class="dropdown">
                <a href="#" data-i18n="about_us">About Us <i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="#" data-i18n="about_mcl">About MCL</a></li>
                    <li><a href="#" data-i18n="formation">Formation</a></li>
                    <li><a href="#" data-i18n="admin_setup">Administrative Setup</a></li>
                    <li><a href="#" data-i18n="board_of_directors">Board of Directors</a></li>
                    <li><a href="#" data-i18n="bioprofile_projects">Bioprofile of Projects</a></li>
                    <li><a href="#" data-i18n="corp_mgmt_policy">Corporate Mgmt. Policy</a></li>
                    <li><a href="#" data-i18n="manpower">Manpower</a></li>
                    <li><a href="#" data-i18n="coal_production">Coal Production</a></li>
                    <li><a href="#" data-i18n="productivity">Productivity</a></li>
                    <li><a href="#" data-i18n="offtake">Offtake</a></li>
                    <li><a href="#" data-i18n="safety">Safety</a></li>
                    <li><a href="#" data-i18n="payment_exchequer">Payment to Exchequer</a></li>
                    <li><a href="#" data-i18n="hq_departments">HQ Departments</a></li>
                    <li><a href="#" data-i18n="production_areas">Production Areas</a></li>
                </ul>
            </li>
            <li><a href="#" data-i18n="rti_act">RTI Act</a></li>
            <li class="dropdown">
                <a href="#" data-i18n="grievances">Grievances <i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="#" data-i18n="pg_portal">PG Portal</a></li>
                    <li><a href="#" data-i18n="samvaad_portal">Samvaad Portal</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" data-i18n="news_media">News & Media <i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="#" data-i18n="notices">Notices</a></li>
                    <li><a href="#" data-i18n="public_relations">Public Relations</a></li>
                </ul>
            </li>
            <li><a href="./infobank.php" data-i18n="info_bank">Info Bank</a></li>
            <li><a href="#" data-i18n="careers">Careers</a></li>
        </ul>
    </div>
</nav>

<?php
// This will include the page-specific content
if (isset($page_content)) {
    include $page_content;
}
?>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <h3 data-i18n="quick_links">Quick Links</h3>
                <ul>
                    <li><a href="#" data-i18n="rti">RTI</a></li>
                    <li><a href="#" data-i18n="tenders">Tenders</a></li>
                    <li><a href="#" data-i18n="careers">Careers</a></li>
                    <li><a href="#" data-i18n="sitemap">Sitemap</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3 data-i18n="important_links">Important Links</h3>
                <ul>
                    <li><a href="#" data-i18n="ministry_of_coal">Ministry of Coal</a></li>
                    <li><a href="#" data-i18n="coal_india_ltd">Coal India Limited</a></li>
                    <li><a href="#" data-i18n="make_in_india">Make in India</a></li>
                    <li><a href="#" data-i18n="mygov">MyGov</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3 data-i18n="contact_us">Contact Us</h3>
                <ul>
                    <li data-i18n="company_name">Mahanadi Coalfields Limited</li>
                    <li data-i18n="mcl_bhawan">MCL Bhawan</li>
                    <li data-i18n="burla_sambalpur">Burla, Sambalpur</li>
                    <li data-i18n="odisha_pin">Odisha - 768020</li>
                </ul>
            </div>
            <div class="footer-section">
                <h3 data-i18n="follow_us">Follow Us</h3>
                <div class="social-links">
                    <a href="#" title="Facebook"><i class="fab fa-facebook"></i></a>
                    <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" title="YouTube"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p data-i18n="copyright">&copy; 2024 Mahanadi Coalfields Limited. All rights reserved.</p>
            <p data-i18n="site_credits">This site is designed, developed and maintained by MCL</p>
        </div>
    </div>
    <div id="cookie-popup" style="display: none;">
        <div class="cookie-container">
            <p data-i18n="cookie_message">
            We use cookies to ensure that we give you the best experience on our website. 
            If you continue to use this site we will assume that you are happy with it.
            </p>
            <button id="accept-cookies" data-i18n="accept">Accept</button>
        </div>
    </div>
</footer>

<!-- Cookie Consent Bar -->
<div class="CookieConsent" id="cookieConsentBar">
    <div style="flex: 1 0 300px; margin: 15px;">
        <div class="customize-cookies-container d-block">
            <a class="customize-cookies-link pointer text-decoration-none text-uppercase" href="/cookies" data-i18n="customize_cookies">Customize cookies</a>
            <p class="mt-5 fw-bold" data-i18n="cookie_usage">This website uses cookies to provide a better user experience.</p>
            <p data-i18n="cookie_policy">By clicking accept, you agree to the policies outlined in the <a href="/cookies" data-i18n="cookie_settings">Cookie Settings</a>.</p>
        </div>
    </div>
    <div>
        <button id="rcc-decline-button" aria-label="Decline optional cookies" data-i18n="decline_cookies">Decline optional cookies</button>
        <button class="custom-button-wrapper" id="rcc-confirm-button" aria-label="Accept all cookies" data-i18n="accept_all_cookies">Accept all cookies</button>
    </div>
</div>

<!-- Bootstrap JS Bundle (with Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Your custom JS -->
<script src="script.js"></script>
</body>
</html>