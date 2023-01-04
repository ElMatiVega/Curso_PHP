<?php

    echo "<br/>"."For."."<br/>";
    for($i=0;$i<5;$i++){
        echo "cicloFor ".$i."<br/>";
    }

   echo "<br/>"."Do While."."<br/>";

    $numDoWhile=0;

    do{
        echo "num_DoWhile".$numDoWhile."<br/>";;
        $numDoWhile++;
        
    }while( $numDoWhile<5);

    echo "<br/>"."While."."<br/>";
    $numWhile=0;
    while ($numWhile <= 5) {
        echo "num_While ".$numWhile."<br/>";
        $numWhile++;
    }
    
?>