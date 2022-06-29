<!DOCTYPE html>
<html lang="en">
    <head>
       <meta charset = "UTF-8">
       <title>Operators</title>
    </head>   
    <body>

    <?php
    
    $sub1 = 80;
    $sub2 = 40;

    echo "Subject 1 marks : " . $sub1;
    echo "<br>";
    echo "Subject 2 marks : " . $sub2;
    echo "<br>";

    if (($sub1 > 50) && ($sub2 >50)) {
        echo "You are Passed the exam";
    } 
    else if (($sub1 > 50) || ($sub2 >50)) {
        echo "You have Passed 1 Subject";
    } 
    else {
        echo "You need to pass both subjects to pass the exam";
    }
    ?>
    <br>

    <h3>NOT OPERATOR !</h3>
    <?php
    $username = "Nisal";
    if (isset($username)) {
        echo "Your user name is " . $username;
    }
    else if (! isset($username)) {
        echo "Enter User name ";
    }
    
    ?>

    </body>
    </html>
   