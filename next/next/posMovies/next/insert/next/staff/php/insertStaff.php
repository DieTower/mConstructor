<?php

    include './connection.php';

    $name = isset($_GET['name']) ? $_GET['name'] : false;
    $date = isset($_GET['date']) ? $_GET['date'] : false;
    $movie = $_SESSION['movieId'];
    $description = isset($_GET['description']) ? $_GET['description'] : false;

    if($name != false && $date != false && $movie != false && $description != false) {

        $sql = "INSERT INTO scenes(sce_name,sce_date,sce_description,sce_mov_id) VALUES('$name','$date','$description','$movie');";
        $query = $conn -> query($sql);
        echo "true";

    } else if($name != false && $date != false && $movie != false && !($description) != false) {

        $sql = "INSERT INTO scenes(sce_name,sce_date,sce_mov_id) VALUES('$name','$date','$movie');";
        $query = $conn -> query($sql);
        echo "true";

    } else {
        
        echo "false";

    }

?>