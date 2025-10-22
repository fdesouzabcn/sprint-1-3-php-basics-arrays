<?php
// -------------------------------------------------------
// ----- Exercise 1 : Array with 5 Integers --------------
//--------------------------------------------------------

// Create an array with 5 integer numbers
$numbers = [10, 20, 40, 80, 160];

// Displaying nUmbers one by one 

// Using foreach with index (key)
echo "<strong>Method 3: Using foreach with index and value</strong><br>";
foreach ($numbers as $index => $value) {
    echo "Position $index: $value<br>";
}

// echo "<br><hr>";

// // Alternatve 1: Using foreach loop (NO index|key)
// echo "<strong>Method 2: Using foreach loop</strong><br>";
// foreach ($numbers as $number) {
//     echo "Number: $number<br>";
// }

// echo "<br><hr>";

// // Alternative 2: Using a for loop with index (Practicing)
// echo "<strong>Method 1: Using for loop with index</strong><br>";
// for ($i = 0; $i < count($numbers); $i++) {
//     echo "Index #$i: $numbers[$i]<br>";
// }

?>
