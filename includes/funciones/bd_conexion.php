<?php
    $conn = new mysqli('localhost', 'root', '', 'web_cpanel');
    $conn->set_charset("utf8");
    if($conn->connect_error) {
        echo $error -> $conn->connect_error;   
    }
?>