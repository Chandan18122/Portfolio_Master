<?php      
    // include('connection.php');  
    $EMAIL = $_POST['email'];  
    $PASSWORD = $_POST['psw'];  
      

$con = mysqli_connect("localhost", "root", "");

//Select Database
$db = mysqli_select_db($con,"career"); 
        //to prevent from mysqli injection  
        $EMAIL = stripcslashes($EMAIL);  
        $PASSWORD = stripcslashes($PASSWORD);  
        $EMAIL = mysqli_real_escape_string($con, $EMAIL);  
        $PASSWORD = mysqli_real_escape_string($con, $PASSWORD);  
      
        $sql = "select *from form where email = '$EMAIL' and password = '$PASSWORD'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            //echo "<h1><center> Login successful </center></h1>" ;
            echo '<script>alert("Login successful");window.location="index.php";</script>';
            //header('location:index.php') ;
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }   
          
?>  