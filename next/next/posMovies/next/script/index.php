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
        <title>Script</title>
        
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

            <div class="searchContainer">

                <form action="javascript:void(0);">
                    <input id="search" type="text" placeholder="Search"/>
                </form>

                <ul id="phpContainer">
                    <!--
                    <li><a href="#"><span>asas</span></a></li>
                    <li><a href="#"><span>adsda</span></a></li>
                    <li><a href="#"><span>asdfds</span></a></li>
                    -->
                </ul>

            </div>

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