<?php
$array = ['red', 'green', 'blue', 'yellow', 'gray', 'black', 'orange'];

// foreach ($array as $key => $value) {
//     echo "<p style='background: $value'>" . $value . "</P>";
// }

foreach ($array as $key => $value) {
    if ($value == "red") {
        echo "<p style='color:red'> Red </p>";
    } elseif ($value == "green") {
        echo "<p style='color:green'> Green </p>";
    } elseif ($value == "blue") {
        echo "<p style='color:blue'> Blue </p>";
    } elseif ($value == "orange") {
        echo "<p style='color:orange'> Orange </p>";
    }
}
