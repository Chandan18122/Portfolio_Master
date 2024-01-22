<?php

$FNAME = $_POST['name'];
$EMAIL = $_POST['email'];
$SUB=$_POST['sub'];
$MSG=$_POST['mes'];

//Establish Connection
$con= mysqli_connect("localhost", "root", "");

//Select Database
$db = mysqli_select_db($con,"career"); 

//Query
$sql = "INSERT INTO feedback (name,email,feedback) VALUES ('$FNAME','$EMAIL','$MSG')";

//Execute Query
mysqli_query($con, $sql);
{
    echo '<script>alert("Thank you for your feedback");window.location="index.php";</script>';
    //header('location:index.php') ;
}
//Close the connection
mysqli_close($con);
?>
