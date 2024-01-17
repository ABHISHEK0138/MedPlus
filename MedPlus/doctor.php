<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Welcome ".$_SESSION['name']; ?></title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
        <style>
            body{
                display:flex;
                align-items: center;
                justify-content: center;
                height:100vh;
                flex-direction:column;
            }
            #doctor{
                text-align: center;
                margin-bottom: 40px;
                font-size: 30px;
            }
            form{
                /* background-color: bisque; */
                box-shadow: 10px 5px 25px grey;
            }

            #sub{
                margin-left: 41%;
    margin-bottom: 10px;
    width: 104px;
            }

            .mybtn{
              margin-bottom:10px;
            }

            #logout{
              width:100px;
            }
        </style>
</head>
<body>
  <?php
  if(isset($_SESSION['entered']))
  {
    ?>
    <div class="alert alert-success" role="alert">
           <?php echo $_SESSION['entered']; ?>
        </div>
     <?php
     unset($_SESSION['entered']) ;
  }
  ?>

    <div class="container">
        <h1 id="doctor">Doctors Details</h1>
    <form class="row g-3" action="doctorsubmission.php" method="post">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Name</label>
          <input type="text" name="name" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Specialization</label>
          <input type="text" name="specialization" class="form-control" id="inputPassword4">
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Hospital</label>
          <input type="text" name="hospital" class="form-control" id="inputAddress" >
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">Address</label>
          <input type="text" name="address" class="form-control" id="inputAddress2" >
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">Contact</label>
          <input type="text" name="contact" class="form-control" id="inputCity">
        </div>
        <div class="col-md-6">
          <label for="inputState" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="inputCity">
        </div>
        
        <div class="col-12">
          
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary" id="sub">Submit</button>
          <a href="logout.php" class="btn btn-primary mybtn" id="logout">Logout</a>
        </div>
      </form>
      </div>
</body>
</html>