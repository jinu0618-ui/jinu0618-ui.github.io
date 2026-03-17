<?php
$year = isset($_GET['year']) ? intval($_GET['year']) : date("Y");
$month = isset($_GET['month']) ? intval($_GET['month']) : date("n");

if ($month < 1) {
    $month = 12;
    $year--;
}
if ($month > 12) {
    $month = 1;
    $year++;
}

$first_day = mktime(0, 0, 0, $month, 1, $year);
$days_in_month = date("t", $first_day);
$start_day = date("w", $first_day);

$prev_month = $month - 1;
$prev_year = $year;
if ($prev_month < 1) {
    $prev_month = 12;
    $prev_year--;
}

$next_month = $month + 1;
$next_year = $year;
if ($next_month > 12) {
    $next_month = 1;
    $next_year++;
}
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>PHP Calendar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 700px;
        }
        th, td {
            border: 1px solid #999;
            width: 100px;
            height: 80px;
            vertical-align: top;
            padding: 5px;
        }
        th {
            background-color: #f2f2f2;
        }
        .sun {
            color: red;
        }
        .sat {
            color: blue;
        }
        a {
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h1><?php echo $year . "년 " . $month . "월"; ?></h1>

    <a href="?year=<?php echo $prev_year; ?>&month=<?php echo $prev_month; ?>">◀ 이전달</a>
    <a href="?year=<?php echo date("Y"); ?>&month=<?php echo date("n"); ?>">오늘</a>
    <a href="?year=<?php echo $next_year; ?>&month=<?php echo $next_month; ?>">다음달 ▶</a>

    <table>
        <tr>
            <th class="sun">일</th>
            <th>월</th>
            <th>화</th>
            <th>수</th>
            <th>목</th>
            <th>금</th>
            <th class="sat">토</th>
        </tr>
        <tr>
            <?php
            for ($i = 0; $i < $start_day; $i++) {
                echo "<td></td>";
            }

            for ($day = 1; $day <= $days_in_month; $day++) {
                $current_day = ($start_day + $day - 1) % 7;

                if ($current_day == 0) {
                    echo "<td class='sun'>$day</td>";
                } elseif ($current_day == 6) {
                    echo "<td class='sat'>$day</td>";
                } else {
                    echo "<td>$day</td>";
                }

                if ($current_day == 6 && $day != $days_in_month) {
                    echo "</tr><tr>";
                }
            }

            $end_day = ($start_day + $days_in_month) % 7;
            if ($end_day != 0) {
                for ($i = $end_day; $i < 7; $i++) {
                    echo "<td></td>";
                }
            }
            ?>
        </tr>
    </table>

</body>
</html>