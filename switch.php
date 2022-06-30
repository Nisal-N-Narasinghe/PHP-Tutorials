<!DOCTYPE html>
<html lang="en">
    <head>
       <meta charset = "UTF-8">
       <title>Switch</title>
    </head>   
    <body>

    <?php
    
    // A: Adminustrator, P: Power user, U: User, G: Guest
    $user_group_code = 'N' ;

    switch ($user_group_code) {
        case 'A':
            echo "User Group: Adminustrator <br>";
            break;
        case 'P':
            echo "User Group: Power User <br>";
            break;
        case 'U':
            echo "User Group: User <br>";
            break;
        case 'G':
            echo "User Group: Guest <br>";
            break;
        
        default:
            echo "Invalid User Group Code";
            break;
    }

    ?>

    </body>
    </html>
   