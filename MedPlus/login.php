<?php
session_start();

$server="localhost";
$username="root";
$password="";
$dbname="medplus";
$conn = mysqli_connect($server , $username , $password , $dbname);

$userid=$_POST['userid'];
$password=$_POST['password'];
$type=$_POST['category'];

$query="select * from signup where userid='$userid' and password='$password' and type='$type'";

$run=mysqli_query($conn,$query);

$count=mysqli_num_rows($run);

if($count==1 && $type=="patient")
{
     $_SESSION['name']=$userid;
     header('location:patient.php');
}

if($count==1 && $type=="doctor")
{   
    $_SESSION['name']=$userid;
     header('location:doctor.php');
}

if($count==0)
{
    $_SESSION['invalid']="Invalid credentials! Please retry";
    header('location:index.php');
}

?>
