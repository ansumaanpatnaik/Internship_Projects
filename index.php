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
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <style>
    .logo-slider .slick-slide {
        display: flex !important;
        justify-content: center;
        align-items: center;
        padding: 0 15px;
    }
    .logo-slider img {
        max-height: 70px;
        width: auto;
        margin: 0 auto;
        display: block;
    }
    /* Custom slick arrow styles to match meity.gov.in */
    .logo-slider .slick-arrow {
        background: #fff !important;
        border: 1px solid #e0e0e0 !important;
        border-radius: 50% !important;
        box-shadow: 0 2px 8px 0 rgba(0,0,0,0.08);
        width: 40px;
        height: 40px;
        z-index: 2;
        top: 50%;
        transform: translateY(-50%);
        transition: background 0.2s, border 0.2s;
    }
    .logo-slider .slick-arrow:before {
        color: #1d4e9e !important;
        font-size: 22px;
        opacity: 1;
    }
    .logo-slider .slick-prev {
        left: -55px;
    }
    .logo-slider .slick-next {
        right: -55px;
    }
    .logo-slider .slick-arrow:hover, 
    .logo-slider .slick-arrow:focus {
        background: #e6f0fa !important;
        border-color: #1d4e9e !important;
        outline: none;
    }
    @media (max-width: 992px) {
        .logo-slider .slick-prev { left: -30px; }
        .logo-slider .slick-next { right: -30px; }
    }
    @media (max-width: 600px) {
        .logo-slider .slick-prev, .logo-slider .slick-next {
            left: 0 !important;
            right: 0 !important;
            top: auto;
            bottom: -45px;
            transform: none;
        }
    }
    .row, .about-mcl-section {
  width: 100%;
  max-width: 100%;
  margin: 0;
  padding: 0;
}
.about_card {
    margin-top:5px;
    transition: background 0.5s ease, color 0.5s ease;
    color: #000; 
}
.about_card:hover {
    background: rgb(15, 73, 17);
    color: #fafafa !important;
    cursor: pointer;
}
.about_card:hover * {
    color: #fafafa !important; 
}
.doc-icon {
    width: 57px;
    height: auto;
}
.doc_card{
    cursor:pointer;
}
#imp_link_id:hover{
cursor:pointer;
}
               #search-container {
            position: relative;
            width: 100%;
        }

        .search-wrapper {
            position: relative;
        }

        .search-wrapper input {
            width: 100%;
            padding-left: 40px; /* space for the icon */
            padding-right: 10px;
            height: 45px;
            box-sizing: border-box;
        }

        .search-wrapper .fa-search {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #888;
        }

        #suggestions {
            border: 1px solid #ccc;
            max-height: 150px;
            overflow-y: auto;
            position: absolute;
            background-color: #fff;
            width: 100%;
            display: none;
            z-index: 1000;
        }

        .suggestion-item {
            padding: 10px;
            cursor: pointer;
        }

        .suggestion-item:hover {
            background-color: #f0f0f0;
        }
    </style>
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
                    <select>
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
                    <h1 data-i18n="site_title">महानदी कोलफील्ड्स लिमिटेड</h1>
                    <span data-i18n="goi_enterprise">भारत सरकार का उद्यम</span>
                </div>
            </div>
            <div class="digital-india">
                <img src="images/digitalingia.svg" alt="Digital India">
            </div>        
        </div>
        <div class="container">
        <div class="row justify-content-center" style="margin-top:50px;">
             <div class="col-lg-6 col-md-8 col-sm-10">
                <div id="search-container">
                    <div class="search-wrapper">
                         <i class="fa fa-search"></i>
                         <input type="text" id="search" autocomplete="off" placeholder="Search...">
                     </div>
                <div id="suggestions" style="z-index:4000;"></div>
            </div>
        </div>
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
<section class="hero">
    <div class="slider">
        <div class="slide active">
            <img src="images/bg12.jpeg" alt="MCL Mining Operations">
            <div class="slide-content">
                <h2 data-i18n="powering_growth">भारत के विकास को शक्ति प्रदान करना</h2>
                <p data-i18n="mcl_commitment">
