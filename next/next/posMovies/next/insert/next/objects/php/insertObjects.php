<?php

    include './connection.php';

    $name = isset($_GET['name']) ? $_GET['name'] : false;
    $origin = isset($_GET['origin']) ? $_GET['origin'] : false;
    $amount = isset($_GET['amount']) ? $_GET['amount'] : false;
    $price = isset($_GET['price']) ? $_GET['price'] : false;
    $description = isset($_GET['description']) ? $_GET['description'] : false;

    if($name != false && $origin != false && $amount != false && $price != false && $description != false) {

        $sql = "INSERT INTO objects(obj_name, obj_price, obj_amount, obj_origin, obj_description) VALUES('$name','$price','$amount','$origin','$description');";
        $query = $conn -> query($sql);
        echo "true";

    } else if($name != false && $origin != false && $amount != false && $price != false && !($description) != false) {

        $sql = "INSERT INTO objects(obj_name, obj_amount, obj_origin) VALUES('$name','$price','$amount','$origin');";
        $query = $conn -> query($sql);
        echo "true";

    } else {
        
        echo "false";

    }

?>