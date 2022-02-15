<?php
    if (isset($_POST["submit"])) {
       $hours = $_POST["hour"];
       $check = $_POST["hours"];
    }

    $res = 0;

    if ($check == "mins") {
        $res = $hours * 60;
    } else {
        $res = $hours * 3600;
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
    <h1>Time Conversion</h1>
    <div>
        <form action="" method="post">
            <input type="text" name="hour" id="input-box" />
            <br>
            <input type="radio" name="hours" value="mins" />hours to mins<br>
            <input type="radio" name="hours" value="secs" />hours to seconds<br>
            <?php
                if ($check == "mins") {
                    echo "<p> $hours hours = $res mins</p>";
                } else {
                    echo "<p> $hours hours = $res secs</p>";
                }
            ?>
            <input type="submit" name="submit" value="Convert" id="btn" />
        </form>
    </div>
</body>
</html>