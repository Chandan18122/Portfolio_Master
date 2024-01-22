<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SignU</title>


    <!--  Bootstrap css file  -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <!-- signup css -->

     <link rel="stylesheet" href="./css/styles.css">
    <!--  font awesome icons  -->
    <link rel="stylesheet" href="./css/all.min.css">


    <!--  Magnific Popup css file  -->
    <link rel="stylesheet" href="./vendor/Magnific-Popup/dist/magnific-popup.css">


    <!--  Owl-carousel css file  -->
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.theme.default.min.css">


    <!--  custom css file  -->
    <link rel="stylesheet" href="./css/style.css">

    <!--  Responsive css file  -->
    <link rel="stylesheet" href="./css/responsive.css">

</head>

<body>


    <!--  ======================= Start Header Area ============================== -->

    <header class="header_area">
        <div class="main-menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#"><img src="./img/logo.png" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mr-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">class</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">about</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.php">services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">contact</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </header>
 </head>
 <script>  
function validateform(){  
var F_name=document.myform.F_name.value;  
var psw=document.myform.psw.value;  
  
if (F_name==null || F_name==""){  
  alert("Name can't be blank");  
  return false;  
}else if(psw.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  } 
  var firstpassword=document.f1.password.value;  
var secondpassword=document.f1.password2.value;  
  
if(firstpassword==secondpassword){  
return true;  
}  
else{  
alert("password must be same!");  
return false;  
}   
}  
</script> 
 <body>
 <form name="myform" action="action_page.php" style="border:1px solid #ccc" method="POST">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="fname"><b>First Name</b></label></br>
    <input type="text" placeholder="Enter First Name" name="F_Name" required></br>

    <label for="lname"><b>Last Name</b></label></br>
    <input type="text" placeholder="Enter Last Name" name="L_Name" required></br>

    <label for="email"><b>Email</b></label></br>
    <input type="text" placeholder="Enter Email" name="email" required></br>

    <label for="psw"><b>Password</b></label></br>
    <input type="password" placeholder="Enter Password" name="psw" required></br>

    <label for="psw-repeat"><b>Repeat Password</b></label></br>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required></br>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
</body>
</html>
