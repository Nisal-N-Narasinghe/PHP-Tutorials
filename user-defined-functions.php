<!DOCTYPE html>
<html lang="en">
    <head>
       <meta charset = "UTF-8">
       <title>User Defined Functions</title>
    </head>   
    <body>
<?php

function get_month_name($monthval = 0, $yearval = 0) {
    switch ($monthval) {
        case 1: $month_name = "Duruthu"; break;  
        case 2: $month_name = "Navam";  break;
        case 3: $month_name = "Madin";  break;
        case 4: $month_name = "Bak";  break;
        case 5: $month_name = "Vesak";  break;
        case 6: $month_name = "Poson";  break;
        case 7: $month_name = "Asela";  break;
        case 8: $month_name = "Nikini";  break;
        case 9: $month_name = "Binara";  break;
        case 10: $month_name = "Vap";  break;
        case 11: $month_name = "Il";  break;
        case 12: $month_name = "Unduvap";  break;
        default: $month_name = "Invalid Month"; break; 
    }
    return $yearval . " " . $month_name;
}

// calling function
echo get_month_name(8, 2020);
echo "<br>". get_month_name(7, 2019);
echo "<br>". get_month_name();
echo "<br>". get_month_name(2);

echo "<br>";

$first_name = "Nisal";
echo "Outside the function : {$first_name} <br>";
myfunc();

echo "After changing first_name value inside the function : {$first_name} <br>";
myfunc();
function myfunc() {
    global $first_name; //Using global for accessing variables outside the function 

    echo "Inside the function : {$first_name} <br>";
    
    $first_name = "Nirmitha";

}



?>
    </body>
    </html>
   