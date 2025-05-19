<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Based</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div>
        <section class="position-relative">            <div class="navigationSection connect-nav">
                <div class="container px-0">
                    <div class="innernav position-relative d-flex justify-content-between">
                        <button class="d-lg-none d-md-none d-sm-block scroll-btn leftside">
                            <span class="material-symbols-outlined">
                                keyboard_arrow_left
                            </span>
                        </button>

                        <ul class="nav connect-tabs">
                            <li class="nav-item">
                                <a href="#" class="nav-link">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link active">Directory</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">RTI</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Grievance Redressal</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Public Consultation</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Parliament Questions</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Visitor's Pass</a>
                            </li>
                        </ul>

                        <button class="d-lg-none d-md-none d-sm-block scroll-btn">
                            <span class="material-symbols-outlined">
                                keyboard_arrow_right
                            </span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="Innerbaner">
                <img src="./resources/DBIM_Connect_PNG.png" class="img-fluid w-100" role="img"></img>
                <div class="container">
                    <div class="innerbox">                        <nav aria-label="Breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/MCL_V_4">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">Connect</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Directory</li>
                            </ol>
                        </nav>
                        <h1 class="pagename">Directory</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="maincontent">
            <div class="container mt-5">                    <div class="row align-items-center">
                        <div class="col-md-12 col-lg-4">
                            <div class="searchField">
                                <span class="material-symbols-outlined position-absolute" style="left: 12px; top: 50%; transform: translateY(-50%);">
                                    search
                                </span>
                                <input type="text" placeholder="Search..." class="form-control ps-5">
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-8">
                            <div class="d-flex align-items-center justify-content-end flex-wrap">
                                <div class="perPageField">
                                    <span class="material-symbols-outlined">list_alt</span>
                                    <select class="form-select">
                                        <option value="10">10 per page</option>
                                        <option value="15">15 per page</option>
                                        <option value="20">20 per page</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                

                <!-- Use Alphabet Filter Code Here -->
                <div class="alphabetBox" aria-label="Alphabet buttons container">
                    <button aria-label="A">A</button>
                    <button aria-label="B">B</button>
                    <button aria-label="C">C</button>
                    <button aria-label="D">D</button>
                    <button aria-label="E">E</button>
                    <button aria-label="F">F</button>
                    <button aria-label="G">G</button>
                    <button aria-label="H">H</button>
                    <button aria-label="I">I</button>
                    <button aria-label="J">J</button>
                    <button aria-label="K">K</button>
                    <button aria-label="L">L</button>
                    <button aria-label="M">M</button>
                    <button aria-label="N">N</button>
                    <button aria-label="O">O</button>
                    <button aria-label="P">P</button>
                    <button aria-label="Q">Q</button>
                    <button aria-label="R">R</button>
                    <button aria-label="S">S</button>
                    <button aria-label="T">T</button>
                    <button aria-label="U">U</button>
                    <button aria-label="V">V</button>
                    <button aria-label="W">W</button>
                    <button aria-label="X">X</button>
                    <button aria-label="Y">Y</button>
                    <button aria-label="Z">Z</button>
                </div>

                <div class="directoryBox row">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Phone (STD Code: 0663)</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Shri Dharmendra Pradhan</td>
                                    <td>Hon'ble Minister for Skill Development and Entrepreneurship</td>
                                    <td>23465810</td>
                                    <td>minister-msde[at]gov[dot]in</td>
                                </tr>
                                <tr>
                                    <td>Shri Uday A Kaole</td>
                                    <td>Chairman-cum-Managing Director</td>
                                    <td>2542855</td>
                                    <td>cmd.mcl.cil@coalindia.in</td>
                                </tr>
                                <tr>
                                    <td>Shri Keshav Rao</td>
                                    <td>Director (HR)</td>
                                    <td>2542332</td>
                                    <td>dp.mcl.cil@coalindia.in</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="pagination-container">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>
    </div>

    <!-- Bootstrap JS -->
</body>
</html>



