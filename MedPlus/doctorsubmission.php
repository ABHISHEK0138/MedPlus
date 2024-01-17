<?php
session_start();

$server="localhost";
$username="root";
$password="";
$dbname="medplus";
$conn = mysqli_connect($server , $username , $password , $dbname);


$userid=$_SESSION['name'];

$name=$_POST['name'];
$specialization=$_POST['specialization'];
$hospital=$_POST['hospital'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$email=$_POST['email'];

$query="insert into doctor(userid,name,specialization,hospital,address,contact,email) values('$userid','$name','$specialization','$hospital','$address','$contact','$email')";

$run=mysqli_query($conn,$query);

if($run)
{
    $_SESSION['entered']="Your details have been added to the site! The patients will address you for consultancy with the information provided!";
    header('location:doctor.php');
}



?>