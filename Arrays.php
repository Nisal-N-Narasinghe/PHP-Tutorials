<!DOCTYPE html>
<html lang="en">
    <head>
       <meta charset = "UTF-8">
       <title>Arrays</title>
    </head>   
    <body>
      <?php

      $mycars = array("Toyota", "Nissan", "Kia", "Mazda");

      echo $mycars[3];

      echo "<br>"
      ?>
        <br>
        <!-- Print all Elements in the Array -->
        <h3>Before Changing</h3>
        <pre>
            <?php print_r($mycars); ?>
        </pre>
        <br>

        <!-- Add 4th element to Array -->
        <?php $mycars[4] = "Suzuki"; ?>

        <!-- Add New element to Array at the end -->
        <?php $mycars[] = "Mitsubishi"; ?>
        
        <!-- Change an element in array -->
        <?php $mycars[3] = "Honda"; ?>



        <h3>After Changing</h3>
        <pre>
            <?php print_r($mycars); ?>
        </pre>
        <br><br>

    </body>
    </html>
   