महानदी कोलफील्ड्स लिमिटेड टिकाऊ कोयला उत्पादन, ऊर्जा सुरक्षा सुनिश्चित करने और भारत के औद्योगिक विकास में योगदान देने के लिए प्रतिबद्ध है।</p>
            </div>
        </div>
        <div class="slide">
            <img src="images/bg14.jpeg" alt="Sustainable Mining">
            <div class="slide-content">
                <h2 data-i18n="sustainable_mining">सतत खनन</h2>
                <p data-i18n="sustainable_mining_desc">
उच्च उत्पादन मानकों को बनाए रखते हुए पर्यावरण की दृष्टि से जिम्मेदार खनन प्रथाओं में अग्रणी होना।</p>
            </div>
        </div>
        <div class="slide">
            <img src="images/bg13.jpeg" alt="Community Development">
            <div class="slide-content">
                <h2 data-i18n="community_development">सामुदायिक विकास</h2>
                <p data-i18n="community_development_desc">
व्यापक सीएसआर पहलों और सतत विकास कार्यक्रमों के माध्यम से स्थानीय समुदायों को सशक्त बनाना।</p>
            </div>
        </div>
    </div>
    <div class="slider-controls">
        <button class="prev-btn" aria-label="Previous Slide"><i class="fas fa-chevron-left"></i></button>
        <button class="next-btn" aria-label="Next Slide"><i class="fas fa-chevron-right"></i></button>
    </div>
    <div class="slider-dots">
        <span class="dot active"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
</section>
<span id="main-content"></span>
<div class="announcements-panel">
    <div class="container">
        <div class="announcement-wrapper">
            <div class="announcement-header">
                <i class="fas fa-bullhorn"></i>
                <span data-i18n="announcements">घोषणाएं</span>
            </div>
            <div class="announcement-content">
                <div class="announcement-scroll">
                    <span data-i18n="welcome_msg">महानदी कोलफील्ड्स लिमिटेड - भारत सरकार का उद्यम में आपका स्वागत है</span>
                    <span>•</span>
                    <span data-i18n="latest_tender">नवीनतम निविदा: खनन उपकरण की आपूर्ति - अंतिम तिथि: 30 अप्रैल 2024</span>
                    <span>•</span>
                    <span data-i18n="recruitment_drive">भर्ती अभियान: विभिन्न पदों के लिए आवेदन शुरू - अभी आवेदन करें!</span>
                    <span>•</span>
                    <span data-i18n="csr_initiative">सीएसआर पहल: नया सामुदायिक विकास कार्यक्रम शुरू किया गया</span>
                    <span>•</span>
                    <span data-i18n="safety_first">सुरक्षा प्रथम: 1 से 7 मई 2024 तक वार्षिक सुरक्षा सप्ताह समारोह</span>
                </div>
            </div>
            <button class="announcement-pause-btn " aria-label="Pause/Resume announcements" title="Pause/Resume announcements">
                    <i class="fas fa-pause"></i>
            </button>
        </div>
    </div>
</div>

<!-- About MCL Section -->

