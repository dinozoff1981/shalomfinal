<?php

//fetch.php

$con = new PDO("mysql:host=localhost;dbname=shalomdb", "root", "");

$column = array('ticketnumber', 'invno', 'company', 'fullname','destination','issuedate','fare','ar','ap','vendorcom','bank');

$query = '

SELECT * FROM shalom2

WHERE ticketnumber LIKE "%' . $_POST["search"]["value"] . '%"

OR invno LIKE "%' . $_POST["search"]["value"] . '%"

OR company LIKE "%' . $_POST["search"]["value"] . '%"

OR fullname LIKE "%' . $_POST["search"]["value"] . '%"

OR issuedate LIKE "%' . $_POST["search"]["value"] . '%"

';

if (isset($_POST["order"])) {

    $query .= 'ORDER BY ' . $column[$_POST['order']['0']['column']] . ' ' . $_POST['order']['0']['dir'] . ' ';

} else {

    $query .= 'ORDER BY issuedate DESC ';

}

$query1 = '';

if ($_POST["length"] != -1) {

    $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];

}

$statement = $con->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $con->prepare($query . $query1);

$statement->execute();

$result = $statement->fetchAll();

$data = array();

$total_order = 0;

foreach ($result as $row) {

    $sub_array = array();

    $sub_array[] = $row["ticketnumber"];
    $sub_array[] = $row["invno"];
    $sub_array[] = $row["company"];
    $sub_array[] = $row["fullname"];
    $sub_array[] = $row["destination"];
    $sub_array[] = $row["issuedate"];
    $sub_array[] = $row["fare"];
    $sub_array[] = $row["ar"];
    $sub_array[] = $row["ap"];
    $sub_array[] = $row["vendorcom"];
    $sub_array[] = $row["shalomcom"];
    $sub_array[] = $row["bank"];

    $total_order= $total_order + floatval($row["shalomcom"]);

    $data[] = $sub_array;

}

function count_all_data($con)

{

    $query = "SELECT * FROM shalom2";

    $statement = $con->prepare($query);

    $statement->execute();

    return $statement->rowCount();

}

$output = array(

    'draw'    => intval($_POST["draw"]),

    'recordsshalomcom'  => count_all_data($con),

    'recordsFiltered' => $number_filter_row,

    'data'    => $data,

    'total'    => number_format($total_order, 2)

);

echo json_encode($output);