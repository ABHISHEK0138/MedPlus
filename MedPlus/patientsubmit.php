<?php
session_start();

$server="localhost";
$username="root";
$password="";
$dbname="medplus";
$conn = mysqli_connect($server , $username , $password , $dbname);

$userid=$_SESSION['name'];

$name=$_POST['name'];
$age=$_POST['age'];
$address=$_POST['address'];
$sym1=$_POST['sym1'];
$sym2=$_POST['sym2'];
$sym3=$_POST['sym3'];

// $sql="insert into patient(name,age,address,sym1,sym2,sym3,userid) values ('$name','$age','$address','$sym1','$sym2','$sym3','$userid')";


$sql="select d.name,d.contact,d.email,d.specialization,d.hospital,d.address,di.dname from doctor d,disease di where di.category=d.specialization and di.sym1='$sym1' or di.sym1='$sym2' or di.sym1='$sym3' or di.sym2='$sym1' or di.sym2='$sym2' or di.sym2='$sym3' or di.sym3='$sym1' or di.sym3='$sym2' or di.sym3='$sym3' or di.sym4='$sym3' or di.sym4='$sym2' or di.sym4='$sym1'";

$result=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suggestion Box</title>
    
    <style>
        *{
            margin:0;
            padding:0;
        }
        .container{
            display:grid;
            width:100%;
            /* grid-gap:5px; */
        }
        .card{
            /* border:1px solid black; */
            text-align:center;
            border-radius:9px;
            /* background-color:plum; */
            height:180px;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            margin-top:10px;
            margin-bottom:10px;
            box-shadow: 10px 5px 25px green;
        }

        .goback{
            display:flex;
            align-items:center;
            justify-content:center;
        }

        .goback button{
            padding:10px;
            background-color:green;
            color:white;
            border-radius:8px;
            border:none;
        }
        </style>
</head>
<body>
    <div class="container">
        <?php
        while($rows=mysqli_fetch_assoc($result))
        {
            ?>
            <div class="card">
                <h3>You are probably suffering from: <?php echo $rows["dname"]; ?></h3>
                <h4>You can reach out to:</h4>
                <p>Doctor Name :<?php echo $rows["name"]; ?></p>
                <p>Specialization : <?php echo $rows["specialization"]; ?></p>
                <p>Hospital Incharge : <?php echo $rows["hospital"]; ?></p>
                <p>Address: <?php echo $rows["address"]; ?></p>
                <p>Contact : <?php echo $rows["contact"]; ?></p>
                <p>Email : <?php echo $rows["email"]; ?></p>
            </div>
        <?php
        }
        ?>
    </div>
    <div class="goback">
        <button onclick="window.open('patient.php')">Go Back</button>
    </div>
</body>
</html>


