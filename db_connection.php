<?php

    $server = "localhost";
    $user = "root";
    $password = "";
    $bd = "sah";
    
    $conn = mysqli_connect($server, $user, $password, $bd);

    function formatDate($date){
        $sliced = explode('-', $date);
        $fortatedDate = $sliced[2] . "/" . $sliced[1] . "/" . $sliced[0];
        return $fortatedDate;
    }
?>