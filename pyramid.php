<?php

function printPyramid($rows)
{
    for ($i = 1; $i <= $rows; $i++) {
        // Print spaces
        for ($k = $rows; $k > $i; $k--) {
            echo "&nbsp;";
        }
        
        // Print stars
        for ($j = 1; $j <= ($i * 2) - 1; $j++) {
            echo "*";
        }
        echo "<br/>";
    }
}

// Number of rows in the pyramid
$rows = 5;
printPyramid($rows);


for($i=1)
