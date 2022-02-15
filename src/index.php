<?php
    if (isset($_POST["submit"])) {
       $length = $_POST["length"];
       $width = $_POST["width"];
    }

    $area = calculateArea($length, $width);
    $peremeter = calculatePerimeter($length, $width);

    function calculateArea($length, $width) {
        return $length * $width;
    }

    function calculatePerimeter($length, $width) {
        return 2 * ($length + $width);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Forms</title>
</head>
<body>
    <h1>Calculate Area & Perimeter</h1>
    <div>
        <form action="" method="post">
            Length Of Rectangle<input type="text" name="length" />
            <br>
            <br>
            Width Of Rectangle <input type="text" name="width" />
            <br>
            <br>
            <input type="submit" name="submit" value="Calculate Area & Perimeter" id="btn" />
        </form>

        <?php 
             echo "<p> Area is $area sq. mtr. </p>";
             echo "<p> Peremeter is $peremeter mtr. </p>";
        ?>
    </div>
</body>
</html>