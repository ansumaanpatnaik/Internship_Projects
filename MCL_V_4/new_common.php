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
    <!-- Your custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Custom Footer CSS -->
    <link rel="stylesheet" href="footer.css">
</head>
<body>
<!-- Original header content remains unchanged until footer -->

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
                            <li><a href="#">Website Policies</a></li>
                            <li><a href="#">Related Links</a></li>
                            <li><a href="#">Feedback</a></li>
                            <li><a href="#">Help</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 mb-4">
                        <h3 class="footer-heading">ABOUT US</h3>
                        <ul class="footer-links">
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Copyright Policy</a></li>
                            <li><a href="#">Accessibility</a></li>
                            <li><a href="#">Sitemap</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 mb-4">
                        <h3 class="footer-heading">FOLLOW US ON</h3>
                        <ul class="footer-links">
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">RTI</a></li>
                            <li><a href="#">Grievance</a></li>
                            <li><a href="#">E-Office</a></li>
                            <li><a href="#">SPARROW</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
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
                            <img src="images/indiaportal.png" alt="India Portal" style="height: 40px;">
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

<!-- Bootstrap JS Bundle (with Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Your custom JS -->
<script src="script.js"></script>
</body>
</html>
