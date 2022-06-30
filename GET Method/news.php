<!DOCTYPE html>
<html lang="en">
    <head>
       <meta charset = "UTF-8">
       <title>Home</title>
    </head>   
    <body>
        <h1>News Page</h1>

        <a href="home.php">Back to home</a>
        <pre>
            <?php 
                print_r($_GET); //Getting values from URL Parameters
        
            ?>
        </pre>
            <?php 
               $news = $_GET['news_item'];
               $hobby = $_GET['category'];
        
            ?>
            <h4>Category: <?php echo $hobby; ?></h4>
            <h4>News Item: <?php echo $news; ?></h4>

    </body>
    </html>
   