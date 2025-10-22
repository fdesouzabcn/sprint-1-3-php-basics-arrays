<?php
// -------------------------------------------------------
// ------ Array Manipulation and Re-indexing -------------
//--------------------------------------------------------


// Create array with 6 elements
$companies = ['facebook', 'twitter', 'google', 'apple','tiktok','linkedin'];

// 1) Show size
echo "Original Size: " . count($companies) . "<br>";
echo "Content: [" . implode(", ", $companies) . "]<br>";
echo "Indices: [" . implode(", ", array_keys($companies)) . "]<br>";

echo "<hr>";

// 2) Remove element and normalize indices
unset($companies[4]);  // Remove "Rabbit"
print_r($companies);
echo "<br>";
$companies = array_values($companies);  // Re-index
print_r($companies);

echo "<hr>";

// 3) Show final size and content
echo "Final Size: " . count($companies) . "<br>";
echo "Content: [" . implode(", ", $companies) . "]<br>";
?>