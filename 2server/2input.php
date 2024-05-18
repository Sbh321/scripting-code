<!DOCTYPE html>
<html>
<head>
    <title>PHP Task Handler</title>
</head>
<body>
    <h1>Task Handler</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $task = $_POST["task"];
        $number = intval($_POST["number"]);
        if ($task == "greet") {
            echo "<h2>Hello! How are you?</h2>";
        } elseif ($task == "sum") {
            $sum = 0;
            for ($i = 1; $i <= $number; $i++) {
                $sum += $i;
            }
            echo "<h2>The sum of numbers from 1 to $number is: $sum</h2>";
        } elseif ($task == "factorial") {
            $factorial = 1;
            for ($i = 1; $i <= $number; $i++) {
                $factorial *= $i;
            }
            echo "<h2>The factorial of $number is: $factorial</h2>";
        } else {
            echo "<h2>Invalid task selected.</h2>";
        }
        switch ($task) {
            case "greet":
                break;
            case "sum":
                break;
            case "factorial":
                break;
            default:
                echo "<h2>No additional tasks available.</h2>";
                break;
        }
    }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="task">Choose a task:</label>
        <select name="task" id="task">
            <option value="greet">Greet</option>
            <option value="sum">Calculate Sum</option>
            <option value="factorial">Calculate Factorial</option>
        </select>
        <br><br>
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>