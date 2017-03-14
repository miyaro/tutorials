<?php

require 'Calender.php';

function h($s) {
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

$cal = new \calender\Calender();

?>
<!DOCTYPE html>
<html lang ="ja">
<head>
    <meta charset = "utf-8">
    <title>Calender</title>
    <link rel ="stylesheet" href ="styles.css">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th><a href = "/practice/tutorials/calender/?t=<?php echo h($cal->prev); ?>"></a>&laquo;</a></th>
                <th colspan ="5"><?php echo h($cal->yearMonth);?></th>
                <th><a href = "/practice/tutorials/calender/?t=<?php echo h($cal->next); ?>">&raquo;</a></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Sun</td>
                <td>Mon</td>
                <td>Tue</td>
                <td>Wed</td>
                <td>Thu</td>
                <td>Fri</td>
                <td>Sat</td>
            </tr>
            <?php $cal->show(); ;?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan = "7"><a href="/practice/tutorials/calender/">Today</a></th>
            </tr>
        </tfoot>
    </table>
</body>
</html>