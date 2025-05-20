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
            <span class="hindi-text" >भारत सरकार</span>
            <span class="eng-text" >Government of India</span>
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
            <li><a href="./index.php" data-i18n="home">Home</a></li>
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
            <li class="dropdown">
                <a href="#" data-i18n="services">Services <i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="#" data-i18n="marketing_and_sales">Marketing & Sales</a></li>
                    <li><a href="#" data-i18n="to_get_coal_from_mcl">To Get Coal from MCL</a></li>
                    <li><a href="#" data-i18n="quality_of_coal">Quality of Coal</a></li>
                    <li><a href="#" data-i18n="iso/ohsas_certification">ISO/OHSAS Certification</a></li>
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
                <a href="#" data-i18n="documents">Documents<i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="#" data-i18n="financial_and_secretarial_matter">Financial & Secretarial Matter</a></li>
                    <li><a href="#" data-i18n="environment_and_forest">Environment & Forest</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" data-i18n="employee_corner">Employee Corner<i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="#" data-i18n="systems_helpdesk">Systems Helpdesk</a></li>
                    <li><a href="#" data-i18n="mcl_intranet">MCL Intranet</a></li>
                    <li><a href="#" data-i18n="innovation_cell">Innovation Cell</a></li>
                    <li><a href="#" data-i18n="csr_portal">CSR Portal</a></li>
                    <li><a href="#" data-i18n="soochna_kosh">Soochna Kosh Portal</a></li>
                    <li><a href="#" data-i18n="arpan_portal">Arpan Portal</a></li>
                    <li><a href="#" data-i18n="mcl_vts">MCL VTS</a></li>
                    <li><a href="#" data-i18n="tender_below_2lakhs">Tender Below 2 lakhs Portal</a></li>
                    <li><a href="#" data-i18n="bill_tracking">Bill Tracking System</a></li>
                    <li><a href="#" data-i18n="mcl_call_centre">MCL Call Centre</a></li>
                    <li><a href="./infobank.php" data-i18n="info_bank">Info Bank</a></li>
                </ul>
            </li>
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
        <div class="row mb-4">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <h3 class="footer-heading">USEFUL LINKS</h3>
                        <ul class="footer-links">
                            <li><a href="#">Archives</a></li>
                            
                            <li><a href="#">Sitemap</a></li>
                            
                        </ul>
                    </div>
                    <div class="col-md-4 mb-4">
                        <h3 class="footer-heading">    </h3>
                        <ul class="footer-links">
                            <li><a href="#">Website Policies</a></li>
                            
                            <li><a href="#">Help</a></li>
                    
                            
                        </ul>
                    </div>
                    <div class="col-md-4 mb-4">
                        <h3 class="footer-heading">    </h3>
                        <ul class="footer-links">
                            <li><a href="#">Related Links</a></li>
                            <li><a href="./directory.php">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h3 class="footer-heading">Subscribe for Updates</h3>
                <div class="social-box mb-4">
                    <div class="social-links">
                        <a href="#" class="social-icon me-3" title="X (Twitter)">
                            <img src="images/twitter.png" alt="X (Twitter)" width="32" height="32">
                        </a>
                        <a href="#" class="social-icon me-3" title="YouTube">
                            <img src="images/youtube.png" alt="YouTube" width="32" height="32">
                        </a>
                        <a href="#" class="social-icon me-3" title="Facebook">
                            <img src="images/facebook.png" alt="Facebook" width="32" height="32">
                        </a>
                        <a href="#" class="social-icon" title="Instagram">
                            <img src="images/instagram.png" alt="Instagram" width="32" height="32">
                        </a>
                    </div>
                </div>
                <div class="portals-box">
                    <div class="d-flex justify-content-between mb-3">
                        <a href="https://www.mygov.in/" target="_blank" class="portal-link">
                            <img src="images/mygov.png" alt="MyGov Portal" style="height: 40px;">
                        </a>
                        <a href="https://www.india.gov.in/" target="_blank" class="portal-link">
                            <img src="images/indiaportal.svg" alt="India Portal" style="height: 40px;">
                        </a>
                    </div>
                    <p class="text-end mb-0 last-updated">Last Updated On: <?php echo date('d.m.Y'); ?></p>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p class="text-center mb-0">This Website belongs to Ministry of Electronics and Information Technology, Government of India</p>
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
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap JS Bundle (with Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Your custom JS -->
    <script src="script.js"></script>
</body>
</html>