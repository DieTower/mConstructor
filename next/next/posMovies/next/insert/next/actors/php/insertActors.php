<?php

    include './connection.php';
    // name, artisticName, date, genre, origin, email, salary
    $name = isset($_GET['name']) ? $_GET['name'] : false;
    $artisticName = isset($_GET['artisticName']) ? $_GET['artisticName'] : false;
    $date = isset($_GET['date']) ? $_GET['date'] : false;
    $genre = isset($_GET['genre']) ? $_GET['genre'] : false;
    $origin = isset($_GET['origin']) ? $_GET['origin'] : false;
    $email = isset($_GET['email']) ? $_GET['email'] : false;
    $salary = isset($_GET['salary']) ? $_GET['salary'] : false;

    if($name != false && $artisticName != false && $date != false && $genre != false && $origin != false && $email != false && $salary != false) {

        $sqlCheck = "SELECT * FROM people WHERE peo_email = '$email';";
        $queryCheck = $conn -> query($sqlCheck);
        $rowsToCheck = $queryCheck -> num_rows;

        if($rowsToCheck == 0) {

            $sqlPeople = "INSERT INTO people(peo_name,peo_birth_day,peo_gender,peo_origin,peo_email) VALUES('$name','$date','$genre','$origin','$email');";
            $queryPeople = $conn -> query($sqlPeople);

            $sqlId = "SELECT * FROM people WHERE peo_email = '$email';";
            $queryId = $conn -> query($sqlId);
            $rows = $queryId -> num_rows;
            
            if($rows == 1) {

                $data = $queryId -> fetch_assoc();
                $id = $data['peo_id'];
                
                $sqlActors = "INSERT INTO actors(act_artistic_name,act_salary,act_peo_id) VALUES('$artisticName','$salary','$id');";
                $queryActors = $conn -> query($sqlActors);
                
                echo "true";
            
            } else {

                echo "false";

            }

        } else {

            echo "false";

        };

    } else {
        
        echo "false";

    }

?>