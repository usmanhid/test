<?php


$ind  = 3;
$b1 = 0;
$b2 = 1;
$arr2= [];

for ($i = $b2; $i <= $ind; $i++)
{
    // if ($i < 2)
    //     $arr[] = '<b>'.$i.'</b>';
        
    $num = $b1 + $b2;
    $b2 = $b1;
    $b1 = $num;
    
    $arr2[] = '<b>'.$num.'</b>';
}

echo implode(', ', $arr2);

echo "<br>";

$ind  = 5;
$b1 = 0;
$b2 = 3;
$arr2= [];

for ($i = $b2; $i <= $ind; $i++)
{
    // if ($i < 2)
    //     $arr[] = '<b>'.$i.'</b>';
        
    $num = $b1 + $b2;
    $b2 = $b1;
    $b1 = $num;
    
    $arr2[] = '<b>'.$num.'</b>';
}

echo implode(', ', $arr2);

echo "<br>";



$n  = 2;
$a1 = 1;
$a2 = 0;
$arr= [];

for ($i = $a2; $i <= $n; $i++)
{
    if ($i < 2)
        $arr[] = '<b>'.$i.'</b>';
        
    $num = $a1 + $a2;
    $a2 = $a1;
    $a1 = $num;
    
    $arr[] = '<b>'.$num.'</b>';
}

echo implode(', ', $arr);
echo "<br>";


$n  = 4;
$a1 = 5;
$a2 = 0;
$arr2= [];

for ($i = $a2; $i <= $n; $i++)
{
    if ($i < 2)
        $arr[] = '<b>'.$i.'</b>';
        
    $num = $a1 + $a2;
    $a2 = $a1;
    $a1 = $num;
    
    $arr2[] = '<b>'.$num.'</b>';
}

echo implode(', ', $arr2);

echo "<br>";




?>