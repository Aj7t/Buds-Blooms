<?php
    $conn = mysqli_connect("localhost", "root", "", "wt_project") or die(mysqli_error($conn));
    
    if(!isset($_SESSION)){
        session_start();
    }
?>