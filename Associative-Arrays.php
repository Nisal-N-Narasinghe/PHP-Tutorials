<!DOCTYPE html>
<html lang="en">
    <head>
       <meta charset = "UTF-8">
       <title>Associative Arrays</title>
    </head>   
    <body>
      <?php

        $student = array("first_name" => "Nisal", "last_name" => "Narasinghe", "age" => "22" );

        echo $student["first_name"]; echo "<br/>";
        echo $student["first_name"] . " " . $student["last_name"];
      
      ?>
        <!-- Print all Elements in the Array -->
        <h3>Before Changing</h3>
        <pre>
            <?php print_r($student); ?>
        </pre>
        <br>

        <!-- Change element in Array -->
        <?php $student["age"] = 24; ?>
        


        <h3>After Changing</h3>
        <pre>
            <?php print_r($student); ?>
        </pre>
        <br><br>

    </body>
    </html>
   