<?php

    include './connection.php';

    $model = isset($_GET['model']) ? $_GET['model'] : false;
    $amount = isset($_GET['amount']) ? $_GET['amount'] : false;
    $price = isset($_GET['price']) ? $_GET['price'] : false;

    if($model != false && $amount != false && $price != false) {

        $sql = "INSERT INTO equipments(equip_model,equip_amount,equip_price) VALUES('$model','$amount','$price');";
        $query = $conn -> query($sql);
        echo "true";

    } else {
        
        echo "false";

    }

?>