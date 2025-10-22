<?php
// -------------------------------------------------------
// ------------ Exercise 4: Associative Array ------------
//--------------------------------------------------------

// Associative Array w/ Personal Info
$my_info = [
    "name" => "Flavio",
    "age" => "42",
    "email" => "souzaflavio@google.com",
    "favorite_food" => "Pizza"
];

// Ouput -  Using "foreach"
foreach ($my_info as $key => $value) {
    echo "$key : $value<br>";
}

// // Output - Using "print_r" with <pre> to preserve html format as it is
// echo "<pre>"; // <pre> displayed in a fixed-width font, and the text preserves both spaces and line breaks.
// print_r($my_info);
// echo "</pre>";

?>