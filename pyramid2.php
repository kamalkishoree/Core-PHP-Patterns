<?php
$n=5;
for ($i = 0; $i < $n; $i++)
{
    
    // inner loop to handle
    // number of columns
    // values changing acc.
    // to outer loop
    for($j = 0; $j <= $i; $j++ )
    {
        
        // Printing stars
        echo "* ";
    }
    
    // ending line after
    // each row
    echo "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
for($i=0;$i<=5;$i++)
{
    for($j=5-$i;$j>=0;$j--){
        echo "*";
    }
    echo "<br>";
}
?>

