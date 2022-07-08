<?php
    $conn = new mysqli('localhost', 'root', '', 'web_cpanel');
    if($conn->connect_error) {
        echo $error -> $conn->connect_error;   
    }
?>