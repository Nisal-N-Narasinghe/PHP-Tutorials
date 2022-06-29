<!DOCTYPE html>
<html lang="en">
    <head>
       <meta charset = "UTF-8">
       <title>Booleans</title>
    </head>   
    <body>
        <?php
        
            $var1 = true;
            $var2 = false;
            $var3 = "Nisal";
        
        ?>

        <?php echo "Variable 1 : " . $var1 ?> <br>
        <?php echo "Variable 2 : " . $var2 ?> <br>
        
        
        <?php echo "IS Variable 1 Boolean ? : " . is_bool($var1); ?> <br>
        <?php echo "IS Variable 3 Boolean ? : " . is_bool($var3); ?> <br>

        <!-- Check If varible is false -->
        <?php 
        if ($var2 == false) {
            echo "Variable 2 is False" ;
        }
        ?>



    </body>
    </html>
   