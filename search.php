<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Shalom Travel</title>

</head>

<style>

    tr
    {

        color:darkblue;
        
        
    }

    body

    {

     background-color: white;
     


        
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

tr

{
font-size: 12px;
text-align: center;
font-family: 'Times New Roman', Times, serif;

}
th{

    font-size: 12px;
    color:brown;
}

.table

{
display: flexbox;
justify-content: center;
width: 1300px;
margin-left: -40px;

    
}

img

{

  
   margin-top: 20px;
   margin-left: 30px;
    
}


.topnav{

    display: flexbox;
    justify-content: center;
    margin-left: 360px;
}

#footer td{

    color:red;
    font-size:13px;
    font-weight: bold;
 
    
}

</style> 
<body>

<?php
include 'header.php';
include 'connect.php';
?>


<div class="container">
        <button class="btn btn-primary my-5 btn-sm"><a href="home.php" class="text-light">GO TO MAIN</a></button>
</div>

<div class="container my-5">

<form method="post">

<input type="text" placeholder="Search Data" name="search">
<button class="btn btn-dark btn-sm" name="submit">Search</button>

</form>

<div class="container my-5">
<table class="table">

<?php
  if (isset($_POST['submit'])){
$search=$_POST['search'];

$sql = "SELECT  
id,ticketnumber,invno,company,fullname,destination,issuedate,fare,ar,ap,vendorcom, SUM(ar) AS artotal, SUM(ap) AS aptotal,
SUM(ar-ap) AS totals, bank FROM shalom2 
WHERE id LIKE'%$search%' OR ticketnumber LIKE'%$search%' OR fullname LIKE'%$search%' OR company LIKE'%$search%' OR vendorcom LIKE'%$search%' OR issuedate LIKE'%$search%' GROUP BY id";
                
               
                
$result=mysqli_query($con,$sql);

if($result){

    if(mysqli_num_rows($result)>0){

    echo '<thead>
    <tr>
        
        <th scope="col">Ticket Number</th>
        <th scope="col">Invoice# </th>
        <th scope="col">Company</th>
        <th scope="col">Full Name</th>
        <th scope="col">Destination</th>
        <th scope="col">Issue Date</th>
        <th scope="col">Fare</th>
        <th scope="col">A/R</th>
        <th scope="col">A/P</th>
        <th scope="col">Vendor</th>
        <th scope="col">Shalom Comm</th>
        <th scope="col">Bank</th>
        
    </tr>
</thead>
';

while($row=mysqli_fetch_assoc($result)){

echo '<tbody>
 <tr>
 <td>'.$row['ticketnumber'].'</td>
 <td>'.$row['invno'].'</td>
 <td>'.$row['company'].'</td>
 <td>'.$row['fullname'].'</td>
 <td>'.$row['destination'].'</td>
 <td>'.$row['issuedate'].'</td>
 <td>'.$row['fare'].'</td>
 <td>'.$row['ar'].'</td>
 <td>'.$row['ap'].'</td>
 <td>'.$row['vendorcom'].'</td>
 <td>'.$row['totals'].'</td>
 <td>'.$row['bank'].'</td>
 </tr>

 </tbody>';

}
    
  } else{


    echo '<h2 class=text-danger> DATA NOT FOUND!!!!</h2>';
  }


  }

}

?>


</table>

</div>

</div>
</body>
</html>