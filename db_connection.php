<?php

    $server = "localhost";
    $user = "root";
    $password = "";
    $bd = "sah";
    
    $conn = mysqli_connect($server, $user, $password, $bd);


    function message($text, $type){
        echo "<div class='alert alert-$type' role='alert'>
                $text
             </div>";
    }
?>