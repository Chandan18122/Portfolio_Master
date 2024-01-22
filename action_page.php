<?php
$F_NAME = $_POST['F_Name'];
$L_NAME = $_POST['L_Name'];
$EMAIL=$_POST['email'];
$PSW=$_POST['psw'];

//Establish Connection
$con= mysqli_connect("localhost", "root", "");

//Select Database
$db = mysqli_select_db($con,"career"); 

//Query
$sql = "INSERT INTO form (first_name,last_name,email,password) VALUES ('$F_NAME','$L_NAME','$EMAIL','$PSW')";

//Execute Query
mysqli_query($con, $sql);
{
    //echo "execute";
    echo '<script>alert("registration successful");window.location="index.php";</script>';
    //header('location:index.php') ;
}



//Close the connection
mysqli_close($con);
?>