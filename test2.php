<?php

$array = [["name" => ["ram" => ["lov", "kush"], "shyam", "geeta"]], ["name" => "shyam"], ["name" => "mohan"]];

foreach ($array[0] as $key => $value) {
    foreach ($value as $key => $value) {
        foreach ($value as $key => $val) {
            echo "<p>My Name is " . $val . " ji</p>";
        }
        echo "<p>My Name is " . $value . " ji</p>";
    }
}
foreach ($array[1] as $key => $value) {
    echo "<p>My Name is " . $value . " ji</p>";
}
foreach ($array[2] as $key => $value) {
    echo "<p>My Name is " . $value . " ji</p>";
}
