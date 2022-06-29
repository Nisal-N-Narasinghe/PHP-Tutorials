<!DOCTYPE html>
<html lang="en">
    <head>
       <meta charset = "UTF-8">
       <title>Integers</title>
    </head>   
    <body>
        <?php
           
           $var1 = 30;
           $var2 = 40;

           echo '$var1 = '.$var1; 
           echo "<br>";
           echo '$var1 = '.$var2;
           echo "<br>";

        ?>

        Basic Calculation (((10+20+$var1)*$var2)/20-50) : <?php echo (((10+20+$var1)*$var2)/20-50); ?>

        <h2> Some useful integer functions</h2>

        Square Root sqrt(100) : <?php echo sqrt(100); ?><br>
        Expotential pow(2,4); : <?php echo pow(2,4); ?><br>
        Absolute Valuec abs(10-15) : <?php echo abs(10-15); ?><br>
        Modulous fmod(10,3) : <?php echo fmod(10,3,); ?><br>
        Random Number rand() : <?php echo rand(); ?><br>
        Random Number between 10 and 100 rand(10,100) : <?php echo rand(10,100); ?><br>

        <h2>Increment / Decrement</h2>

        Addition $var1 += 20 : <?php $var1 += 20; echo $var1; ?><br>
        Substraction $var1 -= 40 : <?php $var1 -= 40; echo $var1; ?><br>
        Multiplication $var1 *= 9 : <?php $var1 *= 9; echo $var1; ?><br>
        Division $var1 /= 3 : <?php $var1 /= 3; echo $var1; ?><br>

    </body>
</html>   