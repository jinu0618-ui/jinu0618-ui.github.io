<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>피보나치 수열</title>
</head>
<body>

<form method="post">
    몇 번째 항까지 출력할지 입력:
    <input type="number" name="num" min="2" required>
    <input type="submit" value="확인">
</form>

<?php
if (isset($_POST['num'])) {
    $n = intval($_POST['num']);

    if ($n < 2) {
        echo "2 이상의 숫자를 입력하세요.";
    } else {
        $f[1] = 1;
        $f[2] = 1;

        echo "i &nbsp; f(i) &nbsp; f(i+1)/f(i)<br>";

        for ($i = 3; $i <= $n; $i++) {
            $f[$i] = $f[$i-1] + $f[$i-2];
        }

        for ($i = 1; $i <= $n; $i++) {
            if ($i == 1 || $i == 2) {
                echo "$i {$f[$i]} - <br>";
            } else {
                $ratio = $f[$i] / $f[$i-1];
                echo "$i {$f[$i]} " . number_format($ratio, 6) . "<br>";
            }
        }
    }
}
?>

</body>
</html>
