<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>

<form method="post">
    숫자들 입력 :<br>
    <input type="text" name="nums" style="width:300px;">
    <input type="submit" value="계산">
</form>

<?php
if (isset($_POST['nums'])) {

    $input = $_POST['nums'];
    $arr = explode(" ", $input);

   
    $arr = array_map('intval', $arr);

    $max = $arr[0];


    foreach ($arr as $num) {
        echo $num . " ";
        if ($max < $num) {
            $max = $num;
        }
    }

    echo "<br>최댓값: " . $max . "<br>";

    sort($arr);

    echo "올림차순 정렬: ";
    foreach ($arr as $num) {
        echo $num . " ";
    }
}
?>

</body>
</html>
