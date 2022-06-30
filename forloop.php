<!DOCTYPE html>
<html lang="en">
    <head>
       <meta charset = "UTF-8">
       <title>For Loop</title>
    </head>   
    <body>
<?php

  for ($i = 1; $i <= 12; $i++) {
    echo $i . "<br>";
}

echo "I is Now". " " . $i;
?>
<br>
<h3>Multiplicity of 12</h3>
    <?php
    
    $i = 1;

    //12 Multiplication 

    for ($i = 1; $i <= 12; $i++) {
        echo "12 x {$i} = " . 12*$i . "<br>";
    }
   
    ?>

    </body>
    </html>
   