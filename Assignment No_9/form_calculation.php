<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Calculation</title>
</head>
<body>
    <form method="POST" action="">
        <label for="num1">Enter First Number:</label>
        <input type="number" id="num1" name="num1" required>
        <br><br>
        <label for="num2">Enter Second Number:</label>
        <input type="number" id="num2" name="num2" required>
        <br><br>
        <label for="operation">Select Operation:</label>
        <select id="operation" name="operation" required>
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="greatest">Find Greatest</option>
        </select>
        <br><br>
        <button type="submit">Calculate</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = 0;

        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                echo "<h3>Result: $num1 + $num2 = $result</h3>";
                break;
            case 'subtract':
                $result = $num1 - $num2;
                echo "<h3>Result: $num1 - $num2 = $result</h3>";
                break;
            
            case 'multiply':
                $result = $num1 * $num2;
                echo "<h3>Result: $num1 * $num2 = $result</h3>";
                break;

            case 'greatest':
                $result = max($num1, $num2);
                echo "<h3>Result: The greatest number between $num1 and $num2 is $result</h3>";
                break;
            default:
                echo "<h3>Invalid Operation</h3>";
        }
    }
    ?>
</body>
</html>

