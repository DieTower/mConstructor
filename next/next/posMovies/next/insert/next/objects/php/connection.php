<?php
    
    // Beginning the session's
    session_start();
    
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $bd = 'mconstructor';
    
    $conn = new mysqli($host,$user,$pass,$bd);
    
?>