<section class="about-mcl-section">
    <div class="container">
        <div class="row">

   
    <div class="about-mcl-container">
        <div class="about-mcl-card">
            <div class="about-mcl-text">
                <h2 data-i18n="about_mcl">एमसीएल के बारे में</h2>
                <p data-i18n="about_mcl_desc">
                    महानदी कोलफील्ड्स लिमिटेड (एमसीएल) भारत की प्रमुख कोयला उत्पादक कंपनियों में से एक है। यह भारत सरकार के कोयला मंत्रालय के तहत कोल इंडिया लिमिटेड की एक सहायक कंपनी है। एमसीएल महानदी क्षेत्र में कोयला खनन और उत्पादन के लिए जिम्मेदार है, जो देश की ऊर्जा सुरक्षा और औद्योगिक विकास में महत्वपूर्ण योगदान देता है। कंपनी ऊर्जा आवश्यकताओं और पारिस्थितिक संरक्षण के बीच संतुलन सुनिश्चित करते हुए टिकाऊ खनन प्रथाओं, सामुदायिक विकास और पर्यावरण संरक्षण के लिए प्रतिबद्ध है।
                </p>
                <div class="container" style="margin-top:10px;">
                    <div class="row" align="center">
                        <div class="col-sm-12 col-md-12 col-lg-5" onclick="aboutus_change();">
                            <div class="about_card" style="border:2px solid #43a047;min-height:70px;padding-top:5px;">
                               <div align="center">
                                <img src="resources/group.png" alt="Group ICON"/>
                                <p>हमारी टीम</p>
                               </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-5" onclick="ourperformance_change();">
                            <div class="about_card" style="border:2px solid #43a047;min-height:70px;padding-top:5px;">
                               <div align="center">
                                <img src="resources/bar_chart.png" alt="Group ICON"/>
                                <p>हमारा प्रदर्शन</p>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-divider"></div>
            <div class="about-mcl-cmd-card">
                <img src="images/CMD_MCL_UAKaole.jpeg" alt="Shri Uday A Kaole" class="cmd-photo">
                <div class="cmd-details">
                    <div class="cmd-name" data-i18n="cmd_name">श्री उदय ए काओले</div>
                    <div class="cmd-title" data-i18n="cmd_title">अध्यक्ष-सह-प्रबंध निदेशक</div>
                    <div class="cmd-company-info" data-i18n="cmd_company_info">
                        <strong>महानदी कोलफील्ड्स लिमिटेड</strong><br>
                       (कोल इंडिया लिमिटेड की एक मिनीरत्न सहायक कंपनी)<br>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
     </div>
    </div>
</section>

