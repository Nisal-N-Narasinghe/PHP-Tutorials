<?php
$first = "my name is Nisal. ";
$second = "my age is 22.";

//add two variables
$sentence = $first;
$sentence .= $second;

echo $sentence;
?>

<br>
All simple: <?php echo strtolower($sentence); ?><br>
All capital: <?php echo strtoupper($sentence); ?><br>
First letter capital in first word: <?php echo ucfirst($sentence); ?><br>
First letter capital in all words: <?php echo ucwords($sentence); ?><br>
Number of Characters(include spaces and ., etc): <?php echo strlen($sentence); ?><br>
Search for a string or Character: <?php echo strstr($sentence, "Nisal"); ?><br>
Replacing words: <?php echo str_replace("22", "twenty two", $sentence); ?><br>
