<?php

    include './connection.php';

    $objectsId = isset($_GET['objectsId']) ? $_GET['objectsId'] : false;
    $sceneId = isset($_GET['sceneId']) ? $_GET['sceneId'] : false;
    //$description = isset($_GET['description']) ? $_GET['description'] : false;

    if($objectsId != false && $sceneId != false) {

        $sql = "INSERT INTO objects_scenes(os_obj_id,os_sce_id) VALUES('$objectsId','$sceneId');";
        $query = $conn -> query($sql);
        echo "true";

    } else {
        
        echo "false";

    }

?>