<!DOCTYPE html>
<html lang="en">
    <head>
       <meta charset = "UTF-8">
       <title>Home</title>
    </head>   
    <body>
        <h1>Home Page</h1>
        <?php 
        $news_item = 32;
        $category = urlencode("Sports & Hobbies");
        $url = "news.php?news_item={$news_item}&category={$category}";
        ?>
        <!-- Url parameter => ?news_item=32  get 32 news item from db-->
        <a href="<?php echo $url; ?>">Read news Item 1</a> 

    </body>
    </html>
   