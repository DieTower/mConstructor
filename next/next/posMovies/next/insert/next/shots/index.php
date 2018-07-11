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

            <form action="javascript:void(0);" method="GET">
                <div class="part1">
                    <input name="shotNumber" type="number" placeholder="Scene number" id="sceneNumber"/>
                </div>

                <div class="part2">
                    <div class="start">
                        <label for="timeStart">Start</label>
                        <input name="timeStart" type="time" value="00:00:00" id="timeStart"/>
                    </div>

                    <div class="end">
                        <label for="timeEnd">End</label>
                        <input name="timeEnd" type="time" value="00:00:00" id="timeEnd"/>
                    </div>

                    <div class="scene">
                        <label for="scene">Scene</label>
                        <select name="sceneId" id="scene">
                            <?php
                                $id = $_SESSION['id'];
                                $sql = "SELECT * FROM scenes, movies, users WHERE mov_user_id = $id AND sce_mov_id = '$movieId';";
                                $query = $conn -> query($sql);
                                $rows = $query -> num_rows;

                                if($rows > 0) {
                                    while($data = $query -> fetch_assoc()) {
                                        echo "<option value='".$data['sce_id']."'>".$data['sce_name']."</option>";
                                    }
                                }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="part3">
                    <textarea name="description" placeholder="description" id="description"></textarea>
                </div>

                <button id="save"><span><i class="fas fa-save"></i></span></button>
            </form>

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