<main>
    <div class="container">
        <!-- Key Offerings & What's New Row -->
        <div class="offerings-news-row">
            <section class="key-offerings">
                <h2 data-i18n="key_offerings">मुख्य पेशकश</h2>
                <div class="offerings-tabs">
                    <button class="tab-btn active" data-tab="schemes" data-i18n="schemes">योजनाओं</button>
                    <button class="tab-btn" data-tab="vacancies" data-i18n="vacancies">रिक्तियां</button>
                    <button class="tab-btn" data-tab="tenders" data-i18n="tenders">निविदाओं</button>
                </div>
                <div class="offerings-content">
                    <div class="tab-content active" id="schemes">
                        <ul class="offerings-list">
                            <li data-i18n="pmkvy_4">प्रधानमंत्री कौशल विकास योजना 4.0 (पीएमकेवीवाई 4.0)</li>
                            <li data-i18n="pmkvy_3">प्रधानमंत्री कौशल विकास योजना 3.0 (पीएमकेवीवाई 3.0) 2020-21</li>
                            <li data-i18n="pmkvy_2">प्रधानमंत्री कौशल विकास योजना 2.0 (पीएमकेवीवाई 2.0) 2016-20</li>
                            <li data-i18n="pmkk">प्रधान मंत्री कौशल केंद्र (पीएमकेके)</li>
                        </ul>
                        <button class="view-more-btn" data-i18n="view_more">और देखें</button>
                    </div>
                    <div class="tab-content" id="vacancies">
                        <ul class="offerings-list">
                            <li data-i18n="vacancy_dg_niesbud">एनआईईएसबीयूडी में महानिदेशक के पद के लिए रिक्ति परिपत्र</li>
                            <li data-i18n="vacancy_director_iie">भारतीय उद्यमिता संस्थान (आईआईई), गुवाहाटी में निदेशक के पद पर भर्ती के लिए रिक्ति परिपत्र</li>
                        </ul>
                        <button class="view-more-btn" data-i18n="view_more">और देखें</button>
                    </div>
                    <div class="tab-content" id="tenders">
                        <ul class="offerings-list">
                            <li data-i18n="latest_tender_2">नवीनतम निविदा: खनन उपकरण की आपूर्ति - अंतिम तिथि: 30 अप्रैल 2024</li>
                        </ul>
                        <button class="view-more-btn" data-i18n="view_more">और देखें</button>
                    </div>
                </div>
            </section>

            <!-- What's New Section -->
            <section class="whats-new-section">
                <h2 data-i18n="whats_new">नया क्या है</h2>
                <div class="whats-new-list">
                    <div class="whats-new-item">
                        <div class="whats-new-title" data-i18n="recruitment_medical_exec">सीआईएल/एमसीएल में मेडिकल एग्जीक्यूटिव की भर्ती - विज्ञापन संख्या 02/2024</div>
                        <div class="whats-new-date" data-i18n="new">नया</div>
                    </div>
                    <div class="whats-new-item">
                        <div class="whats-new-title" data-i18n="notice_doc_verification_mining">Notice regarding Document Verification for the post of Mining Sirdar T&S Gr. C held on 21.04.2024</div>
                        <div class="whats-new-date" data-i18n="new">NEW</div>
                    </div>
                    <div class="whats-new-item">
                        <div class="whats-new-title" data-i18n="list_selected_mining">List of candidates provisionally selected for the post of Mining Sirdar T&S Gr. C</div>
                        <div class="whats-new-date" data-i18n="new">NEW</div>
                    </div>
                    <div class="whats-new-item">
                        <div class="whats-new-title" data-i18n="notice_doc_verification_overman">Notice regarding Document Verification for the post of Jr. Overman T&S Gr. C held on 21.04.2024</div>
                        <div class="whats-new-date" data-i18n="new">NEW</div>
                    </div>
                    <div class="whats-new-item">
                        <div class="whats-new-title" data-i18n="list_selected_overman">List of candidates provisionally selected for the post of Jr. Overman T&S Gr. C</div>
                        <div class="whats-new-date" data-i18n="new">NEW</div>
                    </div>
                    <div class="whats-new-item">
                        <div class="whats-new-title" data-i18n="notice_doc_verification_surveyor">Notice regarding Document Verification for the post of Surveyor T&S Gr. B held on 21.04.2024</div>
                        <div class="whats-new-date" data-i18n="new">NEW</div>
                    </div>
                    <div class="whats-new-item">
                        <div class="whats-new-title" data-i18n="list_selected_surveyor">List of candidates provisionally selected for the post of Surveyor T&S Gr. B</div>
                        <div class="whats-new-date" data-i18n="new">NEW</div>
                    </div>
                    <div class="whats-new-item">
                        <div class="whats-new-title" data-i18n="provisional_answer_key">Provisional Answer Key for Computer Based Test for the post of Jr. Data Entry Operator (Trainee)</div>
                        <div class="whats-new-date" data-i18n="new">NEW</div>
                    </div>
                    <div class="whats-new-item">
                        <div class="whats-new-title" data-i18n="notice_doc_verification_data_entry">Notice regarding Document Verification for the post of Jr. Data Entry Operator (Trainee)</div>
                        <div class="whats-new-date" data-i18n="new">NEW</div>
                    </div>
                    <div class="whats-new-item">
                        <div class="whats-new-title" data-i18n="list_selected_data_entry">List of candidates provisionally selected for the post of Jr. Data Entry Operator (Trainee)</div>
                        <div class="whats-new-date" data-i18n="new">NEW</div>
                    </div>
                </div>
                <button class="view-more-btn whats-new-btn" data-i18n="view_more">View More</button>
            </section>
        </div>

