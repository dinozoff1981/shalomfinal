<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funda of Web IT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


<style>

img

{

  
   margin-top: 20px;
   margin-left: 30px;
    
}

h2
{

  text-align: center;
  color: darkblue;
  font-family: 'Times New Roman', Times, serif;
  margin-top: 30px;
  text-decoration: underline;
  font-weight: bold;
}

</style>
<body>
<img src="logo.png" width="200px" height="200px" alt="">
<h2>Record By Passanger's Name</h2>


    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card mt-5">
                    <div class="card-header text-center">

                    </div>
                    <div class="card-body">

                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" name="fullname" value="<?php if(isset($_GET['fullname'])){echo $_GET['fullname'];} ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-md-12">
                                <hr>
                                <?php 
                                    include 'connect.php';

                                    if(isset($_GET['fullname']))
                                    {
                                        $fullname = $_GET['fullname'];

                                        $query = "SELECT * FROM shalom2 WHERE fullname='$fullname' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                                ?>
                                                <div class="form-group mb-3">
                                                    <label for="">Ticket Number</label>
                                                    <input type="text" value="<?= $row['ticketnumber']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Invoice Number</label>
                                                    <input type="text" value="<?= $row['invno']; ?>" class="form-control">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="">Company</label>
                                                    <input type="text" value="<?= $row['company']; ?>" class="form-control">
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="">Passanger's Name</label>
                                                    <input type="text" value="<?= $row['fullname']; ?>" class="form-control">
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="">Destination</label>
                                                    <input type="text" value="<?= $row['destination']; ?>" class="form-control">
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="">Issue Date</label>
                                                    <input type="text" value="<?= $row['issuedate']; ?>" class="form-control">
                                                </div>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "No Record Found";
                                        }
                                    }
                                   
                                ?>

                            </div>
                        </div>

                    </div>
                </div>
                <br>
                <button class="btn btn-danger btn-m" class="text-dark"><a href="home.php">Done</a></button>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>