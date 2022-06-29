<!DOCTYPE html>
<html lang="en">
    <head>
       <meta charset = "UTF-8">
       <title>Arrays 2</title>
    </head>   
    <body>
      <?php

      $mycars = array(10, 20, 30,"Toyota", "Nissan", array("Black", "White","Blue"), "Kia", "Mazda");
      ?>
        <!-- Print all Elements in the Array -->
        <h3>Before Changing</h3>
        <pre>
            <?php print_r($mycars); ?>
        </pre>
        <br>

        <!-- Change element in Array of Array -->
        <?php $mycars[5][1] = "Red"; ?>



        <h3>After Changing</h3>
        <pre>
            <?php print_r($mycars); ?>
        </pre>
        <br><br>

    </body>
    </html>
   