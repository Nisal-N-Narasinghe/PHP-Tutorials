<!DOCTYPE html>
<html lang="en">
    <head>
       <meta charset = "UTF-8">
       <title>While Loop</title>
    </head>   
    <body>
<?php
$i = 1;
  while ($i <= 12) {
    echo $i . "<br>";
    $i++;
}

echo "I is Now". " " . $i;
?>
<br>
<h3>Multiplicity of 12</h3>
    <?php
    
    $i = 1;

    //12 Multiplication 

    while ($i <= 12) {
        echo "12 x {$i} = " . 12*$i . "<br>";
        $i++;
    }
   
    ?>

    </body>
    </html>
   