<?php
    
    // Makes the connection
    include './php/connection.php';
    
    if(!$conn) {
        header("location:../index.html");
    } 
    
    if(isset($_GET['movieId'])) {
        $_SESSION['movieId'] = isset($_GET['movieId']) ? $_GET['movieId'] : 'undefined';
    };

    $movieId = $_SESSION['movieId'];

?>

<!DOCTYPE html>

<html>
    
    <head>
        <meta http-equiv="pragma" content="no-cache">
        <meta charset="utf-8"/>
        <title>Expense</title>
        
        <!-- Normalize.css -->
        <link href="./css/normalize.css" rel="stylesheet" type="text/css"/>
        
        <!-- Ordinary Css -->
        <link href="./css/index.css" rel="stylesheet" type="text/css"/>
        
        <!-- Fonts and icons -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        
    </head>
    
    <body>
        
        <div class="container">

            <ul class="cost">

                <li class="actors">
                    <a href="#">
                        <h2>Actors</h2>

                        <?php

                            $sql = "SELECT distinct SUM(act_salary) as total FROM actors INNER JOIN scenes_actors on sa_act_id = act_id INNER JOIN scenes on sa_sce_id = sce_id INNER JOIN movies on sce_mov_id = mov_id WHERE mov_id = '$movieId';";
                            $query = $conn -> query($sql);
                            $rows = $query -> num_rows;

                            if($rows > 0) {
                                
                                while($data = $query -> fetch_assoc()) {
                                    
                                    echo "<span>".$data['total']."</span>";

                                    if($data['total'] == null) {

                                        echo "<span>0</span>";

                                    }

                                }

                            } else {

                                echo "<span>0</span>";

                            }

                        ?>
                    </a>
                </li>

                <li class="staff">
                    <a href="#">
                        <h2>Staff</h2>

                        <?php

                            $sql = "SELECT distinct SUM(sta_salary) as total FROM staff INNER JOIN scenes_staff on ss_sta_id = ss_id INNER JOIN scenes on ss_sce_id = sce_id INNER JOIN movies on sce_mov_id = mov_id WHERE mov_id = $movieId;";
                            $query = $conn -> query($sql);
                            $rows = $query -> num_rows;

                            if($rows > 0) {
                                
                                while($data = $query -> fetch_assoc()) {
                                    
                                    echo "<span>".$data['total']."</span>";

                                    if($data['total'] == null) {

                                        echo "<span>0</span>";

                                    }

                                }

                            } else {

                                echo "<span>0</span>";

                            }

                        ?>
                    </a>
                </li>

                <li class="objects">
                    <a href="#">
                        <h2>Objects</h2>

                        <?php

                            $sql = "SELECT distinct *, (obj_price * obj_amount) as price FROM objects INNER JOIN objects_scenes on os_obj_id = obj_id INNER JOIN scenes on os_sce_id = sce_id INNER JOIN movies on sce_mov_id = mov_id WHERE mov_id = $movieId;";
                            $query = $conn -> query($sql);
                            $rows = $query -> num_rows;

                            if($rows > 0) {
                                
                                while($data = $query -> fetch_assoc()) {
                                    
                                    echo "<span>".$data['price']."</span>";

                                    if($data['price'] == null) {

                                        echo "<span>0</span>";

                                    }

                                } 

                            } else {

                                echo "<span>0</span>";

                            }

                        ?>
                    </a>
                </li>

                <li class="equipments">
                    <a href="#">
                        <h2>Equipments</h2>
                        
                        <?php

                            $sql = "SELECT distinct *, (equip_price * equip_amount) as price FROM equipments INNER JOIN scenes_equipments on se_equip_id = equip_id INNER JOIN scenes on se_sce_id = sce_id INNER JOIN movies on sce_mov_id = mov_id WHERE mov_id = $movieId;";
                            $query = $conn -> query($sql);
                            $rows = $query -> num_rows;

                            if($rows > 0) {
                                
                                while($data = $query -> fetch_assoc()) {
                                    
                                    echo "<span>".$data['price']."</span>";

                                    if($data['price'] == null) {

                                        echo "<span>0</span>";

                                    }

                                } 

                            } else {

                                echo "<span>0</span>";

                            }

                        ?>
                    </a>
                </li>

                <li class="budget">
                    <a href="#">
                        Total budget:<span></span>
                    </a>
                </li>
                
            </ul>

            <div class="backButton">
                <a href="../../">
                    <i class="fas fa-arrow-left"></i>
                </a>
            </div>

        </div>
        
        <script type="text/javascript" src="./js/function.js"></script>
        <script type="module" src="./js/index.js"></script>
        
    </body>
    
</html>