<?php
   if (isset($_POST["calculate"])) {
       $num1 = $_POST["num-1"];
       $num2 = $_POST["num-2"];
       $op = $_POST["calculate"];
   }

   $res = calculator($num1, $num2, $op);

   function calculator($num1, $num2, $op) {
       $res = 0;

       switch ($op) {
           case "+":
             $res = $num1 + $num2;
             break;
           case "-":
             $res = $num1 - $num2;
             break;
           case "x":
             $res = $num1 * $num2;
             break;
           case "/":
             if ($num2 == 0) {
                 $res = "infinity";
             } else {
                 $res = $num1 / $num2;
             }
             break;
           default:
                $res = "Invalid Operation"; 
       }

       return $res;
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
    <h1 style="text-align:center">Calculator Program</h1>
    <form action="" method="post">
        Number 1: <input type="text" name="num-1" /> <br>
        Number 2: <input type="text" name="num-2" /> <br> <br>

        <input type="submit" name="calculate" value="+">
        <input type="submit" name="calculate" value="-">
        <input type="submit" name="calculate" value="x">
        <input type="submit" name="calculate" value="/">
    </form>

    <?php echo $res; ?>
</body>
</html>