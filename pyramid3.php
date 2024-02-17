
<?php
// Php code to demonstrate
// star pattern

// Function to demonstrate
// printing pattern
$rows = 5;
for ($i = 1; $i <= $rows; $i++) {
    // Print spaces
    
    // Print stars
    for ($j = 1; $j <= $i ; $j++) {
        echo "*";
    }
    echo "<br/>";
}

echo "<br/>";
echo "<br/>";
echo "<br/>";

for ($i = 1; $i <= $rows; $i++) {
    // Print spaces
    
    // Print stars
    for ($j = $rows; $j >=$i ; $j--) {
        echo "*";
    }
    echo "<br/>";
}



echo "<br/>";
echo "<br/>";
echo "<br/>";

for ($i = 1; $i <= $rows; $i++) {
    // Print spaces
    
    // Print stars
    for ($j = 1; $j <=$rows ; $j++) {
        echo "*";
    }
    echo "<br/>";
}

echo "<br/>";
echo "<br/>";
echo "<br/>";


for ($i = 1; $i <= $rows; $i++) {
    // Print spaces
    
    // Print stars
    for ($j = $i; $j <=$rows ; $j++) {
        echo $i;
    }
    echo "<br/>";
}

echo "<br/>";
echo "<br/>";
echo "<br/>";
for ($i = 1; $i <= $rows; $i++) {
    // Print spaces
    
    // Print stars
    for ($j = $rows; $j>= $i ; $j--) {
        echo $i;
    }
    echo "<br/>";
}


echo "<br/>";
echo "<br/>";
echo "<br/>";
for ($i = 1; $i <= $rows; $i++) {
    // Print spaces
    
    // Print stars
    for ($j = 1; $j <= $i ; $j++) {
        echo $i;
    }
    echo "<br/>";
}

echo "<br/>";
echo "<br/>";
echo "<br/>";   


$n = 1; /*Initializing starting number*/
for ($i = 0; $i < 5; $i++)
{
    for ($j = 0; $j <= $i; $j++ )
    {
        echo $n." ";
        $n = $n + 1;
    }
    echo "<br/>";
}
?>


?>