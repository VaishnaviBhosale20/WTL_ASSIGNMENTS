<?php
$arr = array(10, 20, 40, 30);
// 1. Display the array
print_r($arr);
echo "<br>";

// 2. Display the first element
echo "First element: " . $arr[0] . "<br>";

// 3. Display the last element
echo "Last element: " . $arr[count($arr) - 1] . "<br>";

// Display the length of the array
echo "Length of array: " . count($arr) . "<br>";

// Display the array in reverse order
echo "Array in reverse order: ";
print_r(array_reverse($arr));
echo "<br>";

// Add : Add an ele to the end of the array
array_push($arr, 50);
echo "Array after adding 50: ";
print_r($arr);
echo "<br>";

// Remove : Remove the last element of the array
array_pop($arr);
echo "Array after removing last element: ";
print_r($arr);
echo "<br>";

// Count : Count the number of elements in the array
echo "Count: " . count($arr) . "<br>";

// Sort
sort($arr);
echo "Sort:";
print_r($arr);
echo "<br>";


// Search
if (in_array(30, $arr)) echo "30 is found<br>";

//shift : Remove the first element of the array
array_shift($arr);
echo "Shifted array: ";
print_r($arr);
echo "<br>";

//unshift : Add ele to the beginning of the array
array_unshift($arr, 5);
echo "Unshifted array: ";
print_r($arr);
echo "<br>";

//sum 
echo "Sum: " . array_sum($arr) . "<br>";

//max 
echo "Max: " . max($arr) . "<br>";

//min 
echo "Min: " . min($arr) . "<br>";
?>
