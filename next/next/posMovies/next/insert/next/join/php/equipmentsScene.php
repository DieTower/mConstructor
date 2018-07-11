<?php

    include './connection.php';

    $sceneDate = isset($_GET['sceneDate']) ? $_GET['sceneDate'] : false;
    $modelId = isset($_GET['modelId']) ? $_GET['modelId'] : false;
    $sceneId = isset($_GET['sceneId']) ? $_GET['sceneId'] : false;
    $description = isset($_GET['description']) ? $_GET['description'] : false;

    if($sceneDate != false && $modelId != false && $sceneId != false && $description != false) {

        $sql = "INSERT INTO day_for_filming(dff_date,dff_description) VALUES('$sceneDate','$description');";
        $query = $conn -> query($sql);

        $dataId = mysqli_insert_id($conn);

        $sqlConnectTables = "INSERT INTO scenes_equipments(se_equip_id,se_dff_id,se_sce_id) VALUES('$modelId',$dataId,'$sceneId');";
        $queryConnectTables = $conn -> query($sqlConnectTables);
        
        echo "true";

    } else {
        
        echo "false";

    }

?>