<?php
session_start();

$server="localhost";
$username="root";
$password="";
$dbname="medplus";
$conn = mysqli_connect($server , $username , $password , $dbname);

$name=$_POST['name'];
$userid=$_POST['userid'];
$password=$_POST['password'];
$cpass=$_POST['cpass'];
$type=$_POST['category'];

$query="insert into signup(name,userid,password,type) values ('$name','$userid','$password','$type')";
$run=mysqli_query($conn,$query);

if($run){

$_SESSION['status']="Thankyou for signing in!";
header('location: index.php');
}



?>




<!-- $query="insert into signup(names,userid,password) values ('$name','$username','$pass')"; -->