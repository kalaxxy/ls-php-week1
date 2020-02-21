<?php
// 1
$name = "Катя";
$age = "29";

echo "Меня зовут: " . $name . "<br>";
echo "Мне " . $age . " лет" . "<br>";
echo "“!|/’”\ " . "<br>";

// 2
const PICTURE_SUM = 80;
const PICTURE_PEN = 23;
const PICTURE_PENCIL = 40;
$picturePaint = PICTURE_SUM - (PICTURE_PEN + PICTURE_PENCIL);
echo "Рисунков красками: " . $picturePaint  . "<br>";

// 3
$anotherAge = 29;
if ($anotherAge >= 18 && $anotherAge <= 65) {
    echo "Вам еще работать и работать"  . "<br>";
} elseif ($anotherAge > 65) {
    echo "Вам пора на пенсию"   . "<br>";
} elseif ($anotherAge >= 1 && $anotherAge <= 17) {
    echo "Вам ещё рано работать"  . "<br>";
} else {
    echo "Неизвестный возраст"  . "<br>";
}

// 4
$day = 10;
switch ($day) {
    case $day >= 1 && $day <=5 :
        echo "Это рабочий день"  . "<br>";
        break;
    case $day === 6 || $day === 7 :
        echo "Это выходной день"  . "<br>";
        break;
    default :
        echo "Неизвестный день"  . "<br>";
}

// 5
$bmw = [
    name => "bmw",
    model => "X5",
    speed => 120,
    doors => 5,
    year => "2015"
];
$toyota = [
    name => "toyota",
    model => "Y5",
    speed => 121,
    doors => 4,
    year => "2014"
];
$opel = [
    name => "opel",
    model => "Z5",
    speed => 122,
    doors => 3,
    year => "2013"
];

$cars = [$bmw, $toyota, $opel];

foreach ($cars as $key => $value)
{
    echo "CAR " . $value[name] . "<br>" . $value[model] . " " . $value[speed] . " " . $value[doors] . " " . $value[year] . "<br>";
}

// 6
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        $res = $i * $j;
        if ($i % 2 === 0 && $j % 2 === 0) {
            echo "(" . $res . ") ";
        } elseif ($i % 2 === 1 && $j % 2 === 1) {
            echo "[" . $res . "] ";
        } else {
            echo $res . " ";
        }
    }
    echo "<br>";
}