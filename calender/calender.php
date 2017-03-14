<?php

$t = '2015-08';
$thisMonth = new DateTime($t);
$yearMonth = $thisMonth->format('F,Y');

$tail  = '';//前月末日
$lastDayOfPrevMonth = new Datetime('last day of ' . $yearMonth . ' -1 month');
while($lastDayOfPrevMonth->format('w')<6){
    $tail = sprintf('<td class="gray">%d</td>', $lastDayOfPrevMonth->format('d')).
    $tail;
    $lastDayOfPrevMonth->sub(new DateInterval('P1D'));
    
}

$body = '';
$period = new DatePeriod(
    new DateTime('first day of ' . $yearMonth),
    new DateInterval('P1D'),
    new DateTime('first day of' .$yearMonth . '+1 month')
    );
    foreach ($period as $day){
        if($day->format('w') % 7 === 0){$body .= '</tr><tr>'; }
        $body .= sprintf('<td class="youbi_%d">%d</td>',$day->format('w'),
        $day->format('d'));
    }
    
    
    $head = '';
    $firstDayOfNextMonth = new DateTime('first day of' .$yearMonth . '+1 month');
    while($firstDayOfNextMonth->format('w')>0){
        $head .= sprintf('<td class="gray">%d</td>', $firstDayOfNextMonth->format('d'));
        $firstDayOfNextMonth->add(new DateInterval('P1D'));
        
    }
    
    $html = '<tr>' . $tail . $body .$head . '</tr>';

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
                <th><a href = "">&laquo;</a></th>
                <th colspan ="5"><?php echo $yearMonth;?></th>
                <th><a href = "">&raquo;</a></th>
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
            <?php echo $html ;?>
        </tbody>
        <tfoot>
            <tr>
                <th colspan = "7"><a href="">Today</a></th>
            </tr>
        </tfoot>
    </table>
</body>
</html>