<!-- DOCUMENT SECTION-->
<div class="container">
    <div class="row me-0 ms-0 pt-5" style="margin:10px;">
        <div class="col-sm-12 col-md-12 col-lg-7">
            <div class="row align-items-center">
        <div class="col-auto">
            <img src="resources/document_icon_new.png" alt="DOCUMENT ICON" class="doc-icon" />
        </div>
        <div class="col">
            <h3 class="mb-0" style="font-weight:bold;color: #0f5757;">हाल के दस्तावेज़</h3>
        </div>        
    </div>
    <hr style="color: #0f5757;margin:5px;"/>
    <div class="row" style="margin-top:10px;">
    <div class="col-sm-12 col-md-12 col-lg-5 doc_card" style="border:1.5px solid #0f5757;min-height:80px; padding:5px;margin:5px;">
      <h4 style="margin-top:5px;">बिक्री सूचनाएँ</h4>
      <p>सूचना- एमसीएल की आईबी वैली नॉन-कोकिंग कोल वाशरी से वाशरी रिजेक्ट्स की खरीद के लिए रुचि की अभिव्यक्ति (ईओआई) के लिए शुद्धिपत्र।</p>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-5 doc_card" style="border:1.5px solid #0f5757;min-height:80px;margin:5px;">
      <h4 style="margin-top:5px;">दिशा-निर्देश</h4>
      <p>कोयला और लिग्नाइट ब्लॉकों के लिए खनन योजना और खदान बंद करने की योजना हेतु दिशानिर्देश 2025।</p>
    </div>
</div>
<div class="row" style="margin-top:10px;">
    <div class="col-sm-12 col-md-12 col-lg-5 doc_card" style="border:1.5px solid #0f5757;min-height:80px; padding:5px;margin:5px;">
      <h4 style="margin-top:5px;">नियमावली</h4>
      <p>आईटीएसएम टिकटिंग टूल (सोलमैन) का उपयोग करने के लिए उपयोगकर्ता मैनुअल।</p>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-5 doc_card" style="border:1.5px solid #0f5757;min-height:80px;margin:5px;">
      <h4 style="margin-top:5px;">अधिनियम</h4>
      <p>कोयला खान राष्ट्रीयकरण अधिनियम 1973.</p>
    </div>
</div>
<div class="row" style="margin-top:10px;">
    <div align="right">
      <div style="display: inline-flex; align-items: center; border: 1.5px solid #0f5757; padding: 4px 8px;" class="doc_card">
  <h5 style="margin: 0;padding:5px;">और देखें</h5>
  <img src="resources/arrow_right.png" alt="ARROW RIGHT" style="width: 16px; height: 16px; margin-left: 6px;" />
</div>
</div>
</div>           
        </div>
        <div class="col-sm-12 col-md-12 col-lg-5" id="imp_link_id">
             <div class="row align-items-center">
        <div class="col-auto">
            <img src="resources/important_link_icon.png" alt="DOCUMENT ICON" class="doc-icon" />
        </div>
        <div class="col">
            <h3 class="mb-0" style="font-weight:bold;color: #0f5757;">महत्वपूर्ण लिंक</h3>
        </div>        
    </div>
    <hr style="color: #0f5757;margin:5px;"/>
<div class="important_links">

<div>
<div style="display: flex; justify-content: space-between; align-items: center;">
  <a href="https://www.coal.nic.in/" target="_blank" style="all: unset; font-size: 16px; font-weight: 600; cursor: pointer;">
    कोयला मंत्रालय
  </a>
  <img src="resources/arrow_right.png" alt="Arrow Right" style="width: 16px; height: 16px;" />
</div>
<hr />
<div style="display: flex; justify-content: space-between; align-items: center;">
  <a href="https://www.coalindia.in/" target="_blank" style="all: unset; font-size: 16px; font-weight: 600; cursor: pointer;">
    कोल इंडिया लिमिटेड
  </a>
  <img src="resources/arrow_right.png" alt="Arrow Right" style="width: 16px; height: 16px;" />
</div>
<hr />
<div style="display: flex; justify-content: space-between; align-items: center;">
  <a href="https://www.mahanadicoal.in/InfoBank/infobank.php" target="_blank" style="all: unset; font-size: 16px; font-weight: 600; cursor: pointer;">
    इन्फोबैंक
  </a>
  <img src="resources/arrow_right.png" alt="Arrow Right" style="width: 16px; height: 16px;" />
