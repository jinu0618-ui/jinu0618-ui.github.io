<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>

<form method="post">
    숫자 입력: <input type="number" name="num">
    <input type="submit" value="계산">
</form>

<?php
if (isset($_POST['num'])) {
    $n = $_POST['num'];

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
}
?>

</body>
</html>
