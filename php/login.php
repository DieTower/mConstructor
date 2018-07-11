<?php
    
    session_start();

    include './connection.php';
    
    $user = isset($_GET['user']) ? $_GET['user'] : null;
    $pass = isset($_GET['pass']) ? $_GET['pass'] : null;
    
    $query = $conn -> query("SELECT * FROM people, users WHERE user_peo_id = peo_id AND user_password = '" . $pass . "' AND (peo_email = '" . $user . "' OR user_name = '" . $user . "');");
    
    $data = $query -> fetch_assoc();

    $queryRows = $query -> num_rows;
    
    if(($user != null && $queryRows > 0)) {
        
        $_SESSION['id'] = $data['user_id'];
        $_SESSION['email'] = $data['peo_email'];
        
        echo "true";
    
    } else {
        
        echo "false";
    
    }

?>