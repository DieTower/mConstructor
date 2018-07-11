<?php

    include './connection.php';

    $actorsId = isset($_GET['actorsId']) ? $_GET['actorsId'] : false;
    $sceneId = isset($_GET['sceneId']) ? $_GET['sceneId'] : false;
    $description = isset($_GET['description']) ? $_GET['description'] : false;

    if($actorsId != false && $sceneId != false && $description != false) {

        $sql = "INSERT INTO scenes_actors(sa_sce_id,sa_act_id) VALUES('$actorsId','$sceneId');";
        $query = $conn -> query($sql);
        
        echo "true";

    } else {
        
        echo "false";

    }

?>