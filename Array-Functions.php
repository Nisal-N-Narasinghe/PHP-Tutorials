<!DOCTYPE html>
<html lang="en">
    <head>
       <meta charset = "UTF-8">
       <title>Array Functions</title>
    </head>   
    <body>
        <?php

        $mynumbers = array(13, 17, 19, 23, 29, 11, 26);
        ?>
            <!-- Print all Elements in the Array -->
            <h3>Before Changing</h3>
            <pre>
                <?php print_r($mynumbers); ?>
            </pre>
            <br>

        Mximum value max($mynumbers) : <?php echo max($mynumbers); ?> <br>

        Minimum  value min($mynumbers) : <?php echo min($mynumbers); ?> <br>

        Count Items in the Array Count($mynumbers) : <?php echo Count($mynumbers); ?>


            <h3>Sorting (Accending Order)</h3>
        Accending Order Sort($mynumbers) : <?php Sort($mynumbers); ?> <br>    
            <pre>
                <?php print_r($mynumbers); ?>
            </pre>


            <h3>Sorting (Decending Order)</h3>
        Decending Order Sort($mynumbers) : <?php rsort($mynumbers); ?> <br>
            <pre>
                <?php print_r($mynumbers); ?>
            </pre>


            <h3>Store Array Elements to string (Implode)</h3> 
        $string = implode(" | ", $mynumbers) : 
            <?php 
                $string = implode(" | ", $mynumbers); 
                echo $string;
            ?>


            <h3>Convert set of strings to array (Explode)</h3>   
        $newarray = explode(" | ", $string) : 
            <?php 
                $newarray = explode(" | ", $string); 
            ?> 
            <pre>
                <?php print_r($newarray); ?>
            </pre>  
            
            <h3>Searches through the array </h3> 
        Searche in_array(23, $mynumbers) : <?php echo in_array(23, $mynumbers); ?> <br>
        Searche in_array(15, $mynumbers) : <?php echo in_array(15, $mynumbers); ?>




    </body>
    </html>
   