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
    <!-- Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
    <!-- My custom CSS -->
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
<footer class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3 class="footer-heading">USEFUL LINKS</h3>
                <ul class="footer-links">
                    <li><a href="/archives">Archives</a></li>
                    <li><a href="/policies">Website Policies</a></li>
                    <li><a href="/help">Help</a></li>
                    <li><a href="./directory.php">Contact Us</a></li>
                    <li><a href="/sitemap">Sitemap</a></li>
                    <li><a href="/related-links">Related Links</a></li>
                </ul>
            </div>
            <div class="col-md-4 text-center">
                <h3 class="footer-heading">SUBSCRIBE FOR UPDATES</h3>
                <div class="social-links">
                    <a href="https://twitter.com/MCL_INDIA_LTD" target="_blank" class="social-icon" title="X (Twitter)">
                        <i class="fab fa-x-twitter"></i>
                    </a>
                    <a href="https://www.youtube.com/channel/" target="_blank" class="social-icon" title="YouTube">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="https://www.facebook.com/MahandiCoalfield/" target="_blank" class="social-icon" title="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank" class="social-icon" title="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-4 text-end">
                <div class="portal-links">
                    <a href="https://www.mygov.in/" target="_blank" class="portal-link">
                        <img src="images/mygov.png" alt="MyGov Portal" class="img-fluid">
                    </a>
                    <a href="https://www.india.gov.in/" target="_blank" class="portal-link">
                        <img src="images/indiaportal.png" alt="India Portal" class="img-fluid">
                    </a>
                </div>
            </div>
           
        <div class="footer-divider"></div>
        <div class="footer-bottom">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <p class="mb-0">This Website belongs to Mahanadi Coalfields Limited, Government of India</p>
                </div>
                <div class="col-md-4 text-end">
                    <p class="mb-0 last-updated">Last Updated: <?php echo date('d.m.Y'); ?></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Accessibility Panel -->
<div class="accessibility-panel" id="accessibilityPanel">
    <div class="accessibility-header">
        <h3>Accessibility Options</h3>
        <button id="closeAccessibilityPanel" class="close-panel" aria-label="Close accessibility panel">
            <i class="fas fa-times"></i>
        </button>
    </div>
    <div class="accessibility-controls">
        <table>
            <tr>
                <td><button id="darkContrastBtn" title="Toggle dark contrast">Dark Contrast</button></td>
                <td><button id="invertBtn" title="Invert colors">Invert Colors</button></td>
            </tr>
            <tr>
                <td><button id="saturationBtn" title="Increase saturation">High Saturation</button></td>
                <td><button id="highlightLinksBtn" title="Highlight links">Highlight Links</button></td>
            </tr>
            <tr>
                <td><button id="increaseTextBtn" title="Increase text size">Increase Text</button></td>
                <td><button id="decreaseTextBtn" title="Decrease text size">Decrease Text</button></td>
            </tr>
            <tr>
                <td><button id="hideImagesBtn" title="Hide images">Hide Images</button></td>
                <td><button id="defaultCursorBtn" title="Use default cursor">Default Cursor</button></td>
            </tr>
        </table>
        <button id="resetAccessibility" class="reset-button">Reset All</button>
    </div>
</div>

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
</div>    <!-- Custom Footer CSS -->
    <link rel="stylesheet" href="footer.css">
    <!-- Bootstrap JS Bundle (with Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Your custom JS -->
    <script src="script.js"></script>
</body>
</html>