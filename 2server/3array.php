<!DOCTYPE html>
<html>
<head>
    <title>PHP Functions and Arrays</title>
</head>
<body>
    <h1>PHP Functions and Arrays</h1>
    <?php
        function greet($name) {
            return "Hello, $name!";
        }
        function sumArray($arr) {
            $sum = 0;
            foreach ($arr as $value) {
                $sum += $value;
            }
            return $sum;
        }
        function maxArray($arr) {
            $max = $arr[0];
            foreach ($arr as $value) {
                if ($value > $max) {
                    $max = $value;
                }
            }
            return $max;
        }
        function displayArray($arr) {
            $output = "<ul>";
            foreach ($arr as $value) {
                $output .= "<li>$value</li>";
            }
            $output .= "</ul>";
            return $output;
        }
        $names = ["Subham", "Utsav", "Dipesh", "Ashim", "Nijal"];
        $numbers = [20, 21, 19, 20, 20];
        echo "<h2>Hello!</h2>";
        foreach ($names as $name) {
            echo greet($name) . "<br>";
        }
        echo "<h2>Stats</h2>";
        echo "The average age is: " . sumArray($numbers)/5 . "<br>";
        echo "The maximum age is: " . maxArray($numbers) . "<br>";
        echo "<h2>Display all ages</h2>";
        echo displayArray($numbers);
    ?>
</body>
</html>
