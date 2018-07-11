<?php

    include './connection.php';

    $functionName = isset($_GET['functionName']) ? $_GET['functionName'] : false;
    $staffId = isset($_GET['staffId']) ? $_GET['staffId'] : false;
    $sceneId = isset($_GET['sceneId']) ? $_GET['sceneId'] : false;
    $description = isset($_GET['description']) ? $_GET['description'] : false;
    
    if($functionName != false && $staffId != false && $sceneId != false && $description != false) {

        $sql = "INSERT INTO staff_function(sf_function,sf_description) VALUES('$functionName','$description');";
        $query = $conn -> query($sql);
        
        $dataId = mysqli_insert_id($conn);
        
        $sqlConnectTables = "INSERT INTO scenes_staff(ss_sce_id,ss_sta_id,ss_sf_id) VALUES('$sceneId','$staffId','$dataId');";
        $queryConnectTables = $conn -> query($sqlConnectTables);

        echo "true";

    } else {
        
        echo "false";

    }

?>