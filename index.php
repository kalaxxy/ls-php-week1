<?php
require("src/functions.php");

$array = ["let's", "go", "to", "the", "party"];
echo task1($array, true);
echo "<br>";

echo task2("-", 300, 3, 5, 2);

echo task3(9, 4);

echo task4();
echo "<br>";

echo task5();
echo "<br>";

$string = "Карл у Клары украл Кораллы";
echo task6($string);
echo "<br>";

$stringLemonade = "Две бутылки лимонада";
echo task7($stringLemonade);
echo "<br>";

$fileString = "Hello again!";
echo task8($fileString);
echo "<br>";