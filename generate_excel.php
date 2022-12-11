
<?php

include_once("connect.php");


$sql_query = "SELECT * FROM shalom2";
$resultset = mysqli_query($con, $sql_query) or die("database error:". mysqli_error($con));
$tasks = array();
while( $rows = mysqli_fetch_assoc($resultset) ) {
  $tasks[] = $rows;
}

if(isset($_POST["ExportType"]))
{
   
    switch($_POST["ExportType"])
    {
        case "export-to-excel" :
            // Submission from
      $filename = "phpflow_data_export_".date('Ymd') . ".xls";     
            header("Content-Type: application/vnd.ms-excel");
      header("Content-Disposition: attachment; filename=\"$filename\"");
      ExportFile($tasks);
      //$_POST["ExportType"] = '';
            exit();
        default :
            die("Unknown action : ".$_POST["action"]);
            break;
    }
}
function ExportFile($records) {
  $heading = false;
    if(!empty($records))
      foreach($records as $row) {
      if(!$heading) {
        // display field/column names as a first row
        echo implode("\t", array_keys($row)) . "\n";
        $heading = true;
      }
      echo implode("\t", array_values($row)) . "\n";
      }
    exit;
}


?>