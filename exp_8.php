<?php
// Example PHP program demonstrating string operations

// Function to concatenate two strings
function concatenateStrings($string1, $string2) {
    return $string1 . ' ' . $string2;
}

// Function to calculate the length of a string
function stringLength($string) {
    return strlen($string);
}

// Function to extract a substring from a string
function substringExample($string, $start, $length) {
    return substr($string, $start, $length);
}

// Function to replace a substring with another substring
function stringReplace($string, $search, $replace) {
    return str_replace($search, $replace, $string);
}

// Function to convert a string to uppercase
function toUpperCase($string) {
    return strtoupper($string);
}

// Function to convert a string to lowercase
function toLowerCase($string) {
    return strtolower($string);
}

// Function to capitalize the first letter of a string
function capitalizeFirstLetter($string) {
    return ucfirst($string);
}

// Main execution
echo "<h1>String Operations in PHP</h1>";

// Example strings
$string1 = "Hello";
$string2 = "World!";
$combinedString = concatenateStrings($string1, $string2);

echo "<h3>1. Concatenation:</h3>";
echo "<p>Combined String: <strong>$combinedString</strong></p>";

echo "<h3>2. String Length:</h3>";
echo "<p>Length of '$combinedString': <strong>" . stringLength($combinedString) . "</strong></p>";

echo "<h3>3. Substring Extraction:</h3>";
$substring = substringExample($combinedString, 0, 5);
echo "<p>Substring (0, 5): <strong>$substring</strong></p>";

echo "<h3>4. String Replacement:</h3>";
$replacedString = stringReplace($combinedString, "World", "PHP");
echo "<p>Replaced String: <strong>$replacedString</strong></p>";

echo "<h3>5. Case Conversion:</h3>";
echo "<p>Uppercase: <strong>" . toUpperCase($combinedString) . "</strong></p>";
echo "<p>Lowercase: <strong>" . toLowerCase($combinedString) . "</strong></p>";
echo "<p>Capitalized: <strong>" . capitalizeFirstLetter($combinedString) . "</strong></p>";
?>
