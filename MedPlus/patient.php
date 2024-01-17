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
        * {
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
        }

        .row {
            padding: 20px 50px 10px 50px;
        }

        .submit {
            display: flex;
            justify-content: center;
            padding-bottom: 40px;
        }

        #submit {
            width: 90px;

        }

        .container-fluid {
            /* border: 2px solid #c0f3f0; */
            margin-top:100px;
            /* border:1px solid grey; */
            box-shadow: 10px 5px 25px grey;
        }

        /* body{
            position:relative;
        } */

        .mybtn{
            margin-left:10px;
        }

        
    </style>
</head>

<body>
    
    <div class="container container-fluid">
        
        <div class="row">

            <h2>Patient Form</h2>
        </div>

        <div class="formelement">
            <form action="patientsubmit.php" method="post">
                <div class="row">
                    <div class="col">
                        <input type="text" name="name" class="form-control" placeholder="Name" aria-label="Name">
                    </div>
                    <div class="col">
                        <input type="number" name="age" class="form-control" placeholder="Age" aria-label="Age">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <input type="text" name="address" class="form-control" id="Address" placeholder="Address">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <input type="text" name="sym1" class="form-control" id="symp1" placeholder="Add Symptoms">
                    </div>
                    <div class="col-4">
                        <input type="text" name="sym2" class="form-control" id="symp2" placeholder="Add Symptoms">
                    </div>
                    <div class="col-4">
                        <input type="text" name="sym3" class="form-control" id="symp3" placeholder="Add Symptoms">
                    </div>
                </div>
                <div class="row">
                    <div class="submit">
                        <input class="btn btn-primary" type="submit" value="Submit" id="submit">
                        <a href="logout.php" class="btn btn-primary mybtn">Logout</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>