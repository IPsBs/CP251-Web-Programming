<?php

    $obj = json_decode($_GET['x'], true);
    $tablename = $obj["table"];
    $limit = $obj["limit"];
    $connect = mysqli_connect("10.1.3.40", "64102010087", "64102010087", "64102010087");
    
    if(!$connect) {
        die("Could not connect: ".mysqli_connect_error());
    }

    $std = "SELECT * FROM $tablename LIMIT $limit";
    $query = mysqli_query($connect, $std);

    $json_array = array();

    while($output = mysqli_fetch_assoc($query)) {
        $json_array[] = $output;
    }

    echo json_encode($json_array);

?>