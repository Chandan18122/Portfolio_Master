<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Career veda</title>


    <!--  Bootstrap css file  -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!--  font awesome icons  -->
    <link rel="stylesheet" href="../css/all.min.css">


    <!--  Magnific Popup css file  -->
    <link rel="stylesheet" href="../vendor/Magnific-Popup/dist/magnific-popup.css">


    <!--  Owl-carousel css file  -->
    <link rel="stylesheet" href="../vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../vendor/owl-carousel/css/owl.theme.default.min.css">


    <!--  custom css file  -->
    <link rel="stylesheet" href="../css/style.css">

    <!--  Responsive css file  -->
    <link rel="stylesheet" href="../css/responsive.css">

</head>

<body>


    <!--  ======================= Start Header Area ============================== -->

    <header class="header_area">
        <div class="main-menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#"><img src="../img/logo.png" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mr-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
                        </li>

                        <div class="dropdown">
                            <li class=" dropdown-toggle nav-item" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <a class="nav-link"> classs </a>
                            </li>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="../std-9/std-9.php">  Std- 9 </a>
                                <a class="dropdown-item" href="../std-10/std-10.php"> Std-10 </a>
                                <a class="dropdown-item" href="../std-11/std-11.php"> Std-11 </a>
                                <a class="dropdown-item" href="../std-12/std-12.php"> Std-12 </a>
                                <a class="dropdown-item" href="../bachelors/bach.php"> Bachelors </a>
                                <a class="dropdown-item" href="../masters/master.php"> Masters </a>
                                <a class="dropdown-item" href="../phd/phd.php"> Ph.D </a>
                            </div>
                        </div>



                        <li class="nav-item">
                            <a class="nav-link" href="../about.php">about</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../services.php">services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../contact.php">contact</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!--  ======================= End Header Area ============================== -->

    <!--  ======================= Start Main Area ================================ -->


    <main class="site-main">

        <div class="d-flex ">

            <section class="sidebar">

                <div class="sidebar-height">
                    <div class="d-flex flex-column justify-content-between flex-shrink-0 p-3 bg-light h-100"
                        style="width: 280px;">
                        <a href="/"
                            class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                            <svg class="bi me-2" width="40" height="32">
                                <use xlink:href="#bootstrap"></use>
                            </svg>
                            <span class="fs-4">Sidebar</span>
                        </a>

                        <hr>

                        <ul class="nav nav-pills flex-column mb-auto">
                            <li class="nav-item">
                                <a href="std-9.php" class="nav-link active" aria-current="page">
                                    <svg class="bi me-2" width="16" height="16">
                                        <use xlink:href="#home"></use>
                                    </svg>
                                    Home
                                </a>
                            </li>


                            <li>
                                <a href="syllabus.php" class="nav-link link-dark ">
                                    <svg class="bi me-2" width="16" height="16">
                                        <use xlink:href="#speedometer2"></use>
                                    </svg>
                                    syllabus
                                </a>
                            </li>
                            <li>
                                <a href="books.php" class="nav-link link-dark ">
                                    <svg class="bi me-2" width="16" height="16">
                                        <use xlink:href="#speedometer2"></use>
                                    </svg>
                                    books
                                </a>
                            </li>






                            <div class="accordion" id="accordionExample">
                                <div class="card">


                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">

                                        scholarship
                                    </button>

                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <li>ICSE BOARD</li>
                                        <li>CBSE BOARD</li>
                                        <li>

                                            <a href="state-board.php" class="">
                                                STATE BOARD
                                            </a>
                                          
                                        </li>
                                    </div>
                                </div>
                            </div>

                            <a href="students.php" class="nav-link link-dark ">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#speedometer2"></use>
                                </svg>
                                students
                            </a>
                            </li>
                        </ul>

                        <hr>

                        <div class="dropdown">
                            <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle"
                                id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="" width="32" height="32"
                                    class="rounded-circle me-2">
                                <strong>mdo</strong>
                            </a>
                            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                                <li><a class="dropdown-item" href="#">New project...</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Sign out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </section>

            <section class="content-section">
                <div class="px-5">
                    v2 - Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi ad veritatis, repellendus beatae iste, error id delectus exercitationem, eaque tempora a. Laborum ducimus temporibus laboriosam perspiciatis nisi delectus sequi, dolorum atque aliquid, nesciunt voluptatibus inventore corporis doloribus ex eius aperiam labore. Fuga dignissimos expedita, laudantium dolore totam distinctio atque saepe cupiditate debitis mollitia? Veniam ut blanditiis rem doloribus recusandae explicabo odio non sit ipsam, aliquid sunt perferendis? Perspiciatis earum, porro iure consectetur quasi ea! Veniam enim eum at inventore, voluptates incidunt consequatur rem dicta laudantium consectetur. Laboriosam et incidunt amet iure officia nisi doloremque nulla hic vel voluptate quae consequuntur esse eos quos ea nostrum quam voluptatum aliquid, veniam itaque asperiores harum sit obcaecati eius. Officia, ab ducimus! Itaque expedita ullam cum blanditiis doloremque. Natus qui quis id unde nisi quam dolores quidem a temporibus iusto. Vel nisi quasi corrupti cumque nemo ea enim qui sed ratione officia facilis voluptas totam tempora, natus eligendi eveniet. Libero, ipsam adipisci quo delectus neque et consequuntur, cupiditate, vitae harum nostrum laborum excepturi? Eaque minima laudantium illum facere fuga nesciunt ratione ipsam id, laboriosam veniam distinctio temporibus aliquam mollitia ut, consequuntur obcaecati aut amet, sequi voluptatibus nostrum itaque. Perspiciatis sit quae totam voluptas necessitatibus?
                </div>
            </section>
        </div>

    </main>




    <footer class="footer-area">
        <div class="container">
            <div class="">
                <div class="site-logo text-center py-4">
                    <a href="#"><img src="../img/logo.png" alt="logo"></a>
                </div>
                <div class="social text-center">
                    <h5 class="text-uppercase">Follow me</h5>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
                <div class="copyrights text-center">
                    <p class="para">
                        Copyright ©2019 All rights reserved | This template is made with by
                        <a href="#"><span style="color: var(--primary-color);">career veda</span></a>
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <!--  Jquery js file  -->
    <script src="../js/jquery.3.4.1.js"></script>

    <!--  Bootstrap js file  -->
    <script src="../js/bootstrap.min.js"></script>

    <!--  isotope js library  -->
    <script src="../vendor/isotope/isotope.min.js"></script>

    <!--  Magnific popup script file  -->
    <script src="../vendor/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>

    <!--  Owl-carousel js file  -->
    <script src="../vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!--  custom js file  -->
    <script src="../js/main.js"></script>


</body>

</html>