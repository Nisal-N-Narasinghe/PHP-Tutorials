<!DOCTYPE html>
<html lang="en">
    <head>
       <meta charset = "UTF-8">
       <title>If Statements</title>
    </head>   
    <body>

    <?php
    
    $avg_score = 40;
    echo "Score : " . $avg_score;
    echo "<br>";

    if ($avg_score >= 70) {
        echo "Grade A";
    } 
    else if ($avg_score >= 50) {
        echo "Grade B";
    } 
    else if ($avg_score >= 40) {
        echo "Grade C";
    }
    else {
        echo "Grade F";
    }
    
    ?>

    </body>
    </html>
   