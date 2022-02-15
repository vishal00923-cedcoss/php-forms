<?php
    $units = $_GET["unit"];

    $bill = calculateBill($units);

    function calculateBill($units) {
        $first = 3.50;
        $second = 4.00;
        $third = 5.20;
        $fourth = 6.50;
    
        if($units <= 50) {
            $bill = $units * $first;
        } else if($units > 50 && $units <= 100) {
            $temp = 50 * $first;
            $remUnits = $units - 50;
            $bill = $temp + ($remUnits * $second);
        } else if($units > 100 && $units <= 200) {
            $temp = (50 * $first) + (100 * $second);
            $remUnits = $units - 150;
            $bill = $temp + ($remUnits * $third);
        } else {
            $temp = (50 * $first) + (100 * $second) + (100 * $third);
            $remUnits = $units - 250;
            $bill = $temp + ($remUnits * $fourth);
        }
        return $bill;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Forms</title>
</head>
<body>
    <div class="container">
        <form action="" method="get">
            Enter Bill Units : <input type="number" name="unit" />
            <br>
            <br>
            <input type="submit" name="submit" value="Submit" />

            <br>
            <br>
            <?php 
                 echo number_format($bill, 2);
             ?>
        </form>
    </div>
</body>
</html>