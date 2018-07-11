<?php
    
    // Makes the connection
    include './php/connection.php';
    
    if(!$conn) {
        header("location:../index.html");
    } else {
        $movieId = $_SESSION['movieId'];
    };

?>

<!DOCTYPE html>

<html>
    
    <head>
        <meta http-equiv="pragma" content="no-cache">
        <meta charset="utf-8"/>
        <title>Insert</title>
        
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

        
        <?php

            $id = $_SESSION['id'];
            $sql = "SELECT * FROM scenes, movies, users WHERE mov_user_id = '".$id."' AND sce_mov_id = '".$movieId."';";
            $query = $conn -> query($sql);
            $rows = $query -> num_rows;
            
        ?>


        <div class="container">

            <ul>
                <li class="navScenes <?php if(!($rows > 0)) { echo "alternativeGrid"; }; ?>">
                    <a href="./next/scenes/index.php">
                        <i class="fas fa-film"></i>
                        <span>Scenes</span>
                    </a>
                </li>

                <?php if($rows > 0) { ?>

                    <li class="navShots">
                        <a href="./next/shots/index.php">
                            <i class="fas fa-video"></i>
                            <span>Shots</span>
                        </a>
                    </li>

                    <li class="navActors">
                        <a href="./next/actors/index.php">
                            <i class="fas fa-user"></i>
                            <span>Actors</span>
                        </a>
                    </li>

                    <li class="navStaff">
                        <a href="./next/staff/index.php">
                            <i class="fas fa-users"></i>
                            <span>Staff</span>
                        </a>
                    </li>

                    <li class="navObjects">
                        <a href="./next/objects/index.php">
                            <i class="fas fa-box-open"></i>
                            <span>Objects</span>
                        </a>
                    </li>

                    <li class="navEquipments">
                        <a href="./next/equipments/index.php">
                            <i class="fas fa-wrench"></i>
                            <span>Equipments</span>
                        </a>
                    </li>

                    <li class="join navJoin">
                        <a href="./next/join/index.php">
                            <i class="fas fa-clipboard-list"></i>
                            <span>Join</span>
                        </a>
                    </li>

                <?php }; //End of the 'if' clause ?>  

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