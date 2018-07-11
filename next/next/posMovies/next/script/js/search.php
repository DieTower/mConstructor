<?php

    include '../php/connection.php';

    $theData = isset($_GET['data']) ? $_GET['data'] : false;

    $sql = "SELECT * FROM scenes, actors, staff, objects, equipments WHERE sce_name LIKE '%$theData%' || act_artistic_name LIKE '%$theData%' || obj_name LIKE '%$theData%' || equip_model LIKE '%$theData%';";
    $query = $conn -> query($sql);
    $rows = $query -> num_rows;

    if($rows > 0) {

        while($data = $query -> fetch_assoc()) {
            
            //echo "<li><a href='#'><span>".$data['sce_name']."</span></a></li>";

            if(isset($data['sce_name'])) {

                echo "<li><a href='#'><span>".$data['sce_name']."</span></a></li>";

            } else if(isset($data['act_name'])) {

                echo "<li><a href='#'><span>".$data['act_name']."</span></a></li>";

            } else if(isset($data['act_artistic_name'])) {

                echo "<li><a href='#'><span>".$data['act_artistic_name']."</span></a></li>";

            } else if(isset($data['obj_name'])) {

                echo "<li><a href='#'><span>".$data['obj_name']."</span></a></li>";

            } else if(isset($data['equip_model'])) {

                echo "<li><a href='#'><span>".$data['equip_model']."</span></a></li>";

            } else {

                echo "";

            }

        }

    }

?>