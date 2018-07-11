<?php

    if(!isset($conn)) {
        include './connection.php';
    };

    $id = isset($_SESSION['id']) ? $_SESSION['id'] : false;

    $title = isset($_GET['title']) ? $_GET['title'] : false;
    $subTitle = isset($_GET['subTitle']) ? $_GET['subTitle'] : false;
    $description = isset($_GET['description']) ? $_GET['description'] : false;


    if(isset($id) && isset($title) && isset($subTitle) && isset($description)) {
        
        $sql = "INSERT INTO movies(mov_title,mov_sub_title,mov_description,mov_user_id) VALUES('$title','$subTitle','$description','$id');";
        $query = $conn -> query($sql);

        echo "true";

    } else if(isset($id) && isset($title) && isset($subTitle)) {

        $sql = "INSERT INTO movies(mov_title,mov_sub_title,mov_user_id) VALUES('$title','$subTitle','$id');";
        $query = $conn -> query($sql);

        echo "true";

    } else {

        echo "false";

    };

?>