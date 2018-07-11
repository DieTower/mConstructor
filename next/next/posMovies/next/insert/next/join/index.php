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
        <title>Actors</title>
        
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

            <ul>
                <li>
                    <h2>Staff to the Scene</h2>

                    <form action="javascript:void(0);">
                        <div class="part1">
                            <input name="functionName" id="functionName" type="text" placeholder="Function"/>

                            <select name="staffId" id="staffId">
                                <?php
                                    $sqlStaff = "SELECT * FROM staff, people WHERE sta_peo_id = peo_id;";
                                    $queryStaff = $conn -> query($sqlStaff);
                                    $queryRows = $queryStaff -> num_rows;

                                    if($queryRows > 0) {

                                        while($data = $queryStaff -> fetch_assoc()) {
                                            echo "<option value=".$data['sta_id'].">".$data['peo_name']."</option>";
                                        }

                                    }
                                ?>
                            </select>

                            <select name="sceneId" id="sceneStaffId">
                                <?php
                                    $sqlScene = "SELECT * FROM scenes, movies WHERE sce_mov_id = $movieId;";
                                    $queryScene = $conn -> query($sqlScene);
                                    $queryRows = $queryScene -> num_rows;

                                    if($queryRows > 0) {

                                        while($data = $queryScene -> fetch_assoc()) {
                                            echo "<option value=".$data['sce_id'].">".$data['sce_name']."</option>";
                                        }

                                    }
                                ?>
                            </select>
                        </div>

                        <textarea name="description" id="sceneStaffDescription" placeholder="Description"></textarea>

                        <button id="staffButton"><i class="fas fa-save"></i></button>
                    </form>
                </li>

                <li>
                    <h2>Equipments to the Scene</h2>

                    <form action="javascript:void(0);">
                        <div class="part1">
                            <input id="sceneDate" type="date" value="1998-05-10"/>

                            <select id="modelId">
                                <?php
                                    $sqlEquipments = "SELECT * FROM equipments;";
                                    $queryEquipments = $conn -> query($sqlEquipments);
                                    $queryRows = $queryEquipments -> num_rows;

                                    if($queryRows > 0) {

                                        while($data = $queryEquipments -> fetch_assoc()) {
                                            echo "<option value=".$data['equip_id'].">".$data['equip_model']."</option>";
                                        }

                                    }
                                ?>
                            </select>
                            
                            <select id="sceneEquipmentsId">
                                <?php
                                    $sqlScene = "SELECT * FROM scenes, movies WHERE sce_mov_id = $movieId;";
                                    $queryScene = $conn -> query($sqlScene);
                                    $queryRows = $queryScene -> num_rows;

                                    if($queryRows > 0) {

                                        while($data = $queryScene -> fetch_assoc()) {
                                            echo "<option value=".$data['sce_id'].">".$data['sce_name']."</option>";
                                        }

                                    }
                                ?>
                            </select>
                        </div>

                        <textarea id="sceneEquipmentsDescription" placeholder="Description"></textarea>

                        <button id="equipmentsButton"><i class="fas fa-save"></i></button>
                    </form>
                </li>

                <li>
                    <h2>Actors to the Scene</h2>

                    <form action="javascript:void(0);">
                        <div class="part1">
                            <select id="actorsId">
                                <?php
                                    $sqlActors = "SELECT * FROM people, actors WHERE act_peo_id = peo_id;";
                                    $queryActors = $conn -> query($sqlActors);
                                    $queryRows = $queryActors -> num_rows;

                                    if($queryRows > 0) {

                                        while($data = $queryActors -> fetch_assoc()) {
                                            echo "<option value=".$data['act_id'].">".$data['peo_name']."</option>";
                                        }

                                    }
                                ?>
                            </select>
                            
                            <select id="sceneActorsId">
                                <?php
                                    $sqlScene = "SELECT * FROM scenes, movies WHERE sce_mov_id = $movieId;";
                                    $queryScene = $conn -> query($sqlScene);
                                    $queryRows = $queryScene -> num_rows;

                                    if($queryRows > 0) {

                                        while($data = $queryScene -> fetch_assoc()) {
                                            echo "<option value=".$data['sce_id'].">".$data['sce_name']."</option>";
                                        }

                                    }
                                ?>
                            </select>
                        </div>

                        <textarea id="sceneActorsDescription" placeholder="Description"></textarea>

                        <button id="actorsButton"><i class="fas fa-save"></i></button>
                    </form>
                </li>

                <li class="objectsToTheScene">
                    <h2>Objects to the Scene</h2>

                    <form action="javascript:void(0);">
                        <div class="part1">
                            <select id="objectsId">
                                <?php
                                    $sqlObjects = "SELECT * FROM objects;";
                                    $queryObjects = $conn -> query($sqlObjects);
                                    $queryRows = $queryObjects -> num_rows;

                                    if($queryRows > 0) {

                                        while($data = $queryObjects -> fetch_assoc()) {
                                            echo "<option value=".$data['obj_id'].">".$data['obj_name']."</option>";
                                        }

                                    }
                                ?>
                            </select>
                            
                            <select id="scenesObjectsId">
                                <?php
                                    $sqlScene = "SELECT * FROM scenes, movies WHERE sce_mov_id = $movieId;";
                                    $queryScene = $conn -> query($sqlScene);
                                    $queryRows = $queryScene -> num_rows;

                                    if($queryRows > 0) {

                                        while($data = $queryScene -> fetch_assoc()) {
                                            echo "<option value=".$data['sce_id'].">".$data['sce_name']."</option>";
                                        }

                                    }
                                ?>
                            </select>
                        </div>

                        <button id="objectsButton"><i class="fas fa-save"></i></button>
                    </form>
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