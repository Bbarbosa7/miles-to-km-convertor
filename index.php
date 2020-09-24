<?php

    $total = 0;

    function converter ($kilometers)
    {
        global $total;

        $total += $kilometers;
        return  $kilometers * 0.6;
    }

    echo "Percorreu " . converter(100) . " milhas \n <br>"; 
    echo "Percorreu " . converter(200) . " milhas \n <br>";
    echo "Percorreu no total " . converter($total) . " kilometros \n";
?>