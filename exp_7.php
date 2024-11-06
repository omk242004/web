<?php
// Example PHP program demonstrating control statements

// Function to check if a number is positive, negative, or zero
function checkNumber($number) {
    echo "<h3>If-Else Statement:</h3>";
    if ($number > 0) {
        echo "<p><strong>$number</strong> is positive.</p>";
    } elseif ($number < 0) {
        echo "<p><strong>$number</strong> is negative.</p>";
    } else {
        echo "<p><strong>$number</strong> is zero.</p>";
    }
}

// Function to return the day of the week based on the day number
function getDayName($day) {
    echo "<h3>Switch Statement:</h3>";
    switch ($day) {
        case 1:
            echo "<p>Today is <strong>Monday</strong>.</p>";
            break;
        case 2:
            echo "<p>Today is <strong>Tuesday</strong>.</p>";
            break;
        case 3:
            echo "<p>Today is <strong>Wednesday</strong>.</p>";
            break;
        case 4:
            echo "<p>Today is <strong>Thursday</strong>.</p>";
            break;
        case 5:
            echo "<p>Today is <strong>Friday</strong>.</p>";
            break;
        case 6:
            echo "<p>Today is <strong>Saturday</strong>.</p>";
            break;
        case 7:
            echo "<p>Today is <strong>Sunday</strong>.</p>";
            break;
        default:
            echo "<p style='color: red;'>Invalid day number. Please enter a number between 1 and 7.</p>";
    }
}

// Function to demonstrate a for loop counting to a specified number
function forLoopExample($countTo) {
    echo "<h3>For Loop:</h3>";
    for ($i = 1; $i <= $countTo; $i++) {
        echo "<p>Iteration $i</p>";
    }
}

// Function to demonstrate a foreach loop with an array of fruits
function foreachLoopExample() {
    echo "<h3>Foreach Loop:</h3>";
    $fruits = array("Apple", "Banana", "Cherry", "Date", "Elderberry");
    echo "<ul>";
    foreach ($fruits as $fruit) {
        echo "<li>$fruit</li>";
    }
    echo "</ul>";
}

// Function to demonstrate a while loop counting up to a specified limit
function whileLoopExample($limit) {
    echo "<h3>While Loop:</h3>";
    $count = 0;
    while ($count < $limit) {
        echo "<p>Count is $count</p>";
        $count++;
    }
}

// Main execution
echo "<h1>Control Statements in PHP</h1>";

// User input handling
$number = 10; // Example number for if-else statement
$day = 3; // Example day for switch statement
$countTo = 5; // Limit for the for loop
$limit = 5; // Limit for the while loop

checkNumber($number);
getDayName($day);
forLoopExample($countTo);
foreachLoopExample();
whileLoopExample($limit);
?>
