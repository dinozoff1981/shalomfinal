<html>

 <head>

  <title>How to Get SUM of Column in Datatable | Datatables SUM of Particular Column</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

 </head>

        <style>

th{

    font-size:12px;
    text-align:center;
}

td{

font-size:12px;
text-align:center;
}

        </style>

 <body>

  <div class="container box">

   <h3 align="center">How to Get SUM of Column in Datatable | Datatables SUM of Particular Column</h3>

   <br />

   <div class="table-responsive">

    <table id="order_data" class="table table-bordered table-striped">

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
                   

      </tr>

     </thead>

     <tbody></tbody>

     <tfoot>

      <tr>

       <th colspan="10">TOTAL</th>

       <th id="shalomcom"></th>

      </tr>

     </tfoot>

    </table>

    <br />

    <br />

    <br />

   </div>

  </div>

 </body>

</html>

<script type="text/javascript" language="javascript" >

 $(document).ready(function(){




   var dataTable = $('#order_data').DataTable({

    "processing" : true,

    "serverSide" : true,

    "order" : [],

    "ajax" : {

     url:"fetch.php",

     type:"POST"

    },

    drawCallback:function(settings)

    {

     $('#shalomcom').html(settings.json.shalomcom);

    }

   });

   




 });




</script>
