<?php
// tentative practises done in class

// Variable declaration and data types
$name = "R.a.mon";
$age = 22;
$height = 5.7;
$isStudent = true;

// Echo variables
echo "Name: $name <br>";
echo "Age: $age <br>";
echo "Height: $height feet<br>";
echo "Is Student? " . ($isStudent ? "Yes" : "No") . "<br><br>";


//Arrays

// Single-dimensional array
$skills = array("PHP", "JavaScript", "HTML", "CSS");

// Display array elements
echo "Skills:<br>";

foreach ($skills as $item) {
    echo $item . "<br>";
}