</div>
<hr />
<div style="display: flex; justify-content: space-between; align-items: center;">
  <a href="https://www.mahanadicoal.in/Business/esales.php" target="_blank" style="all: unset; font-size: 16px; font-weight: 600; cursor: pointer;">
   एमसीएल-मार्केटिंग और बिक्री
  </a>
  <img src="resources/arrow_right.png" alt="Arrow Right" style="width: 16px; height: 16px;" />
</div>
<hr />
<div style="display: flex; justify-content: space-between; align-items: center;">
  <a href="https://www.mahanadicoal.in/rtidocs/rti.php" target="_blank" style="all: unset; font-size: 16px; font-weight: 600; cursor: pointer;">
  आरटीआई अधिनियम
  </a>
  <img src="resources/arrow_right.png" alt="Arrow Right" style="width: 16px; height: 16px;" />
</div>
<hr />



</div>


</div>
        </div>
    </div>
</div>


<!-- END OF DOCUMENT SECTION-->



        <section class="meity-section">

    
        <!-- In Social Media Section -->
        <section class="in-social-media-section">
            <h2 class="social-media-title"><i class="fas fa-globe"></i> <span data-i18n="in_social_media">In Social Media</span></h2>
            <div class="social-media-cards-row">
                <div class="social-media-card">
                    <div class="social-media-card-header" data-i18n="x_twitter">X</div>
                    <div class="social-media-card-content">
                        <blockquote class="twitter-tweet" data-media-max-width="560"><p lang="en" dir="ltr">FIRST AID TRAINING FOR HOUSEWIVES!<br><br>A First Aid Training Camp for the families of employees was organised by Lingaraj Area, MCL in collaboration with the Rescue Room with Refresher Training (RRRT) Facility, Talcher. The training programme saw an active participation from… <a href="https://t.co/qbmbOdWeR8">pic.twitter.com/qbmbOdWeR8</a></p>&mdash; Mahanadi Coalfields Limited (@mahanadicoal) <a href="https://twitter.com/mahanadicoal/status/1924054795230355759?ref_src=twsrc%5Etfw">May 18, 2025</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
                <div class="social-media-card">
                    <div class="social-media-card-header" data-i18n="youtube">Youtube</div>
                    <div class="social-media-card-content">
                        <iframe width="560" height="236" src="https://www.youtube.com/embed/kEco3oQpVj8?si=gc-ZBWcmkHKmLRF7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="social-media-card">
                    <div class="social-media-card-header" data-i18n="facebook">Facebook</div>
                    <div class="social-media-card-content">
                        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fmahanadicoal%2Fposts%2Fpfbid02FodMzqzjhCRaCdPGRcgkopjyYh8uFPDKwfN52vYCfHyscQ1wBbFxckBtkE3TWvrtl&show_text=true&width=500" width="500" height="188" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </div>
                </div>
                <div class="social-media-card">
                    <div class="social-media-card-header" data-i18n="instagram">Instagram</div>
                    <div class="social-media-card-content">
                        <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/DJyrr9jSX9Z/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style="min-height: 236.25px;">
<div style="padding:16px;"> <a href="https://www.instagram.com/p/DJyrr9jSX9Z/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/DJyrr9jSX9Z/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by Mahanadi Coalfields (@pro.mcl)</a></p></div></blockquote>
<script async src="//www.instagram.com/embed.js"></script>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="row me-0 ms-0 pt-5 justify-content-center align-items-center greybg homeLogoSlider">
        <div class="col-lg-8">
            <div class="brand-cards">
                <div class="logo-slider">
                    <div>
                       <a href="https://www.meity.gov.in" target="_blank"> <img src="https://www.meity.gov.in/static/uploads/2024/02/8b06743a65b0f1b2e4fc1e108a766f03.png" alt="Digital India" class="img-fluid" /></a>
                    </div>
                    <div>
                        <img src="https://www.meity.gov.in/static/uploads/2024/10/df37a3b3f15435f182e453c420193a4a.svg" alt="NeGD" class="img-fluid" />
                    </div>
                    <div>
                        <img src="https://www.meity.gov.in/static/uploads/2024/02/49e6a2f25acc32a4897ab9120e91650e.png" alt="Bhashini" class="img-fluid" />
                    </div>
                    <div>
                        <img src="https://www.meity.gov.in/static/uploads/2024/02/0f7305aece1ddf7e4f83dc74f79b942e.png" alt="UMANG" class="img-fluid" />
                    </div>
                    <div>
                        <img src="https://www.meity.gov.in/static/uploads/2024/02/6bf78ff5123eb08272e587f06bc3cd69.png" alt="MyGov" class="img-fluid" />
                    </div>
                    <div>
                        <img src="https://www.meity.gov.in/static/uploads/2024/02/4d38a7c059c026874483cd5cfcbac633.png" alt="NIC" class="img-fluid" />
                    </div>
                    <div>
                        <img src="https://www.meity.gov.in/static/uploads/2024/02/7c54c94540ce37a1e3e8120b52f72060.png" alt="STQC" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    

