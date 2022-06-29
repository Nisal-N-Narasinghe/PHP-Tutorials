<!DOCTYPE html>
<html lang="en">
    <head>
       <meta charset = "UTF-8">
       <title>Floats</title>
    </head>   
    <body>
        <?php
           
           $float = 6.28;

           echo '$float = '.$float; 
           echo "<br>";
        ?>
        $float += 5 : <?php $float += 5; echo $float; ?><br>
        10/3 : <?php echo 10/3;?> <br>
        <!--10/0 : <? //php echo 10/0;?> <br-->

        <h2>Functions</h2>

        Round round($float,1) : <?php echo round($float,1) ?><br>
        Round Up ceil($float) : <?php echo ceil($float) ?><br>
        Round Down floor($float) : <?php echo floor($float) ?><br>

        <h2>How to check if a number is an Integer , Float or a Number</h2>

        <?php 
          $myfloat = 7.34;
          $myinteger = 20;

          echo '$myfloat = '.$myfloat; 
          echo "<br>"; 
          echo '$myinteger = '.$myinteger; 
          echo "<br>";
          echo "<br>";
        ?>

        is_int($myfloat) : <?php echo "Is {$myfloat} an Integer ? " . is_int($myfloat); ?> <br>
        is_int($myinteger) : <?php echo "Is {$myinteger} an Integer ? " . is_int($myinteger); ?> <br>
        <br>
        is_float($myfloat) : <?php echo "Is {$myfloat} an Float ? " . is_float($myfloat); ?> <br>
        is_float($myinteger) : <?php echo "Is {$myinteger} an Float ? " . is_float($myinteger); ?> <br>
        <br>
        is_numeric($myfloat) : <?php echo "Is {$myfloat} an Number ? " . is_numeric($myfloat); ?> <br>
        is_numeric($myinteger) : <?php echo "Is {$myinteger} an Number ? " . is_numeric($myinteger); ?> <br>

    </body>
    </html>
   