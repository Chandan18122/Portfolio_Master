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
$sql = "INSERT INTO msg (name,email,sub,mes) VALUES ('$FNAME','$EMAIL','$SUB','$MSG')";

//Execute Query
mysqli_query($con, $sql);
{
    //alert("messege send successfully");
    header('location:index.php') ;
}


//Close the connection
mysqli_close($con);

?>
