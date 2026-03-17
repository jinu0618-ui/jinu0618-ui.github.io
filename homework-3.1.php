<?php
$n = 30;
$sum = 0;
$prod = 1;

for ($i = 1; $i <= $n; $i++) {
    echo $i . " ";
    $sum += $i;
    $prod *= $i;
}

echo "<br>";
echo "합: " . $sum . "<br>";
echo "곱(팩토리얼): " . $prod;
?>