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

            <form action="javascript:void(0);">
                <div class="part1">
                    <input name="name" type="text" placeholder="Name" id="name"/>
                    <input name="artisticName" type="text" placeholder="Artistic name" id="artisticName"/>
                </div>

                <div class="part2">
                    <input name="date" type="date" value="1998-03-08" id="date"/>

                    <select name="genre" id="genre">
                        <option value="M" select>Male</option>
                        <option value="F">Female</option>
                    </select>

                    <input name="origin" type="text" placeholder="Origin" id="origin"/>
                </div>

                <div class="part3">
                    <input name="email" type="email" placeholder="Email" id="email"/>
                    <input name="salary" type="number" placeholder="Salary" id="salary"/>
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