</main>
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
                        <h3 class="footer-heading"> </h3>
                        <ul class="footer-links">
                            <li><a href="#">Website Policies</a></li>
                            
                            <li><a href="#">Help</a></li>
                    
                            
                        </ul>
                    </div>
                    <div class="col-md-4 mb-4">
                        <h3 class="footer-heading"> </h3>
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
        <div class="row">
<div align="center">
<p class="last-updated" id="visitors_counter_text"></p>
</div>
</div>
        <div class="footer-bottom">
            <p class="text-center mb-0">This Website belongs to Mahanadi Coalfields Limited</p>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <!-- Your custom JS -->
    <script src="script.js" type="text/javascript"></script>

<!-- Go to Top Button -->
<button id="goToTopBtn" title="Go to top" aria-label="Go to top" style="display:none;position:fixed;bottom:32px;right:32px;z-index:99999;background:#0f5757;color:#fff;border:none;border-radius:50%;width:48px;height:48px;display:flex;align-items:center;justify-content:center;font-size:1.5rem;box-shadow:0 2px 8px rgba(26,35,126,0.15);cursor:pointer;transition:background 0.2s,transform 0.2s;outline:none;"><i class="fas fa-arrow-up"></i></button>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" type="text/javascript"></script>
    <script>
        
 

    $(document).ready(function(){
        $('.logo-slider').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: true,
            dots: false,
            infinite: true,
            responsive: [
                {
                    breakpoint: 992,
                    settings: { slidesToShow: 3 }
                },
                {
                    breakpoint: 600,
                    settings: { slidesToShow: 2 }
                }
            ]
        });
    });
    // Go to Top Button functionality
const goToTopBtn = document.getElementById('goToTopBtn');
window.addEventListener('scroll', function() {
    if (window.scrollY > 200) {
        goToTopBtn.style.display = 'flex';
    } else {
        goToTopBtn.style.display = 'none';
    }
});
goToTopBtn.addEventListener('click', function() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});


// JQUERY TO RETRIEVE THE VISITORS COUNTER
$(document).ready(function() {
var page_lang="hi";
    $.ajax({
        url: 'php_visitors_counter.php',     
        type: 'POST',
        data: {page_type:page_lang},
        success: function(response) {
            document.getElementById("visitors_counter_text").innerHTML="Visitors: "+response+" ";
            
        },
        error: function(xhr, status, error) {
            
            console.error("AJAX Error:", status, error);
        }
    });
});

function aboutus_change(){
    window.location.href="eaboutus.php";
}
function ourperformance_change(){
    window.location.href="eperformance.php";
}

 $(document).ready(function() {
        $('#search').on('input', function() {
            const query = $(this).val();
            if (query.length > 1) {
                $.ajax({
                    url: 'php_top_search.php',
                    method: 'POST',
                    data: { query: query,
                            lang_type:"hi"
                     },
                    success: function(data) {
                        $('#suggestions').html(data).show();
                    }
                });
            } else {
                $('#suggestions').hide();
            }
        });

        $(document).on('click', '.suggestion-item', function() {
            const url = $(this).data('url');
            window.location.href = url;
        });
    });
    </script>
    </body>
</html>