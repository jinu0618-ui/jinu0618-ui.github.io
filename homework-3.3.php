<?php
$n = 10;

$f[1] = 1;
$f[2] = 1;

echo "i  f(i)  f(i+1)/f(i)<br>";

for ($i = 3; $i <= $n; $i++) {
    $f[$i] = $f[$i-1] + $f[$i-2];
}

for ($i = 1; $i <= $n; $i++) {
    if ($i == 1 || $i == 2) {
        echo "$i  {$f[$i]}  - <br>";
    } else {
        $ratio = $f[$i] / $f[$i-1];
        echo "$i  {$f[$i]}  " . number_format($ratio, 6) . "<br>";
    }
}
?>