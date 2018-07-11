<?php

    include './connection.php';

    $shotNumber = isset($_GET['shotNumber']) ? $_GET['shotNumber'] : false;
    $timeStart = isset($_GET['timeStart']) ? $_GET['timeStart'] : false;
    $timeEnd = isset($_GET['timeEnd']) ? $_GET['timeEnd'] : false;
    $description = isset($_GET['description']) ? $_GET['description'] : false;
    $sceneId = isset($_GET['sceneId']) ? $_GET['sceneId'] : false;

    if($shotNumber != false && $timeStart != false && $timeEnd != false && $sceneId != false && $description != false) {

        $sql = "INSERT INTO shots(shot_shot_number,shot_begin,shot_end,shot_describe,shot_sce_id) VALUES('$shotNumber','$timeStart','$timeEnd','$description','$sceneId');";
        $query = $conn -> query($sql);
        echo "true";

    } else if($shotNumber != false && $timeStart != false && $timeEnd != false && $sceneId != false && $description != false) {

        $sql = "INSERT INTO shots(shot_shot_number,shot_begin,shot_end,shot_describe,shot_sce_id) VALUES('$shotNumber','$timeStart','$timeEnd','$description','$sceneId');";
        $query = $conn -> query($sql);
        echo "true";

    } else {
        
        echo "false";

    }

?>