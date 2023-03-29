<?php
$full = $argv[1];
$birt = $argv[2];
$year = date("Y");
$age = $year - $birth;

echo "Your name is $full, and your age is $age years old\n";

if ($age >= 18) {
    echo "You are a voter\n";
}

if ($age >= 60) {
    echo "You are a senior citizen\n";
}

?>