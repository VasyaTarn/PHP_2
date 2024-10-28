<?php
function generateRandomArray($count_elem, $min_val, $max_val) {
    if ($min_val > $max_val) {
        list($min_val, $max_val) = [$max_val, $min_val];
    }

    $randomArray = [];

    for ($i = 0; $i < $count_elem; $i++) {
        $randomArray[] = rand($min_val, $max_val);
    }

    return $randomArray;
}

$count_elem = 10;
$min_val = 5;
$max_val = 20;

$generatedArray = generateRandomArray($count_elem, $min_val, $max_val);
echo implode(", ", $generatedArray);

echo "<hr>";
?>

<?php
function power($base, $exponent) 
{
    return pow($base, $exponent);
}

$base = 3;
$exponent = 4;
$result = power($base, $exponent);
echo "Результат: $base^$exponent = $result";
echo "<hr>";
?>

<?php
function swap(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

$num1 = 5;
$num2 = 10;

echo "Перед обменом:<br> num1 = $num1<br> num2 = $num2<br><br>";
swap($num1, $num2);
echo "После обмена:<br> num1 = $num1<br> num2 = $num2<br>";
echo "<hr>";
?>