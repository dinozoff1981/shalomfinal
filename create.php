
<?php
include 'connect.php';

if(isset($_POST['submit'])){

$ticketnumber=$_POST['ticketnumber'];
$invno=$_POST['invno'];
$company=$_POST['company'];
$fullname=$_POST['fullname'];
$destination=$_POST['destination'];
$issuedate=date('Y-m-d', strtotime($_POST['issuedate']));
$fare=$_POST['fare'];
$ar=$_POST['ar'];
$ap=$_POST['ap'];
$vendorcom=$_POST['vendorcom'];
$bank=$_POST['bank'];









$sql="INSERT INTO  shalom2 (ticketnumber,invno,company,fullname,destination,issuedate,fare,ar,ap,vendorcom,bank)".
"VALUES ('$ticketnumber','$invno','$company','$fullname','$destination','$issuedate','$fare','$ar','$ap','$vendorcom','$bank')";
$result=mysqli_query($con,$sql);

if($result){

  header('location:home.php');
}else{

  die(mysqli_error($con));
}


}

if(isset($_POST['more'])){

  $ticketnumber=$_POST['ticketnumber'];
  $invno=$_POST['invno'];
  $company=$_POST['company'];
  $fullname=$_POST['fullname'];
  $destination=$_POST['destination'];
  $issuedate=date('Y-m-d', strtotime($_POST['issuedate']));
  $fare=$_POST['fare'];
  $ar=$_POST['ar'];
  $ap=$_POST['ap'];
  $vendorcom=$_POST['vendorcom'];
  $bank=$_POST['bank'];
  

  
  $sql="INSERT INTO  shalom2 (ticketnumber,invno,company,fullname,destination,issuedate,fare,ar,ap,vendorcom,bank)".
  "VALUES ('$ticketnumber','$invno','$company','$fullname','$destination','$issuedate','$fare','$ar','$ap','$vendorcom','$bank')";
  $result=mysqli_query($con,$sql);
  
  if($result){
  
    header('location:create.php');
  }else{
  
    die(mysqli_error($con));
  }
  
  
  }


  

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My friends</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <style>

h2
{

  text-align: center;
  color: darkblue;
  font-family: 'Times New Roman', Times, serif;
  margin-top: 30px;
  text-decoration: underline;
  font-weight: bold;
}

body

{


  background-color: white;
  background-size: cover;
  background-repeat: none;
 
}



img

{

  
   margin-top: 20px;
   margin-left: 30px;
    
}

</style> 

  <body>
<?php
 include 'header.php';
?>
   <h2>New Customer</h2>

<div class="container my-5">

    <form method="POST">

    
            <div class="mb-3">
            <label >Ticket Number</label>
            <input type="text" class="form-control" placeholder="Ticket Number" name="ticketnumber">

            </div>

            <div class="mb-3">
            <label >Invoice#</label>
            <input type="text" class="form-control" placeholder="Invoice Number" name="invno" required="true" value="CSI-">
            </div>

            <div class="mb-3">
            <label >Company</label>
            <input type="text" class="form-control" placeholder="Company" name="company" required="true">
            </div>

            

            <div class="mb-3">
            <label >Passanger's Name</label>
            <input type="text" class="form-control" placeholder="Full Name" name="fullname" required="true">

            </div>

            
            <div class="mb-3">
            <label >Destination</label>
            <input type="text" class="form-control" placeholder="Destination" name="destination" required="true">

            </div>

            
            <div class="form-group mb-3">
                                <label for="">Issue Date</label>
                                <input type="date" name="issuedate" class="form-control" />
              </div>


  

             
            <div class="mb-3">
            <label >Fare</label>
            <input type="text" class="form-control" placeholder="Fare" name="fare"required="true">

            </div>

            <div class="mb-3">
            <label >Account Receivable</label>
            <input type="text" class="form-control" placeholder="Account Receivable" name="ar"required="true">

            </div>

             
            <div class="mb-3">
            <label >Account Payable</label>
            <input type="text" class="form-control" placeholder="Account Payable" name="ap"required="true">

            </div>
            
        


            <div class="from-group mb-3">
                                <label for="">Vendor</label>
                                <select name="vendorcom" class="form-control">
                                    <option value="">--Select a Vendor--</option>
                                    <option value="Bader Airlines ">Bader Airlines</option>
                                    <option value="Dawe Emede">Dawe Emede</option>
                                    <option value="Ethiopian Airlines">Ethiopian Airlines</option>
                                    <option value="Fly Dubai">Fly Dubai</option>
                                    <option value="Four Winds ">Four Winds</option>
                                    <option value="Jezeera Airlines">Jezeera Airlines</option>

                                </select>
                            </div>

           

            
            
            <div class="from-group mb-3">
                                <label for="">Bank</label>
                                <select name="bank" class="form-control">
                                    <option value="">--Select a Bank--</option>
                                    <option value="Abisinia Bank">Abisinia Bank</option>
                                    <option value="Awash Bank">Awash Bank</option>
                                    <option value="Birhan Bank">Birhan Bank</option>
                                    <option value="Commercial Bank">Commercial Bank</option>
                                    <option value="Dashen Bank">Dashen Bank</option>
                                    <option value="Nib Bank">Nib Bank</option>
                                    <option value="Oromia cooperative Bank">Oromia cooperative Bank</option>
                                    <option value="Oromia international Bank">Oromia international Bank</option>
                                    <option value="United Bank">United Bank</option>
                                    <option value="Zemen Bank">Zemen Bank</option>

                                </select>
                            </div>

            





            <button type="submit" class="btn btn-primary" name="submit"><a href="home.php"></a> Done</button>
            <button type="submit" class="btn btn-primary" name="more"><a href="create.php"></a> Add More</button>

    </form>


</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>