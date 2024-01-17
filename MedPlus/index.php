<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedPlus+</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .form-floating>.form-control:focus,
        .form-floating>.form-control:not(:placeholder-shown) {
            padding-top: 0.625rem;
            padding-bottom: .625rem;
        }

        #form-text-align {
            text-align: center;
            box-shadow: 10px 5px 25px grey;
        }

        #doctor-para {
            color: white;
            text-shadow: -1px 1px 0 #000,
                1px 1px 0 #000,
                1px -1px 0 #000,
                -1px -1px 0 #000;
        }

        span {
            color: green;
        }
    </style>
</head>

<body>
<?php
    if(isset($_SESSION['invalid']))
    {
        ?>
        <div class="alert alert-danger" role="alert">
           <?php echo $_SESSION['invalid']; ?>
        </div>
        <?php
        unset($_SESSION['invalid']);
    }
    ?>
    <?php
    if(isset($_SESSION['status']))
    {
        ?>
        <div class="alert alert-success" role="alert">
           <?php echo $_SESSION['status']; ?>
        </div>
        <?php
        unset($_SESSION['status']);
    }
    ?>
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="display-4 fw-bold lh-1 mb-3" id="doctor-para">MedPlus<span>+</span></h1>
                <p class="col-lg-10 fs-4">Now an amazing doctor is easy to find and impossible to forget!</p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
                <form action="login.php" method="post" class="p-4 p-md-5 border rounded-3 bg-light" id="form-text-align">
                    <div class="form-floating mb-3">
                        <input type="text" name="userid" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Enter UserId</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Enter Password</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select name="category" class="form-control" id="floatingPassword">
                            <option value="patient">Patient</option>
                            <option value="doctor">Doctor</option>
                        </select>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                    <hr class="my-4">
                    <!-- <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small> -->
                    <a href="signup.html" class="text-muted"><small>No account? Click here to SignIn</small></a>
                </form>
            </div>
        </div>
    </div>

</body>

</html>