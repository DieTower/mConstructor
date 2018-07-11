<?php
    
    include 'connection.php';

    $email = isset($_GET['email']) ? $_GET['email'] : null;
    $user = isset($_GET['user']) ? $_GET['user'] : null;
    $pass = isset($_GET['pass']) ? $_GET['pass'] : null;
    
    
    $sqlCheckEmail = "SELECT * FROM people WHERE peo_email = '".$email."';";
    $queryCheckEmail = $conn -> query($sqlCheckEmail);
    $checkEmailRows = $queryCheckEmail -> num_rows;
    

    if(($email != null && $user != null && $pass != null) && ($checkEmailRows == 0)) {
        
        $sqlPeople = "INSERT INTO people(peo_name,peo_email) VALUES('".$user."','".$email."');";
        $queryPeople = $conn -> query($sqlPeople);
        
        $sqlId = "SELECT peo_id FROM people WHERE peo_email = '".$email."';";
        $queryId = $conn -> query($sqlId);
        $queryIdRows = $queryId -> num_rows;
        
        if($queryIdRows > 0) {
        
            $id = $queryId -> fetch_assoc();

            $sqlUsers = "INSERT INTO users(user_name,user_password,user_peo_id) VALUES('".$user."','".$pass."','".$id['peo_id']."');";
            $queryUsers = $conn -> query($sqlUsers);
            
            echo "true";
            
        } else {
            
            echo "false";
            
        };
        
    } else {
        
        echo "false";
        
    }
    
?>