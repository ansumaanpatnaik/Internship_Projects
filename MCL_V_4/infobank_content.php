<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Info Bank - Mahanadi Coalfields Limited</title>
        <!-- DBIM Toolkit CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    </head>
    <body>

        <span id="main-content"></span>

        <section class="position-relative">
            
            <div class="Innerbaner">
                <img src="images/infobankbanner.jpg" class="img-fluid w-100" role="img" alt="Info Bank Banner">
                <div class="container">
                    <div class="innerbox">
                        <h1 class="pagename" id="maincontent" data-i18n="acts_heading">ACTs</h1>
                    </div>
                </div>
            </div>
            <div class="navigationSection">
                <div class="innernav position-relative d-flex justify-content-between">
                    <ul class="nav">
                        <li class="nav-item"><a class="nav-link" title="ACTs" href="#" data-i18n="acts_tab">ACTs</a></li>
                        <li class="nav-item"><a class="nav-link" title="Manuals" href="#" data-i18n="manuals_tab">Manuals</a></li>
                        <li class="nav-item"><a class="nav-link" title="Rules" href="#" data-i18n="rules_tab">Rules</a></li>
                        <li class="nav-item"><a class="nav-link" title="Circulars" href="#" data-i18n="circulars_tab">Circulars</a></li>
                        <li class="nav-item"><a class="nav-link" title="Standing Orders" href="#" data-i18n="standing_orders_tab">Standing Orders</a></li>
                        <li class="nav-item"><a class="nav-link" title="MOU" href="#" data-i18n="mou_tab">MOU</a></li>
                        <li class="nav-item"><a class="nav-link" title="Policies" href="#" data-i18n="policies_tab">Policies</a></li>
                        <li class="nav-item"><a class="nav-link" title="DOP" href="#" data-i18n="dop_tab">DOP</a></li>
                        <li class="nav-item"><a class="nav-link" title="Staff Seniority List" href="#" data-i18n="staff_seniority_tab">Staff Seniority List</a></li>
                        <li class="nav-item"><a class="nav-link" title="PoSH Act, 2013" href="#" data-i18n="posh_tab">PoSH Act, 2013</a></li>
                        <li class="nav-item"><a class="nav-link" title="WIPS MCL" href="#" data-i18n="wips_tab">WIPS MCL</a></li>
                        <li class="nav-item"><a class="nav-link" title="Guidelines" href="#" data-i18n="guidelines_tab">Guidelines</a></li>
                        <li class="nav-item"><a class="nav-link" title="Vigilance Related" href="#" data-i18n="vigilance_tab">Vigilance Related</a></li>
                    </ul>
                    <button class="scroll-btn pointer" aria-label="Scroll right">
                        <span class="material-symbols-outlined bhashini-skip-translation">keyboard_arrow_right</span>
                    </button>
                </div>
            </div>
        </section>

        <section class="maincontent" role="main">
            <div class="container mt-5">
                <form class="form-group row align-items-start row-gap-2 filterbox filterBoxResponsive">
                    <div class="col-md-12 col-lg-4">
                        <div class="input-group searchField">
                            <span class="input-group-text">
                                <span class="material-symbols-outlined bhashini-skip-translation">search</span>
                            </span>
                            <input type="search" role="searchbox" name="scheme" aria-label="search" class="form-control" placeholder="Search..." value="" data-i18n-placeholder="search_placeholder">
                            <span class="input-group-text filterIconResponsive d-block d-md-none">
                                <span class="material-symbols-outlined bhashini-skip-translation">filter_alt</span>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-8 d-none d-md-block filterIconResponsivebox">
                        <div class="d-flex align-items-center justify-content-end flex-wrap gap-2">
                            <div class="input-group sortField">
                                <span class="input-group-text">
                                    <span class="material-symbols-outlined bhashini-skip-translation">sort</span>
                                </span>
                                <select class="form-select" role="listbox" aria-label="select" data-i18n-select="sort_by">
                                    <option value="" data-i18n="sort_by">Sort by</option>
                                    <option value="DESCY" data-i18n="latest">Latest</option>
                                    <option value="ASCY" data-i18n="oldest">Oldest</option>
                                </select>
                            </div>
                            <div class="input-group sortField">
                                <span class="input-group-text">
                                    <span class="material-symbols-outlined bhashini-skip-translation">sort</span>
                                </span>
                                <select class="form-select" role="listbox" aria-label="select" data-i18n-select="category">
                                    <option value="" data-i18n="category">Category</option>
                                    <option value="General" data-i18n="general">General</option>
                                </select>
                            </div>
                            <div class="input-group perPageField">
                                <span class="input-group-text">
                                    <span class="material-symbols-outlined bhashini-skip-translation" anuvadak-no-localization="true">list_alt</span>
                                </span>
                                <select class="form-select" role="listbox" aria-label="select" data-i18n-select="per_page">
                                    <option value="10" data-i18n="per_page_10">10 per page</option>
                                    <option value="15" data-i18n="per_page_15">15 per page</option>
                                    <option value="20" data-i18n="per_page_20">20 per page</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
                <div role="table" aria-label="Acts and Policies data">
                    <div class="row row-gap-2 align-items-center tableheader ms-0 me-0">
                        <div role="rowgroup">
                            <div class="row align-items-center" role="row">
                                <div class="col-sm-12 col-md-12 col-lg-7" role="columnheader">
                                    <small class="text-uppercase" data-i18n="title_col">Title</small>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-2" role="columnheader">
                                    <small class="text-uppercase" data-i18n="published_date_col">Published Date</small>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-2" role="columnheader">
                                    <small class="text-uppercase" data-i18n="type_size_col">Type/Size</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="rowgroup">
                        <div role="row" class="announcementbox row row-gap-2 align-items-center ms-0 me-0">
                            <div class="col-sm-12 col-md-12 col-lg-7" role="cell">
                                <div class="d-flex align-items-center gap-2">
                                    <small class="col-4 d-lg-none d-block text-uppercase table-column" data-i18n="title_col">Title: </small>
                                    <span class="material-symbols-outlined bhashini-skip-translation">draft</span>
                                    <p class="mb-0" data-i18n="sample_notice">Notice for Extension of Public Consultation on Draft DPDP Rules 2025</p>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-2" role="cell">
                                <div class="d-flex align-items-center gap-2">
                                    <small class="col-4 d-lg-none d-block text-uppercase table-column" data-i18n="published_date_col">Published Year: </small>
                                    <small class="ptype mb-0" aria-label="14.02.2025" data-i18n="sample_date">14.02.2025</small>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-3" role="cell">
                                <div class="d-flex align-items-center gap-2">
                                    <small class="col-4 d-lg-none d-block text-uppercase table-column" data-i18n="type_size_col">Type/Size: </small>
                                    <div class="d-flex flex-wrap gap-2 align-items-center justify-content-between w-100">
                                        <div class="d-flex gap-4 align-items-center type-size">
                                            <!-- PDF icon SVG -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 68 68" fill="none" title="PDF icon"><path fill-rule="evenodd" clip-rule="evenodd" d="M15.13 47.8714C12.7254 46.6379 9.88617 46.145 7.0975 46.4771H0V67.9281H5.6525V59.741H8.075C10.5846 59.9579 13.1063 59.4402 15.215 58.2752C17.0049 56.9837 17.9917 55.0731 17.8925 53.0912C18.025 51.0785 16.9966 49.1354 15.13 47.8714ZM10.5825 55.701C9.51486 56.0964 8.34103 56.2445 7.1825 56.1301H5.525V50.0523H7.1825C8.38607 49.9447 9.6003 50.144 10.6675 50.6243C11.6614 51.2066 12.2246 52.1813 12.155 53.1984C12.2838 54.2239 11.6623 55.213 10.5825 55.701ZM30.0475 46.4771H22.9925V67.9281H29.75C33.1938 68.2116 36.6618 67.653 39.7375 66.3193C43.1218 64.1975 44.9299 60.7346 44.4975 57.2026C44.7508 54.1767 43.4692 51.2021 40.97 49.0155C37.8829 46.9686 33.9459 46.0537 30.0475 46.4771ZM35.6575 63.0659C33.8869 63.9031 31.8595 64.2766 29.835 64.1384H28.73V50.2668H29.75C33.32 50.2668 34.7225 50.5528 36.125 51.6254C37.8271 53.1161 38.7062 55.1399 38.5475 57.2026C38.7661 59.4349 37.6898 61.6187 35.6575 63.0659ZM50.7025 67.9281H56.44V58.9544H68V55.1648H56.44V50.2668H68V46.4771H50.7025V67.9281ZM46.75 0H0V39.3268H8.5V32.1765V28.4226V7.15033H43.2225L59.5 20.8432V28.4226V32.1765V39.3268H68V17.8758L46.75 0Z" fill="#085858"></path></svg>
                                            <small class="text-uppercase mb-0" aria-label="PDF size 188.67 KB" data-i18n="sample_pdf_size">188.67 KB</small>
                                        </div>
                                        <div>
                                            <div class="d-flex justify-content-end gap-4 flex-column">
                                                <a id="btn-2wgk6p" type="pdf" class="download-btn d-flex align-items-center text-uppercase pointer" target="_blank" href="https://www.meity.gov.in/static/uploads/2025/02/0da2ec7e6bbf7d4803d256b9be0fadfb.pdf">
                                                    <span class="material-symbols-outlined bhashini-skip-translation" aria-hidden="true">visibility</span>
                                                    <span data-i18n="view">View</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </section>


        <script src="script.js"></script>
        <!-- DBIM Toolkit JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>

    </body>
</html>