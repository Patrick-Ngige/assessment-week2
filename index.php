<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Simple Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
    
<body>
    <form action="calculate.php" method="post">

        <label for="">Enter the first number</label> <br>
        <input type="number" name="num1"> <br> <br>
        <label for="">Enter the second number</label> <br>
        <input type="number" name="num2"> <br>

        <div >
            <select name="operation" > 
            <option  value="add">Add</option>
            <option  value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option  value="divide">Divide</option>
            </select>
        </div>

        <input type="submit" value="calculate">


    </form>    

</body>
</html>