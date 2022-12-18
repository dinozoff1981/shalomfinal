


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
?>


<div class="container">
<button onclick="window.print();" class="btn btn-danger">PRINT</button>
</div>

</div>
    <div class="container">
        <button class="btn btn-primary my-5 btn-sm"><a href="create.php" class="text-light">ADD A CUSTOMER</a></button>


        <table class="table">
            <thead>
                <tr>
                    
                    <th scope="col">Ticket Number</th>
                    <th scope="col">Invoice#</th>
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
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                include 'connect.php';
$sql = "SELECT  
ticketnumber,invno,company,fullname,destination,issuedate,fare,ar,ap,vendorcom, SUM(ar) AS artotal, SUM(ap) AS aptotal,
SUM(ar-ap) AS totals, bank FROM shalom2
GROUP BY ticketnumber";
                
                //$sql="SELECT * FROM  shalom2";
                
                $result=mysqli_query($con,$sql);

                if($result){

                    
                    

                    while($row=mysqli_fetch_assoc($result)){
                           
                            $ticketnumber=$row['ticketnumber'];
                            $invno=$row['invno'];
                            $company=$row['company'];
                            $fullname=$row['fullname'];
                            $destination=$row['destination'];
                            $issuedate=$row['issuedate'];
                            $fare=$row['fare'];
                            $ar=$row['ar'];
                            $ap=$row['ap'];
                            $vendorcom=$row['vendorcom'];
                            $totals=$row['totals'];
                            $bank=$row['bank'];
                          
                           
                          

                            echo ' <tr>
                            <th scope="row">'.$ticketnumber.'</th>
                            <td> '.$invno.'</td>
                            <td>'.$company.'</td>
                            <td>'.$fullname.'</td>
                            <td>'.$destination.'</td>
                            <td>'.$issuedate.'</td>
                            <td>'.$fare.'</td>
                            <td>'.$ar.'</td>
                            <td>'.$ap.'</td>
                            <td>'.$vendorcom.'</td>
                            <td>'.$totals.'</td>
                            
                            <td>'.$bank.'</td> 
                           
                            
                            

                            <td>
                             <button class="btn btn-primary btn-sm"><a href="edit.php?updateid='.$ticketnumber.'" class="text-light">Update</a></button>
                             <button class="btn btn-danger btn-sm"><a href="delete.php?deleteid='.$ticketnumber.'" class="text-light">Delete</a></button>


                            </td>

                        </tr>';


                    }
                }
                
                
                ?>

               



            </tbody>

<tfoot id="footer">


<?php
		$total_qty=0;
        $total_qty1=0;
        $total_qty2=0;
      
 
		
		$query=$con->query("SELECT SUM(ar-ap) AS totals,sum(ar) AS artotal,sum(ap) AS aptotal FROM shalom2");
		while($row=$query->fetch_array()) {
	?>
				
	<?php 
			$total_qty = $row['totals'];
            $total_qty2 = $row['aptotal'];
            $total_qty1 = $row['artotal'];
           
         
		}
?>
	<tr>
		<td>TOTAL</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><?php echo $total_qty1; ?></td>
        <td><?php echo $total_qty2; ?></td> 
        <td></td>
        <td><?php echo $total_qty; ?></td>
        
       
 
	</tr>




</tfoot>

            
        </table> 

        

    <div class="container">
        <button class="btn btn-danger my-5"><a href="logout.php" class="text-light">Log Out</a></button>

    </div>
</body>

</html>