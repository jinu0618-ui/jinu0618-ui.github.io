<?php
$n = 30;
$arr = [];
$max = 0;

for ($i = 0; $i < $n; $i++) {
    $arr[$i] = rand(1, 100);
    echo $arr[$i] . " ";

    if ($max < $arr[$i]) {
        $max = $arr[$i];
    }
}

echo "<br>최댓값: " . $max . "<br>";

sort($arr);

echo "올림차순 정렬: ";
foreach ($arr as $num) {
    echo $num . " ";
}
?>