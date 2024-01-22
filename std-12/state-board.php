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

    <script src="/js/alpine.min.js"></script>

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
                                <a class="dropdown-item" href="../std-9/std-9.php"> Std- 9 </a>
                                <a class="dropdown-item" href="../std-10/std-10.php"> Std-10 </a>
                                <a class="dropdown-item" href="../std-11/std-11.php"> Std-11 </a>
                                <a class="dropdown-item" href="../std-12/std-12.php"> Std-12 </a>
                                <a class="dropdown-item" href="../bachelors/bach.php"> Bachelors </a>
                                <a class="dropdown-item" href="../masters/master.php"> Masters </a>
                                <a class="dropdown-item" href="../phd/phd.php"> Ph.D </a>
                            </div>
                        </div>



                        <li class="nav-item">
                            <a class="nav-link" href="../../about.php">about</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../services.php">services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../blog.php">blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../contact.php">contact</a>
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

            <!--  -->
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

            <section class="content-section col">
                <div class="px-5">

                    <!--- India states -->
                    <select id="state" name="state-name" onchange="myStateNameSelect()">
                        <option value="">Select state</option>
                        <option value="AN">Andaman and Nicobar Islands</option>
                        <option value="AP">Andhra Pradesh</option>
                        <option value="AR">Arunachal Pradesh</option>
                        <option value="AS">Assam</option>
                        <option value="BR">Bihar</option>
                        <option value="CH">Chandigarh</option>
                        <option value="CT">Chhattisgarh</option>
                        <option value="DN">Dadra and Nagar Haveli</option>
                        <option value="DD">Daman and Diu</option>
                        <option value="DL">Delhi</option>
                        <option value="GA">Goa</option>
                        <option value="GJ">Gujarat</option>
                        <option value="HR">Haryana</option>
                        <option value="HP">Himachal Pradesh</option>
                        <option value="JK">Jammu and Kashmir</option>
                        <option value="JH">Jharkhand</option>
                        <option value="KA">Karnataka</option>
                        <option value="KL">Kerala</option>
                        <option value="LA">Ladakh</option>

                        <option value="LD">Lakshadweep</option>
                        <option value="MP">Madhya Pradesh</option>
                        <option value="MH">Maharashtra</option>
                        <option value="MN">Manipur</option>
                        <option value="ML">Meghalaya</option>
                        <option value="MZ">Mizoram</option>
                        <option value="NL">Nagaland</option>
                        <option value="OR">Odisha</option>
                        <option value="PY">Puducherry</option>
                        <option value="PB">Punjab</option>
                        <option value="RJ">Rajasthan</option>
                        <option value="SK">Sikkim</option>
                        <option value="TN">Tamil Nadu</option>
                        <option value="TG">Telangana</option>
                        <option value="TR">Tripura</option>
                        <option value="UP">Uttar Pradesh</option>
                        <option value="UT">Uttarakhand</option>
                        <option value="WB">West Bengal</option>
                    </select>


                    <div class="d-flex justify-content-center w-100 my-4">
                        <img id="stateImg" src="" alt="" class="stateImgLogo">
                    </div>


                    <div class="">
                        <p id="stateOutputShow" class="">

                        </p>


                        <h4 id="SchHeading1" class=""></h4>
                        <p id="SchPara1" class=""></p>

                        <h4 id="SchHeading2" class=""></h4>
                        <p id="SchPara2" class=""></p>

                        <h4 id="SchHeading3" class=""></h4>
                        <p id="SchPara3" class=""></p>

                        <h4 id="SchHeading4" class=""></h4>
                        <p id="SchPara4" class=""></p>

                        <h4 id="SchHeading5" class=""></h4>
                        <p id="SchPara5" class=""></p>





                        <a id="stateLinkOS" href="" target="_blank" class="">
                            <h4 id="linkh3">

                            </h4>
                        </a>
                    </div>


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

    <script>
        function myStateNameSelect() {
            var x = document.getElementById("state").value;
            var SchHeading1 = document.getElementById("SchHeading1");
            var SchHeading2 = document.getElementById("SchHeading2");
            var SchHeading3 = document.getElementById("SchHeading3");
            var SchHeading4 = document.getElementById("SchHeading4");
            var SchHeading5 = document.getElementById("SchHeading5");

            var SchPara1 = document.getElementById("SchPara1");
            var SchPara2 = document.getElementById("SchPara2");
            var SchPara3 = document.getElementById("SchPara3");
            var SchPara4 = document.getElementById("SchPara4");
            var SchPara5 = document.getElementById("SchPara5");

            var stateImg1 = document.getElementById("stateImg");

            if (x == 'AN') {

                var stateLinkOS1 = document.getElementById("stateLinkOS");
                stateLinkOS1.href = 'https://dbtbharat.gov.in/applyforschemes/categorywise-schemes?sb_cat_id=MQ==';

                var linkh3 = document.getElementById("linkh3");
                linkh3.innerHTML = 'For more visit website by clicking here';

                SchHeading1.innerHTML = "Centrally Sponsored Pre matric Scholarship Scheme for ST Students (CLASS IX, X)-Andaman and Nicobar";
                SchPara1.innerHTML = "Form of Benefit is that Scholarships will be provided to the students belonging to ST communities.Beneficiaries are Students of classes 9th and 10th .Amount of Benefit is Rs. 150/- to Rs. 225/- Per Month for Scholars and Rs. 150/- to Rs. 225/- Per Month for Scholars."

                SchHeading2.innerHTML = "Pre-Matric Scholarship Scheme to OBC Students-Andaman and Nicobar";
                SchPara2.innerHTML = "Form of Benefit is that Scholarships will be given to the students belonging to OBC castes. Beneficiaries are Students of classes from 1st to 10th .Amount of Benefit is RRs. 100/- Per Month for Scholars and Rs. 100/- to Rs. 5000/- Per Month for Hostellers"

                SchHeading3.innerHTML = "";
                SchPara3.innerHTML = ""

                SchHeading4.innerHTML = "";
                SchPara4.innerHTML = ""


                SchHeading5.innerHTML = "";
                SchPara5.innerHTML = ""


                stateImg1.src = "https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Emblem_of_India.svg/220px-Emblem_of_India.svg.png";
            }

            if (x == 'AP') {

                var stateLinkOS1 = document.getElementById("stateLinkOS");
                stateLinkOS1.href = 'https://dbtbharat.gov.in/applyforschemes/categorywise-schemes?sb_cat_id=MQ==';

                var linkh3 = document.getElementById("linkh3");
                linkh3.innerHTML = 'For more visit website by clicking here';


                SchHeading1.innerHTML = "Andhra Pradesh Pre-Matric Scholarship for SC, ST, BC and Disabled Welfare Students";
                SchPara1.innerHTML = "Form of Benefit is that Scholarships will be provided to the students belonging to the SC/ST/BC/PWD communities. Beneficiaries are Students of classes 5th to 10th .Amount of Benefit is Reimbursement of tuition fees"

                SchHeading2.innerHTML = "Andhra Pradesh Pre-Matric Scholarship for Minority Community Students";
                SchPara2.innerHTML = "Form of Benefit is that Scholarships will be provided to students belonging to the Minority communities.Beneficiaries are Students of classes from 6th to 10th .Amount of Benefit is Rs. 800/- Per Annum for Classes 9th to 10th."

                SchHeading3.innerHTML = "Bharati Scheme for Education (BSE) - Andhra Pradesh";
                SchPara3.innerHTML = "Form of Benefit is that Scholarships will be provided to the students of the Brahmin community. Beneficiaries are Classes 1st to PG Degree.Amount of Benefit is Rs. 5,000/- to Rs. 20,000/- Per Month"

                SchHeading4.innerHTML = "";
                SchPara4.innerHTML = ""


                SchHeading5.innerHTML = "";
                SchPara5.innerHTML = ""



                stateImg1.src = "https://upload.wikimedia.org/wikipedia/commons/thumb/3/37/Emblem_of_Andhra_Pradesh.svg/220px-Emblem_of_Andhra_Pradesh.svg.png";
            }

            if (x == 'AR') {

                var stateLinkOS1 = document.getElementById("stateLinkOS");
                stateLinkOS1.href = 'https://dbtbharat.gov.in/applyforschemes/categorywise-schemes?sb_cat_id=MQ==';

                var linkh3 = document.getElementById("linkh3");
                linkh3.innerHTML = 'For more visit website by clicking here';


                SchHeading1.innerHTML = "Umbrella Scheme For Education of ST Students -Pre Matric Scholarship (Class IX & X) For ST Students Arunachal Pradesh";
                SchPara1.innerHTML = "Form of Benefit is that Scholarships will be provided to those students who belong to Scheduled Tribe Community. Beneficiaries are Students of classes IX and X.Amount of Benefit is Rs. 150/- Per Month for Scholars and  Rs. 350/- Per Month for Hostellers."

                SchHeading2.innerHTML = "Scheme For Award Of Stipend To The Scheduled Tribe Students of Arunachal Pradesh";
                SchPara2.innerHTML = "Form of Benefit is that Scholarships will be provided to those students who belong to Scheduled Tribe Community.Beneficiaries are Students pursuing technical or higher courses.Amount of Benefit is Rs. 1000/- to Rs. 1400/- Per Annum"

                SchHeading3.innerHTML = "";
                SchPara3.innerHTML = ""

                SchHeading4.innerHTML = "";
                SchPara4.innerHTML = ""


                SchHeading5.innerHTML = "";
                SchPara5.innerHTML = ""


                stateImg1.src = "https://upload.wikimedia.org/wikipedia/commons/thumb/6/60/Flag_of_Arunachal_Pradesh.svg/100px-Flag_of_Arunachal_Pradesh.svg.png";
            }

            if (x == 'AS') {

                var stateLinkOS1 = document.getElementById("stateLinkOS");
                stateLinkOS1.href = 'https://dbtbharat.gov.in/applyforschemes/categorywise-schemes?sb_cat_id=MQ==';

                var linkh3 = document.getElementById("linkh3");
                linkh3.innerHTML = 'For more visit website by clicking here';


                SchHeading1.innerHTML = "Assam Pre Matric Scholarship For OBC Students";
                SchPara1.innerHTML = "Form of Benefit is that Students belonging to the OBC communities will be given the scholarship amounts. Beneficiaries are Class 9th & 10th  .Amount of Benefit is Rs. 4000/- Per Annum"

                SchHeading2.innerHTML = "Assam Pre Matric Scholarship For ST Students";
                SchPara2.innerHTML = "Form of Benefit is that ST students will be given the scholarship amounts.Beneficiaries are Class 9th and 10th.Amount of Benefit is  Rs. 150/- Per Month for Scholars and  Rs. 350/- Per Month for Hostellers."

                SchHeading3.innerHTML = "";
                SchPara3.innerHTML = ""

                SchHeading4.innerHTML = "";
                SchPara4.innerHTML = ""


                SchHeading5.innerHTML = "";
                SchPara5.innerHTML = ""


                stateImg1.src = "https://upload.wikimedia.org/wikipedia/commons/thumb/2/24/Flag_of_Chandigarh.svg/100px-Flag_of_Chandigarh.svg.png";
            }

            if (x == 'BR') {

                var stateLinkOS1 = document.getElementById("stateLinkOS");
                stateLinkOS1.href = 'https://dbtbharat.gov.in/applyforschemes/categorywise-schemes?sb_cat_id=MQ==';
                var linkh3 = document.getElementById("linkh3");
                linkh3.innerHTML = 'For more visit website by clicking here';


                SchHeading1.innerHTML = "Bihar Pre-Matric Scholarship (OBC)";
                SchPara1.innerHTML = "Form of Benefit is that Students who fall under the Other Backward Classes category will be given scholarship incentives. Beneficiaries are Students of class from class 1st to 10th.Amount of Benefit is  Variable Scholarship Assistance"

                SchHeading2.innerHTML = "Bihar Chief Minister Kanya Intermediate ";
                SchPara2.innerHTML = "Form of Benefit is that Girls will be given the amount of scholarship. Beneficiaries are Unmarried Girl of Bihar State.Amount of Benefit is  Rs. 10,000 /- daily basis."

                SchHeading3.innerHTML = "";
                SchPara3.innerHTML = ""

                SchHeading4.innerHTML = "";
                SchPara4.innerHTML = ""


                SchHeading5.innerHTML = "";
                SchPara5.innerHTML = ""

                stateImg1.src = "https://upload.wikimedia.org/wikipedia/commons/thumb/e/e9/Seal_of_Bihar.svg/100px-Seal_of_Bihar.svg.png";
            }

            if (x == 'CH') {

                var stateLinkOS1 = document.getElementById("stateLinkOS");
                stateLinkOS1.href = 'https://dbtbharat.gov.in/applyforschemes/categorywise-schemes?sb_cat_id=MQ==';

                var linkh3 = document.getElementById("linkh3");
                linkh3.innerHTML = 'For more visit website by clicking here';


                SchHeading1.innerHTML = "Chandigarh Pre-Matric Scholarship for SC, ST, BC and Disabled Welfare Students";
                SchPara1.innerHTML = "Form of Benefit is that Scholarships will be provided to the students belonging to the SC/ST/BC/PWD communities. Beneficiaries are Students of classes 5th to 10th .Amount of Benefit is Reimbursement of tuition fees"

                SchHeading2.innerHTML = "";
                SchPara2.innerHTML = ""

                SchHeading3.innerHTML = "";
                SchPara3.innerHTML = ""

                SchHeading4.innerHTML = "";
                SchPara4.innerHTML = ""


                SchHeading5.innerHTML = "";
                SchPara5.innerHTML = ""


                stateImg1.src = "https://upload.wikimedia.org/wikipedia/commons/thumb/2/24/Flag_of_Chandigarh.svg/120px-Flag_of_Chandigarh.svg.png";
            }

            if (x == 'CT') {

                var stateLinkOS1 = document.getElementById("stateLinkOS");
                stateLinkOS1.href = 'https://dbtbharat.gov.in/applyforschemes/categorywise-schemes?sb_cat_id=MQ==';

                var linkh3 = document.getElementById("linkh3");
                linkh3.innerHTML = 'For more visit website by clicking here';


                SchHeading1.innerHTML = "Chhattisgarh Pre-Matric Scholarship for SC, ST, BC and Disabled Welfare Students";
                SchPara1.innerHTML = "Form of Benefit is that Scholarships will be provided to the students belonging to the SC/ST/BC/PWD communities. Beneficiaries are Students of classes 5th to 10th .Amount of Benefit is Reimbursement of tuition fees"

                SchHeading2.innerHTML = "";
                SchPara2.innerHTML = ""

                SchHeading3.innerHTML = "";
                SchPara3.innerHTML = ""

                SchHeading4.innerHTML = "";
                SchPara4.innerHTML = ""


                SchHeading5.innerHTML = "";
                SchPara5.innerHTML = ""


                stateImg1.src = "https://upload.wikimedia.org/wikipedia/commons/thumb/5/5b/..Chhattisgarh_Flag%28INDIA%29.png/120px-..Chhattisgarh_Flag%28INDIA%29.png";
            }

            if (x == 'DN') {

                var stateLinkOS1 = document.getElementById("stateLinkOS");
                stateLinkOS1.href = 'https://dbtbharat.gov.in/applyforschemes/categorywise-schemes?sb_cat_id=MQ==';

                var linkh3 = document.getElementById("linkh3");
                linkh3.innerHTML = 'For more visit website by clicking here';


                SchHeading1.innerHTML = "Pre Matric Scholarship To OBC Students-Dadra Nagar Haveli";
                SchPara1.innerHTML = "Form of Benefit is that Scholarships will be provided to the students of OBC. Beneficiaries are Students of classes 9th and 10th.Amount of Benefit is Rs. 4,000/- Per Annum fees"

                SchHeading2.innerHTML = "Pre Matric Scholarship To SC Students-Dadra Nagar Haveli";
                SchPara2.innerHTML = "Form of Benefit is that SC students will be given the scholarships.Beneficiaries are Students of classes 9th and 10th.Amount of Benefit is Rs. 225/- Per Month for Scholars and Rs. 525/- Per Month for Hostellers."

                SchHeading3.innerHTML = "Pm Yasasvi Pre Matric Scholarship Scheme For EBC Students (Class Ix And X)-DNHDD";
                SchPara3.innerHTML = "Form of Benefit is that EBC communities will be awarded the scholarships. Beneficiaries areStudents pursuing classes 9th and 10th .Amount of Benefit isRs. 4000/- Per Annum"

                SchHeading4.innerHTML = "";
                SchPara4.innerHTML = ""


                SchHeading5.innerHTML = "";
                SchPara5.innerHTML = ""


                stateImg1.src = "https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_Dadra_and_Nagar_Haveli_and_Daman_and_Diu.svg/120px-Flag_of_Dadra_and_Nagar_Haveli_and_Daman_and_Diu.svg.png";
            }


            if (x == 'DL') {

                var stateLinkOS1 = document.getElementById("stateLinkOS");
                stateLinkOS1.href = 'https://dbtbharat.gov.in/applyforschemes/categorywise-schemes?sb_cat_id=MQ==';

                var linkh3 = document.getElementById("linkh3");
                linkh3.innerHTML = 'For more visit website by clicking here';


                SchHeading1.innerHTML = "Delhi Pre Matric Scholarship For SC Students";
                SchPara1.innerHTML = "Form of Benefit is that SC students will be given the scholarship amounts. Beneficiaries are Students of classes 9th and 10th .Amount of Benefit is Rs. 1000/- Per Year as Ad-Hoc Grant and Rs. 750/- Per Month."

                SchHeading2.innerHTML = "Delhi Financial Assistance To Educationally Backward Minority Students";
                SchPara2.innerHTML = "Form of Benefit is that Students of Minority communities will be given the scholarship amounts.Beneficiaries are Backward Minority Students.Amount of Benefit is Rs. 600/- Per Annum"

                SchHeading3.innerHTML = "Delhi Scheme for Education (DSE) - ";
                SchPara3.innerHTML = "Form of Benefit is that Scholarships will be provided to the students of the Brahmin community. Beneficiaries are Classes 1st to PG Degree.Amount of Benefit is Rs. 5,000/- to Rs. 20,000/- Per Month"

                SchHeading4.innerHTML = "";
                SchPara4.innerHTML = ""


                SchHeading5.innerHTML = "";
                SchPara5.innerHTML = ""


                stateImg1.src = "https://upload.wikimedia.org/wikipedia/commons/thumb/d/dc/Flag_of_Delhi_Capital_Territory.svg/120px-Flag_of_Delhi_Capital_Territory.svg.png";
            }

            if (x == 'GA') {

                var stateLinkOS1 = document.getElementById("stateLinkOS");
                stateLinkOS1.href = '/';

                stateLinkOS1.href = 'https://dbtbharat.gov.in/applyforschemes/categorywise-schemes?sb_cat_id=MQ==';

                var linkh3 = document.getElementById("linkh3");
                linkh3.innerHTML = 'For more visit website by clicking here';


                SchHeading1.innerHTML = "Goa Pre-Matric Scholarship for Minorities";
                SchPara1.innerHTML = "Form of Benefit is that Scholarships will be provided to the students belonging to the Jain, Muslim, Christian, Sikh, Buddhist, and Parsi. Beneficiaries are Students of  classes from 1st to 10th.Amount of Benefit is Rs. 500/- Per Annum as Tuition Fee and Rs. 600 Per Month as Monthly Allowance"

                SchHeading2.innerHTML = "Goa Pre-Matric Scholarship for Minority Community Students";
                SchPara2.innerHTML = "Form of Benefit is that Scholarships will be provided to students belonging to the Minority communities.Beneficiaries are Students of classes from 6th to 10th .Amount of Benefit is Rs. 800/- Per Annum for Classes 9th to 10th."

                SchHeading3.innerHTML = "";
                SchPara3.innerHTML = ""

                SchHeading4.innerHTML = "";
                SchPara4.innerHTML = ""


                SchHeading5.innerHTML = "";
                SchPara5.innerHTML = ""


                stateImg1.src = "https://upload.wikimedia.org/wikipedia/commons/thumb/8/86/Flag_of_Goa%2C_India.svg/120px-Flag_of_Goa%2C_India.svg.png";
            }


            if (x == 'HR') {

                var stateLinkOS1 = document.getElementById("stateLinkOS");
                stateLinkOS1.href = 'https://harchhatravratti.highereduhry.ac.in/';

                var linkh3 = document.getElementById("linkh3");
                linkh3.innerHTML = 'For more visit website by clicking here';


                SchHeading3.innerHTML = "Haryana Pre-Matric Scholarship for SC, ST, BC and Disabled Welfare Students";
                SchPara3.innerHTML = "Form of Benefit is that Scholarships will be provided to the students belonging to the SC/ST/BC/PWD communities. Beneficiaries are Students of classes 5th to 10th .Amount of Benefit is Reimbursement of tuition fees"

                SchHeading4.innerHTML = "Haryana Pre-Matric Scholarship for Minority Community Students";
                SchPara4.innerHTML = "Form of Benefit is that Scholarships will be provided to students belonging to the Minority communities.Beneficiaries are Students of classes from 6th to 10th .Amount of Benefit is Rs. 800/- Per Annum for Classes 9th to 10th."

                SchHeading5.innerHTML = "";
                SchPara5.innerHTML = ""

                SchHeading1.innerHTML = "Haryana State Meritorious Incentives Scheme";
                SchPara1.innerHTML = "Form of Benefit is that Scholarships will be provided to the Meritorious students. Beneficiaries are Students of classes 8th to 10th .Amount of Benefit is Reimbursement of tuition fees"


                SchHeading2.innerHTML = "Haryana Lower Income Group Scheme";
                SchPara2.innerHTML = "Form of Benefit is that Scholarships will be provided to the Lower Income Group students. Beneficiaries are Students of classes 1th to 10th .Amount of Benefit is Reimbursement of tuition fees"


                stateImg1.src = "https://upload.wikimedia.org/wikipedia/commons/thumb/e/e6/Flag_of_Haryana.svg/120px-Flag_of_Haryana.svg.png";
            }

            if (x == 'HP') {

                var stateLinkOS1 = document.getElementById("stateLinkOS");
                stateLinkOS1.href = 'https://dbtbharat.gov.in/applyforschemes/categorywise-schemes?sb_cat_id=MQ==';

                var linkh3 = document.getElementById("linkh3");
                linkh3.innerHTML = 'For more visit website by clicking here';


                SchHeading1.innerHTML = "Himachal Pradesh Pre-Matric Scholarship for SC, ST, BC and Disabled Welfare Students";
                SchPara1.innerHTML = "Form of Benefit is that Scholarships will be provided to the students belonging to the SC/ST/BC/PWD communities. Beneficiaries are Students of classes 5th to 10th .Amount of Benefit is Reimbursement of tuition fees"

                SchHeading2.innerHTML = "Himachal Pradesh Pre-Matric Scholarship for Minority Community Students";
                SchPara2.innerHTML = "Form of Benefit is that Scholarships will be provided to students belonging to the Minority communities.Beneficiaries are Students of classes from 6th to 10th .Amount of Benefit is Rs. 800/- Per Annum for Classes 9th to 10th."

                SchHeading3.innerHTML = "";
                SchPara3.innerHTML = ""

                SchHeading4.innerHTML = "";
                SchPara4.innerHTML = ""


                SchHeading5.innerHTML = "";
                SchPara5.innerHTML = ""


                stateImg1.src = "https://www.techniajz.com/techniajz/assets/admin/ckeditor/ckfinder/userfiles/images/download.png";
            }

            if (x == 'JK') {

                var stateLinkOS1 = document.getElementById("stateLinkOS");
                stateLinkOS1.href = 'https://ekalyan.cgg.gov.in/';

                var linkh3 = document.getElementById("linkh3");
                linkh3.innerHTML = 'For more visit website by clicking here';


                SchHeading1.innerHTML = "Jammu and Kashmir Pre-Matric Scholarship for SC, ST, BC and Disabled Welfare Students";
                SchPara1.innerHTML = "Form of Benefit is that Scholarships will be provided to the students belonging to the SC/ST/BC/PWD communities. Beneficiaries are Students of classes 5th to 10th .Amount of Benefit is Reimbursement of tuition fees"

                SchHeading2.innerHTML = "Jammu and Kashmir Pre-Matric Scholarship for Minority Community Students";
                SchPara2.innerHTML = "Form of Benefit is that Scholarships will be provided to students belonging to the Minority communities.Beneficiaries are Students of classes from 6th to 10th .Amount of Benefit is Rs. 800/- Per Annum for Classes 9th to 10th."

                SchHeading3.innerHTML = "";
                SchPara3.innerHTML = ""

                SchHeading4.innerHTML = "";
                SchPara4.innerHTML = ""


                SchHeading5.innerHTML = "";
                SchPara5.innerHTML = ""


                stateImg1.src = "https://upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Flag_of_Jammu_and_Kashmir.svg/120px-Flag_of_Jammu_and_Kashmir.svg.png";
            }

            if (x == 'JH') {

                var stateLinkOS1 = document.getElementById("stateLinkOS");
                stateLinkOS1.href = 'https://dbtbharat.gov.in/applyforschemes/categorywise-schemes?sb_cat_id=MQ==';

                var linkh3 = document.getElementById("linkh3");
                linkh3.innerHTML = 'For more visit website by clicking here';


                SchHeading1.innerHTML = "Jharkhand Pre-Matric Scholarship for SC, ST, BC and Disabled Welfare Students";
                SchPara1.innerHTML = "Form of Benefit is that Scholarships will be provided to the students belonging to the SC/ST/BC/PWD communities. Beneficiaries are Students of classes 5th to 10th .Amount of Benefit is Reimbursement of tuition fees"

                SchHeading2.innerHTML = "Jharkhand Pre-Matric Scholarship for Minority Community Students";
                SchPara2.innerHTML = "Form of Benefit is that Scholarships will be provided to students belonging to the Minority communities.Beneficiaries are Students of classes from 6th to 10th .Amount of Benefit is Rs. 800/- Per Annum for Classes 9th to 10th."

                SchHeading3.innerHTML = "";
                SchPara3.innerHTML = ""

                SchHeading4.innerHTML = "";
                SchPara4.innerHTML = ""


                SchHeading5.innerHTML = "";
                SchPara5.innerHTML = ""


                stateImg1.src = "https://upload.wikimedia.org/wikipedia/commons/thumb/e/ea/Flag_of_Jharkhand.svg/120px-Flag_of_Jharkhand.svg.png";
            }



            if (x == 'KL') {

                var stateLinkOS1 = document.getElementById("stateLinkOS");
                stateLinkOS1.href = 'https://www.dcescholarship.kerala.gov.in/he_ma/he_maindx.php';

                var linkh3 = document.getElementById("linkh3");
                linkh3.innerHTML = 'For more visit website by clicking here';


                SchHeading1.innerHTML = "Kerala Pre-Matric Scholarship for SC, ST, BC and Disabled Welfare Students";
                SchPara1.innerHTML = "Form of Benefit is that Scholarships will be provided to the students belonging to the SC/ST/BC/PWD communities. Beneficiaries are Students of classes 5th to 10th .Amount of Benefit is Reimbursement of tuition fees"

                SchHeading2.innerHTML = "Kerala Pre-Matric Scholarship for Minority Community Students";
                SchPara2.innerHTML = "Form of Benefit is that Scholarships will be provided to students belonging to the Minority communities.Beneficiaries are Students of classes from 6th to 10th .Amount of Benefit is Rs. 800/- Per Annum for Classes 9th to 10th."

                SchHeading3.innerHTML = "";
                SchPara3.innerHTML = ""

                SchHeading4.innerHTML = "";
                SchPara4.innerHTML = ""


                SchHeading5.innerHTML = "";
                SchPara5.innerHTML = ""


                stateImg1.src = "https://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Banner_of_Kerala.png/120px-Banner_of_Kerala.png";

            }

            if (x == 'LA') {

                var stateLinkOS1 = document.getElementById("stateLinkOS");
                stateLinkOS1.href = 'https://dbtbharat.gov.in/applyforschemes/categorywise-schemes?sb_cat_id=MQ==';

                var linkh3 = document.getElementById("linkh3");
                linkh3.innerHTML = 'For more visit website by clicking here';


                SchHeading1.innerHTML = "Pre-Matric Scholarship for SC, ST, BC and Disabled Welfare Students - Ladakh";
                SchPara1.innerHTML = "Form of Benefit is that Scholarships will be provided to the students belonging to the SC/ST/BC/PWD communities. Beneficiaries are Students of classes 5th to 10th .Amount of Benefit is Reimbursement of tuition fees"

                SchHeading2.innerHTML = "Pre-Matric Scholarship for Minority Community Students - Ladakh";
                SchPara2.innerHTML = "Form of Benefit is that Scholarships will be provided to students belonging to the Minority communities.Beneficiaries are Students of classes from 6th to 10th .Amount of Benefit is Rs. 800/- Per Annum for Classes 9th to 10th."

                SchHeading3.innerHTML = "";
                SchPara3.innerHTML = ""

                SchHeading4.innerHTML = "";
                SchPara4.innerHTML = ""


                SchHeading5.innerHTML = "";
                SchPara5.innerHTML = ""


                stateImg1.src = "https://upload.wikimedia.org/wikipedia/commons/thumb/2/26/Flag_of_Ladakh%2C_India.svg/120px-Flag_of_Ladakh%2C_India.svg.png";

            }



            if (x == 'GJ') {

                var stateLinkOS1 = document.getElementById("stateLinkOS");
                var linkh3 = document.getElementById("linkh3");
                stateLinkOS1.href = 'https://www.digitalgujarat.gov.in/GSSP/';
                linkh3.innerHTML = "For more visit website by clicking here";


                SchHeading1.innerHTML = "Mukhyamantri Yuva Swavalamban Yojana, Gujarat";
                SchPara1.innerHTML = "This scholarship is open to students who identify as Muslims, Christians, Sikhs, Buddhists, Jains, or Parsis. They must be enrolled in classes 9 and 10. Students must have received at least 50% of the possible points in their prior qualifying examination";

                SchHeading2.innerHTML = "VKY-153 Pre Matric Scholarship";
                SchPara2.innerHTML = "VKY(153) Pre matric scholarship for std 9 to 10 for Boys & Girls 750rs per annum. Whose parents/guardians income is more than 2.00 lakhs.";

                SchHeading3.innerHTML = "VKY-153 Pre Matric Scholarship for Most Backward";
                SchPara3.innerHTML = "VKY (153) Pre matric scholarship for std 9 to 10 for Boys & Girls 1000rs per annum income more than 2.00 lakhs.";

                SchHeading4.innerHTML = "BCK-17(A) Scholarship For Most Backward Class Among SC Students";
                SchPara4.innerHTML = "Student should belong to the most backward castes among the scheduled castes.No Income Limit. Scholarship rate would be 1500 per year.";


                SchHeading5.innerHTML = "BCK-4 Scholarship for Those Engaged in Cleaning and Prone to Health Hazards Occupation";
                SchPara5.innerHTML = "BCK-4 Scholarship for Those Engaged in Cleaning and Prone to Health Hazards Occupation are either presently engaged in manual scavenging or were so engaged upto or after 1.1.97 or the date on which the The Employment of manual scavengers and construction of Dry latrines (Prohibition) Act 1993 came into force in their State/UT, whichever is earlier.";
            }

            if (x == 'KA') {

                var stateLinkOS1 = document.getElementById("stateLinkOS");
                stateLinkOS1.href = 'https://ssp.postmatric.karnataka.gov.in/';

                SchHeading1.innerHTML = "Prematric Scholarship";

                SchPara1.innerHTML = "Students belonging to Backward Classes Category I, 2A, 3A and 3B. The annual income of the student's family should be below Rs. 44,500 / -. Only those with more than 75 per cent attendance in the previous class are eligible. A grant of 1000 Rs would be provided."

                SchPara2.innerHTML = ""

                SchHeading2.innerHTML = "";
                SchHeading3.innerHTML = "";
                SchHeading4.innerHTML = "";
                SchHeading5.innerHTML = "";
                SchPara3.innerHTML = ""
                SchPara4.innerHTML = ""
                SchPara5.innerHTML = ""

                stateImg1.src = "  https://upload.wikimedia.org/wikipedia/commons/thumb/a/aa/Seal_of_Karnataka.svg/375px-Seal_of_Karnataka.svg.png";



            }

            if (x == 'LD') {

                var stateLinkOS1 = document.getElementById("stateLinkOS");
                var linkh3 = document.getElementById("linkh3");
                stateLinkOS1.href = 'https://lakshadweep.gov.in/service/scholarships/';
                linkh3.innerHTML = "For more visit website by clicking here";


                SchHeading1.innerHTML = "Lakshadweep Scholarship Scheme";
                SchPara1.innerHTML = "Children of Lakshadweep studying in the island institute will get Secondary school course (VIII to X)- Rs. 200, PDC-Rs. 450, Student of Bitra Island- Rs. 450,Student of JN College staying outside the hostel – Rs. 750, Student studying in high school staying outside the hostel- Rs. 600, Pocket money for petty expenses- Rs.50, Daily allowance- Rs. 5. Applicant should be a native of Lakshadweep UT. The annual income of the applicant’s family should not be more than 2 lakh rupees";

                SchHeading2.innerHTML = "";
                SchPara2.innerHTML = "";

                SchHeading3.innerHTML = "";
                SchPara3.innerHTML = "";

                SchHeading4.innerHTML = "";
                SchPara4.innerHTML = "";


                SchHeading5.innerHTML = "";
                SchPara5.innerHTML = "";

                stateImg1.src = "https://upload.wikimedia.org/wikipedia/commons/thumb/0/07/Flag_of_Lakshadweep.png/100px-Flag_of_Lakshadweep.png";
            }

            if (x == 'MP') {

                var stateLinkOS1 = document.getElementById("stateLinkOS");
                var linkh3 = document.getElementById("linkh3");
                stateLinkOS1.href = '';
                linkh3.innerHTML = "";


                SchHeading1.innerHTML = "";
                SchPara1.innerHTML = "Sorry to let you know that there is no scholarship for students of std 9 in your currently selected state. Better luck next time.";

                SchHeading2.innerHTML = "";
                SchPara2.innerHTML = "";

                SchHeading3.innerHTML = "";
                SchPara3.innerHTML = "";

                SchHeading4.innerHTML = "";
                SchPara4.innerHTML = "";


                SchHeading5.innerHTML = "";
                SchPara5.innerHTML = "";

                stateImg1.src = "https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Emblem_of_Madhya_Pradesh.svg/100px-Emblem_of_Madhya_Pradesh.svg.png";
            }

            if (x == 'MH') {

                var stateLinkOS1 = document.getElementById("stateLinkOS");
                var linkh3 = document.getElementById("linkh3");
                stateLinkOS1.href = 'https://mahadbt.maharashtra.gov.in/';
                linkh3.innerHTML = "For more visit website by clicking here";


                SchHeading1.innerHTML = "Scholarship for Handicap, Maharashtra";
                SchPara1.innerHTML = "The student must be a handicapped ST student. He/She must have the percentage of disability greater than or equal to 40 percent and should be studying in class 8th to 12th. The student will get an amount of INR 500 per month as maintenance allowance and INR 100 per month as travelling or reader allownace.";

                SchHeading2.innerHTML = "Savitribai Phule Scholarship for VJNT/SBC/SC Girl";
                SchPara2.innerHTML = "Be a girl candidate. Be from SC, VJNT or SBC category. Be studying in class 5 to 10 in Government recognized schools. There is no family annual income limit. The girl candidate studying in class 8 to 10 will get INR 100 p.m for 10 months";

                SchHeading3.innerHTML = "Maintenance Allowance to Sainik School BC Students, Maharashtra 2017-18, Class 9";
                SchPara3.innerHTML = "Be studying in Sainik schools of Maharashtra. Have parents annual income less than INR 2 Lac from all sources. The students studying at Sainik Schools of Pune, Nashik, and Satara will receive reimbursement for the entire expenditure of lodging, boarding, uniform, clothing, pocket money, horse riding, examination fees and tuition fees.For students of other remaining Sainik Schools, a reimbursement of INR 15000 per annum as maintenance allowance will be given to each student. ";

                SchHeading4.innerHTML = "";
                SchPara4.innerHTML = "";


                SchHeading5.innerHTML = "";
                SchPara5.innerHTML = "";

                stateImg1.src = "https://upload.wikimedia.org/wikipedia/commons/thumb/d/d3/Seal_of_Maharashtra.svg/100px-Seal_of_Maharashtra.svg.png";
            }

            if (x == 'MN') {

                var stateLinkOS1 = document.getElementById("stateLinkOS");
                var linkh3 = document.getElementById("linkh3");
                stateLinkOS1.href = 'http://scholarship.mdmmanipur.in/';
                linkh3.innerHTML = "For more visit website by clicking here";


                SchHeading1.innerHTML = "Pre-Matric Scholarship for SC Students, Manipur";
                SchPara1.innerHTML = "be a domicile of Manipur, belong to the Scheduled Caste community of Manipur, have an annual family income of less than INR 2.5 lakh and not be getting any other centrally-funded Pre-Matric Scholarship. Scholarship of INR 225 for day scholars and 525 for hostellers. ";

                SchHeading2.innerHTML = "";
                SchPara2.innerHTML = "";

                SchHeading3.innerHTML = "";
                SchPara3.innerHTML = "";

                SchHeading4.innerHTML = "";
                SchPara4.innerHTML = "";


                SchHeading5.innerHTML = "";
                SchPara5.innerHTML = "";

                stateImg1.src = "https://upload.wikimedia.org/wikipedia/commons/thumb/e/e6/Kanglasa.svg/100px-Kanglasa.svg.png";
            }

            if (x == 'ML') {

                var stateLinkOS1 = document.getElementById("stateLinkOS");
                var linkh3 = document.getElementById("linkh3");
                stateLinkOS1.href = 'http://megeducation.gov.in/dhte/scholarship_schemes.php';
                linkh3.innerHTML = "For more visit website by clicking here";


                SchHeading1.innerHTML = "Centrally Sponsored Scheme of Pre-Matric Scholarships for SC/ST Student Studying in Class IX & X";
                SchPara1.innerHTML = "Student should belong to Scheduled Caste/Tribe. Her/his Parents'/Guardian's income should not exceed Rs. 2.00 lakh per annum. INR 150 to day scholars and INR 350 for hostellers. ";

                SchHeading2.innerHTML = "Pre-matric Scholarship for Students belonging to the Minority Communities";
                SchPara2.innerHTML = "Scholarship will be awarded to the students who have secured not less than 50% marks in the previous final examination and annual income of their parents/guardian from all sources does not exceed Rs. 1 lakh. 30% of scholarship will be earmarked for girl students. In case sufficient numbers of eligible girl students are not available, then the balance earmarked scholarships may be awarded to eligible boy students.";

                SchHeading3.innerHTML = "";
                SchPara3.innerHTML = "";

                SchHeading4.innerHTML = "";
                SchPara4.innerHTML = "";


                SchHeading5.innerHTML = "";
                SchPara5.innerHTML = "";

                stateImg1.src = "https://upload.wikimedia.org/wikipedia/en/8/8a/Emblem_of_Meghalaya.png";
            }

            if (x == 'MZ') {

                var stateLinkOS1 = document.getElementById("stateLinkOS");
                var linkh3 = document.getElementById("linkh3");
                stateLinkOS1.href = 'https://scholarships.mizoram.gov.in/';
                linkh3.innerHTML = "For more visit website by clicking here";


                SchHeading1.innerHTML = "Pre-Matric Mizoram Scholarships for SC, ST and Minority Categories";
                SchPara1.innerHTML = "For Scheduled Tribe Category : Their family income should not exceed INR 2,00,000 per annum. For Scheduled Caste Category : The annual family income should not exceed INR 2,50,000 from all sources. For Minority Students : Their family income should not exceed INR 1,00,000 per annum and the candidates should have secured at least 50% marks in the previous examination.";

                SchHeading2.innerHTML = "";
                SchPara2.innerHTML = "The government will pay the following fees for students in classes VI and X:Admission fee - Up to INR 500 and Tuition fee - Up to INR 350";

                SchHeading3.innerHTML = "";
                SchPara3.innerHTML = "";

                SchHeading4.innerHTML = "";
                SchPara4.innerHTML = "";


                SchHeading5.innerHTML = "";
                SchPara5.innerHTML = "";

                stateImg1.src = "https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Seal_of_Mizoram.svg/100px-Seal_of_Mizoram.svg.png";
            }

            if (x == 'NL') {

                var stateLinkOS1 = document.getElementById("stateLinkOS");
                var linkh3 = document.getElementById("linkh3");
                stateLinkOS1.href = 'https://scholarship.nagaland.gov.in/';
                linkh3.innerHTML = "For more visit website by clicking here";


                SchHeading1.innerHTML = "Pre-Matric Scholarship 2022 For SC Students";
                SchPara1.innerHTML = "The student should belong to the Scheduled Tribe (ST) category. The annual income of parents or guardians from all sources should not exceed ₹ 2 lakhs ( both fresh and renewal.)";

                SchHeading2.innerHTML = "";
                SchPara2.innerHTML = "";

                SchHeading3.innerHTML = "";
                SchPara3.innerHTML = "";

                SchHeading4.innerHTML = "";
                SchPara4.innerHTML = "";


                SchHeading5.innerHTML = "";
                SchPara5.innerHTML = "";

                stateImg1.src = "https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Flag_of_Nagaland.svg/100px-Flag_of_Nagaland.svg.png";
            }

            if (x == 'OR') {

                var stateLinkOS1 = document.getElementById("stateLinkOS");
                var linkh3 = document.getElementById("linkh3");
                stateLinkOS1.href = 'https://scholarship.odisha.gov.in/website/home';
                linkh3.innerHTML = "For more visit website by clicking here";


                SchHeading1.innerHTML = "Nirman Shramik Kalyan Yojana (Edn Astt)";
                SchPara1.innerHTML = "Applicant parents must be registered building or another construction worker. 50% attendance in the class is required. Only two children from a family will be benefited under this scheme. A scholarship of INR 3000 is given to the students.";

                SchHeading2.innerHTML = "";
                SchPara2.innerHTML = "";

                SchHeading3.innerHTML = "";
                SchPara3.innerHTML = "";

                SchHeading4.innerHTML = "";
                SchPara4.innerHTML = "";


                SchHeading5.innerHTML = "";
                SchPara5.innerHTML = "";

                stateImg1.src = "https://upload.wikimedia.org/wikipedia/commons/thumb/1/10/Seal_of_Odisha.svg/100px-Seal_of_Odisha.svg.png";
            }

            if (x == 'PY') {

                var stateLinkOS1 = document.getElementById("stateLinkOS");
                var linkh3 = document.getElementById("linkh3");
                stateLinkOS1.href = 'https://schooledn.py.gov.in/Welfare/Students.php';
                linkh3.innerHTML = "For more visit website by clicking here";


                SchHeading1.innerHTML = "PRE-MATRIC SCHOLARSHIP TO OTHER ECONOMICALLY BACKWARD CLASS STUDENTS";
                SchPara1.innerHTML = "Resident of the Union Territory of Pondicherry. The concessions under the scheme can not be held conjointly with any other scholarships provided partly or wholly at the cost of the State or of the Government of India. The students enjoying fee concessions half or full will however be permitted to enjoy the scholarship under the Scheme. IX standard and X standard @ Rs.75/- p.m. for 10 months. ";

                SchHeading2.innerHTML = "";
                SchPara2.innerHTML = "";

                SchHeading3.innerHTML = "";
                SchPara3.innerHTML = "";

                SchHeading4.innerHTML = "";
                SchPara4.innerHTML = "";


                SchHeading5.innerHTML = "";
                SchPara5.innerHTML = "";

                stateImg1.src = "https://upload.wikimedia.org/wikipedia/commons/thumb/e/ee/Emblem_of_the_Government_of_Puducherry.png/100px-Emblem_of_the_Government_of_Puducherry.png";
            }

            if (x == 'PB') {

                var stateLinkOS1 = document.getElementById("stateLinkOS");
                var linkh3 = document.getElementById("linkh3");
                stateLinkOS1.href = 'https://scholarships.punjab.gov.in/';
                linkh3.innerHTML = "For more visit website by clicking here";


                SchHeading1.innerHTML = "Dr Ambedkar Scholarship";
                SchPara1.innerHTML = "Dr Ambedkar Scholarship Portal of Punjab is a government-run online platform which provides students with scholarship information, easy application & submission process and various other services. Managed by the Government of Punjab, Dr Ambedkar Scholarship Portal specifically caters to the needs of domiciled students of Punjab who belong to different categories and are studying at post-matric level.";

                SchHeading2.innerHTML = "";
                SchPara2.innerHTML = "";

                SchHeading3.innerHTML = "";
                SchPara3.innerHTML = "";

                SchHeading4.innerHTML = "";
                SchPara4.innerHTML = "";


                SchHeading5.innerHTML = "";
                SchPara5.innerHTML = "";

                stateImg1.src = "https://upload.wikimedia.org/wikipedia/commons/thumb/5/5d/Seal_of_Punjab.svg/100px-Seal_of_Punjab.svg.png";
            }

            if (x == 'RJ') {

                var stateLinkOS1 = document.getElementById("stateLinkOS");
                var linkh3 = document.getElementById("linkh3");
                stateLinkOS1.href = 'https://sje.rajasthan.gov.in/Default.aspx?PageID=346';
                linkh3.innerHTML = "For more visit website by clicking here";


                SchHeading1.innerHTML = "Pre Matric Scholarship for SC Students ";
                SchPara1.innerHTML = "Scholarship amount of INR 3500 is provided to the students.";

                SchHeading2.innerHTML = "Pre Matric Scholarship for ST Students";
                SchPara2.innerHTML = "Scholarship amount of INR 225-3000 is provided to the students.";

                SchHeading3.innerHTML = "Pre-Matric Scholarships to the Children of those Engaged in occupations involving cleaning and prone to health hazards.";
                SchPara3.innerHTML = "Scholarship amount of INR 3500-8000 is provided to the students.";

                SchHeading4.innerHTML = "Pre Matric Scholarship for OBC Students ";
                SchPara4.innerHTML = "Scholarship amount of INR 4000 is provided to the students.";


                SchHeading5.innerHTML = "Pre Matric Scholarship for SBC/MBC (Special Group) Students ";
                SchPara5.innerHTML = "Scholarship amount of INR 50-1200 is provided to the students.";

                stateImg1.src = "https://upload.wikimedia.org/wikipedia/commons/thumb/1/1e/Emblem_Rajasthan.png/100px-Emblem_Rajasthan.png";
            }

            if (x == 'SK') {

                var stateLinkOS1 = document.getElementById("stateLinkOS");
                var linkh3 = document.getElementById("linkh3");
                stateLinkOS1.href = 'https://sikkim.gov.in/departments/education-department/scholarships-section';
                linkh3.innerHTML = "For more visit website by clicking here";


                SchHeading1.innerHTML = " Hon’ble Chief Minister’s Merit Scholarship Scheme (HCMMSS).";
                SchPara1.innerHTML = "The State Government of Sikkim has launched the Hon’ble Chief Minister’s Merit Scholarship Scheme from the year 2010. This scheme aims to provide free education to talented and deserving children from underprivileged family with an opportunity to study in reputed Public Schools both within and outside the State.";

                SchHeading2.innerHTML = "Grant of Financial Assistance to local students admitted in Rashtriya Indian Military College (RIMC), Dehradun.";
                SchPara2.innerHTML = "The Government also grants the financial assistance to local students studying in Rashtriya Indian Military College (RIMC), Dehradun at the rate of Rs. 20,000/-per annum per student. The candidates have to qualify in the entrance exams conducted by the Home Department for the said institute. The said exam is conducted twice a year in the month of June and December.";

                SchHeading3.innerHTML = "";
                SchPara3.innerHTML = "";

                SchHeading4.innerHTML = "";
                SchPara4.innerHTML = "";


                SchHeading5.innerHTML = "";
                SchPara5.innerHTML = "";

                stateImg1.src = "https://upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Seal_of_Sikkim.svg/100px-Seal_of_Sikkim.svg.png";
            }

            if (x == 'TN') {

                var stateLinkOS1 = document.getElementById("stateLinkOS");
                var linkh3 = document.getElementById("linkh3");
                stateLinkOS1.href = 'http://escholarship.tn.gov.in/';
                linkh3.innerHTML = "For more visit website by clicking here";


                SchHeading1.innerHTML = "PRE-MATRIC SCHOLARSHIP SCHEME";
                SchPara1.innerHTML = "Students studying from 6th to 10th std in English Medium. For 9th and 10th Standard Rs.250/- at the rate of Rs.25/- per month for 10 months Examination Fee Sanctioned in full for 10th Standard Students Conditions for Backward Classes Students 1) The income of the parents should not exceed Rs.1,00,000/- 2) There should be no graduate in the family. Most Backward Classes and Denotified Communities Students No conditions";

                SchHeading2.innerHTML = "";
                SchPara2.innerHTML = "";

                SchHeading3.innerHTML = "";
                SchPara3.innerHTML = "";

                SchHeading4.innerHTML = "";
                SchPara4.innerHTML = "";


                SchHeading5.innerHTML = "";
                SchPara5.innerHTML = "";

                stateImg1.src = "https://upload.wikimedia.org/wikipedia/commons/thumb/8/81/TamilNadu_Logo.svg/100px-TamilNadu_Logo.svg.png";
            }

            if (x == 'TG') {

                var stateLinkOS1 = document.getElementById("stateLinkOS");
                var linkh3 = document.getElementById("linkh3");
                stateLinkOS1.href = 'https://telanganaepass.cgg.gov.in/';
                linkh3.innerHTML = "For more visit website by clicking here";


                SchHeading1.innerHTML = "Telangana Pre-Matric Scholarships For SC/ST/BC/Disabled Welfare";
                SchPara1.innerHTML = "The annual income of the family should be less than INR 2 Lakh (for SC/ST students and BC/Minority welfare students of the urban area), INR 1.5 Lakh (for BC/Minority welfare students of the rural area) and INR 1 Lakh (for EBC/Disabled welfare students).The students also need to have an attendance of 75% or above at the end of each quarter.";

                SchHeading2.innerHTML = "Telangana National Means-cum-Merit Scholarship Scheme";
                SchPara2.innerHTML = "The students who are studying at NVS, Sainik Schools, KVS and private schools are not eligible for this scholarship.The annual income of the family should be less than INR 1.50 Lakh.The minimum percentage requirement in class 8th exam is 55% or equivalent (relaxation of 5% is available for SC/ST students).To ensure the continuation of scholarship in class 10, the students need to get clear promotion from class 9 in the first attempt with at least 55% marks or equivalent (relaxation of 5% is available for SC/ST students).";

                SchHeading3.innerHTML = "";
                SchPara3.innerHTML = "";

                SchHeading4.innerHTML = "";
                SchPara4.innerHTML = "";


                SchHeading5.innerHTML = "";
                SchPara5.innerHTML = "";

                stateImg1.src = "https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Flag_of_the_Government_of_Telangana.svg/100px-Flag_of_the_Government_of_Telangana.svg.png";
            }

            if (x == 'TR') {

                var stateLinkOS1 = document.getElementById("stateLinkOS");
                var linkh3 = document.getElementById("linkh3");
                stateLinkOS1.href = 'https://tripurauniv.ac.in/Page/Scholarship';
                linkh3.innerHTML = "For more visit website by clicking here";


                SchHeading1.innerHTML = "Tripura Pre Matric Scholarship 2023";
                SchPara1.innerHTML = "Applicants should be permanent residents of Tripura and should be included in the ST category to apply for Tripura Pre Matric Scholarship.The annual income of the parents of the applicants should be less than 2 lakhs per year.";

                SchHeading2.innerHTML = "";
                SchPara2.innerHTML = "";

                SchHeading3.innerHTML = "";
                SchPara3.innerHTML = "";

                SchHeading4.innerHTML = "";
                SchPara4.innerHTML = "";


                SchHeading5.innerHTML = "";
                SchPara5.innerHTML = "";

                stateImg1.src = "https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Seal_of_Tripura.svg/100px-Seal_of_Tripura.svg.png";
            }

            if (x == 'UP') {

                var stateLinkOS1 = document.getElementById("stateLinkOS");
                var linkh3 = document.getElementById("linkh3");
                stateLinkOS1.href = 'https://scholarship.up.gov.in/';
                linkh3.innerHTML = "For more visit website by clicking here";


                SchHeading1.innerHTML = "";
                SchPara1.innerHTML = "Login is must for the scholarship process in this state. ";

                SchHeading2.innerHTML = "";
                SchPara2.innerHTML = "Hence, click the below link to redirect to the appropriate page.";

                SchHeading3.innerHTML = "";
                SchPara3.innerHTML = "";

                SchHeading4.innerHTML = "";
                SchPara4.innerHTML = "";


                SchHeading5.innerHTML = "";
                SchPara5.innerHTML = "";

                stateImg1.src = "https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Seal_of_Uttar_Pradesh.svg/100px-Seal_of_Uttar_Pradesh.svg.png";
            }

            if (x == 'UT') {

                var stateLinkOS1 = document.getElementById("stateLinkOS");
                var linkh3 = document.getElementById("linkh3");
                stateLinkOS1.href = 'https://ubse.uk.gov.in/pages/display/96-scholarship';
                linkh3.innerHTML = "For more visit website by clicking here";


                SchHeading1.innerHTML = "Pre Matric Scholarship For OBC Students";
                SchPara1.innerHTML = "Scholarships will be given to the students belonging to the OBC categories. Class 9th and 10th = Rs. 1000/- Annually";

                SchHeading2.innerHTML = "Pre Matric Scholarship For SC Students. Financial help and support will be provided to the students belonging to the SC candidates. Class 9th and 10th = Rs. 3500/- Annually";
                SchPara2.innerHTML = "";

                SchHeading3.innerHTML = "Pre Matric Scholarship For ST Students. Scholarships will be given to the students belonging to the ST categories. Class 9th and 10th = Rs. 3500/- Annually";
                SchPara3.innerHTML = "";

                SchHeading4.innerHTML = "";
                SchPara4.innerHTML = "";


                SchHeading5.innerHTML = "";
                SchPara5.innerHTML = "";

                stateImg1.src = "https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Seal_of_Uttarakhand.svg/100px-Seal_of_Uttarakhand.svg.png";
            }

            if (x == 'WB') {

                var stateLinkOS1 = document.getElementById("stateLinkOS");
                var linkh3 = document.getElementById("linkh3");
                stateLinkOS1.href = 'http://wbmdfcscholarship.org';
                linkh3.innerHTML = "For more visit website by clicking here";


                SchHeading1.innerHTML = "West Bengal Pre-Matric Scholarship for SC/ST students";
                SchPara1.innerHTML = "The pre-matriculation scholarship programme is a centrally funded scheme that provides financial aid to SC and ST students enrolled in Class 9 and Class 10. The monthly scholarship amounts vary from Rs 150 to Rs 750, and scholars also receive an additional ad-hoc grant of up to Rs 1000 per year.";

                SchHeading2.innerHTML = "";
                SchPara2.innerHTML = "";

                SchHeading3.innerHTML = "";
                SchPara3.innerHTML = "";

                SchHeading4.innerHTML = "";
                SchPara4.innerHTML = "";


                SchHeading5.innerHTML = "";
                SchPara5.innerHTML = "";

                stateImg1.src = "https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/Emblem_of_West_Bengal.svg/99px-Emblem_of_West_Bengal.svg.png";
            }







        }
    </script>


</body>

</html>