<?php
$arr = [
    11,
    54,
    67,
    3,
    2,
    78,
    99,
    34,
    100
];
$max = 0;
$min = 100;

$string = "HELLOWORD";

foreach ($arr as $k => $v) 
{
    if ($arr[$k] > $max) {
        $max = $arr[$k];
    }
}
echo $max;

foreach ($arr as $k => $v) 
{
    if ($arr[$k] < $min) {
        $min = $arr[$k];
    }
}
echo $min;

$rev = [];


for ($i = strlen($string) - 1; $i >= 0; $i --) 
{
    if($string[$i] =='O')
    {
        $rev[] = 'k';
    }
    $rev[] = $string[$i];
}

echo implode('', $rev);

?>