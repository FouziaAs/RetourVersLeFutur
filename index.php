<?php

$presentTime = new DateTime();

$destinationTime = new DateTime('feb 11 2022 17:30');

$presentTimeFormat = $presentTime->format('M d Y H i s');
$destinationTimeFormat = $destinationTime->format('M d Y H i s');

$interval = $destinationTime->diff($presentTime);
$intervalFormat = $interval->format('%Y Years %M months %D days %H hours %I minutes');

$presentTimeOk = explode(" ", $presentTimeFormat);
$destinationTimeOk = explode(" ", $destinationTimeFormat);

$difference = date_diff($presentTime, $destinationTime);
$difference->format('%R%a days');

echo $difference->format('%R%a days');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Month</th>
                <th>Day</th>
                <th>Year</th>
                <th></th>
                <th>Hour</th>
                <th>Min</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $presentTimeOk[0]; ?></td>
                <td><?= $presentTimeOk[1]; ?></td>
                <td><?= $presentTimeOk[2]; ?></td>
                <td><?= $presentTimeOk[3]; ?></td>
                <td><?= $presentTimeOk[4]; ?></td>
                <td><?= $presentTimeOk[5]; ?></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="6">Present Time</td>
            </tr>
        </tfoot>
    </table>
    <table>
        <thead>
            <tr>
                <th>Month</th>
                <th>Day</th>
                <th>Year</th>
                <th></th>
                <th>Hour</th>
                <th>Min</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $destinationTimeOk[0]; ?></td>
                <td><?= $destinationTimeOk[1]; ?></td>
                <td><?= $destinationTimeOk[2]; ?></td>
                <td><?= $destinationTimeOk[3]; ?></td>
                <td><?= $destinationTimeOk[4]; ?></td>
                <td><?= $destinationTimeOk[5]; ?></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="6">Destination Time</td>
            </tr>
        </tfoot>
    </table>
    <p>Time befor the end of the formation: <?= $intervalFormat; ?></p><br>

</body>

</html>