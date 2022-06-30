<!DOCTYPE html>
<html lang="en">
    <head>
       <meta charset = "UTF-8">
       <title>Foreach Loop </title>
    </head>   
    <body>
<?php

    $job_categories = array("Accounting", "Business", "IT", "Marketing", "Sales");

    foreach ($job_categories as $job_catagory) {
        echo $job_catagory . "<br/>"; 
    }
?>
<br>

<?php
    $student = array("First Name" => "Nisal" , "Last Name"=> "Narasinghe" , "age" => "22", "grade" => 13);


    foreach ($student as $lable => $mystudent) {
        echo $lable ." : ". $mystudent . "<br/>"; 
    }
?>


    </body>
    </html>
   