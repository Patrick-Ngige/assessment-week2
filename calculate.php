<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="calculator">
    <h2>Result</h2>

    <?php

if (isset($_POST['operation'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $result = "";


    switch ($operation) {
        case "add":
            $result = $num1 + $num2;
            break;
        case "subtract":
            $result = $num1 - $num2;
            break;
        case "multiply":
            $result = $num1 * $num2;
            break;
        case "divide":
            if ($num2 == 0) {
                $result = 'null';
            } else {
                $result = $num1 / $num2;
            }
            break;

        default:
             $result = "MATH ERROR";
            break;
    }
    echo "<p>Result: $result</p>";
}



?>

<a href="index.php">Back to calculator</a>
</div>

</body>
</html>

