<?php
// -------------------------------------------------------
// --- Exercise 3: Function Check Character in Array -----
//--------------------------------------------------------

// Function for a "case-insensitive" Char search
function CheckContainChar($words, $character) {
    $lower_character = strtolower($character); # delete if "case-sensitive" is relevant

    // Validate Inputs (array and string)
    if (!validateInputs($words, $character)) {
        return false; // Exit immediately on invalid input
    }
    
    // Check char exists for each word ("case-insensitive")
    foreach ($words as $word) {
        if (strpos(strtolower($word), $lower_character) === false) {
            return false;
        }
    }
    return true;
}

function validateInputs($words, $character) {
    // Check if $words is a non-empty array
    if (!is_array($words) || empty($words)) {
        echo "Error: First argument must be a non-empty array of words (texto).<br>";
        return false;
    }

    // Check if $character is a string and has exactly one character
    if (!is_string($character) || strlen($character) !== 1) {
        echo "Error: Second argument must be a single character string (texto).<br>";
        return false;
    }

    return true;
}

// Testing Char Check Function 
echo "<hr>";
echo "Testing Char Check Function";
echo "<hr>";

$words = ['hola', 'Php', 'Html'];
echo CheckContainChar($words, "h") ? "TRUE" : "FALSE";  // TRUE
echo "<br>";
echo CheckContainChar($words, "l") ? "TRUE" : "FALSE";  // FALSE
echo "<br>";
echo CheckContainChar($words, "H") ? "TRUE" : "FALSE";  // TRUE
echo "<br>";
echo CheckContainChar($words, "p") ? "TRUE" : "FALSE";  // FALSE

// --- Testing Validation ---
echo "<hr>";
echo "Testing validation failures (should all be FALSE):<br>";
echo "<hr>";

// 1. Invalid $words (not an array)
echo CheckContainChar("string", "a") ? "TRUE" : "FALSE";
echo "<br><br>";

// 2. Invalid $words (empty array)
echo CheckContainChar([], "a") ? "TRUE" : "FALSE";
echo "<br><br>";

// 3. Invalid $character (not a single character)
echo CheckContainChar($words, "ab") ? "TRUE" : "FALSE";
echo "<br><br>";

// 4. Invalid $character (not a string)
echo CheckContainChar($words, 123) ? "TRUE" : "FALSE";

?>