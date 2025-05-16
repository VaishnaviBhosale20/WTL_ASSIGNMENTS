<?php
// Add three numbers
echo 'Add three numbers:<br>';
$a = 10;
$b = 20;
$c = 30;
echo "Sum: " . ($a + $b + $c) . "<br>";
echo "<br>";

// Factorial of a number
echo 'Factorial of a number:<br>';
function factorial($n) {
    if ($n == 0) 
        return 1;
    return $n * factorial($n - 1);
}
echo "Factorial of 5: " . factorial(5) . "<br>";
echo "<br>";

// Greatest number
echo 'Greatest number:<br>';
$x = 15;
$y = 45;
if ($x > $y) {
    echo "Greater number: $x<br>";
} else {
    echo "Greater number: $y<br>";
}
echo "<br>";

// Conditional statement
echo 'Conditional statement:<br>';
$marks = 70;
if ($marks >= 60) {
    echo "Result: Passed<br>";
} else {
    echo "Result: Failed<br>";
}
echo "<br>";

// Switch case
echo 'Switch case:<br>';
$day = 3;
switch ($day) {
    case 1:
        echo "Monday<br>";
        break;
    case 2:
        echo "Tuesday<br>";
        break;
    case 3:
        echo "Wednesday<br>";
        break;
    default:
        echo "Invalid day<br>";
}
echo "<br>";

//looping
echo 'For loop:<br>';
for ($i = 1; $i <= 5; $i++) {
    echo "Loop iteration: $i<br>";
}
echo "<br>";


//while loop
echo 'While loop:<br>';
$i = 1;
while ($i <= 5) {
    echo "While loop iteration: $i<br>";
    $i++;
}
echo "<br>";


//do while loop
echo 'Do while loop:<br>';
$i = 1;
do {
    echo "Do while loop iteration: $i<br>";
    $i++;
} while ($i <= 5);
echo "<br>";


//foreach loop
$fruits = array("Apple", "Banana", "Cherry");
foreach ($fruits as $fruit) {
    echo "Fruit: $fruit<br>";
}
echo "<br>";
?>
