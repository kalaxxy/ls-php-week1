<?php
function task1($arr, bool $param = null)
{
    $res = "";
    foreach ($arr as $item) {
        if ($param === true) {
            $res = $item;
            echo $res;
        } else {
            $res = "<p>" . $item . "</p>";
            echo $res;
        }
    }
}

function task2($symbol)
{
    $args = func_get_args();
    if ($symbol == "+") {
        $res = "0";
        for ($i = 1; $i < sizeof($args); $i++) {
            $res += $args[$i];
        }
    } elseif ($symbol == "-") {
        $res = $args[1];
        for ($i = 1; $i < (sizeof($args) - 1); $i++) {
            $res -= $args[$i + 1];
        }
    } elseif ($symbol == "*") {
        $res = 1;
        for ($i = 1; $i < sizeof($args); $i++) {
            $res *= $args[$i];
        }
    } elseif ($symbol == "/") {
        $res = $args[1];
        for ($i = 1; $i < (sizeof($args) - 1); $i++) {
            $res /= $args[$i + 1];
        }
    } else {
        $res = "Error";
    }
    return $res;
}

function task3($a, $b)
{
    if (is_int($a) && is_int($b) && $a > 0 && $b > 0) {
        echo "<table> <tr>";
        for ($i = 1; $i <= $a; $i++) {
            for ($j = 1; $j <= $b; $j++) {
                $res = $i * $j;
                echo "<td>" . $i . " * " . $j . " = " . $res . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        return "<div>Укажите два целых числа больше 0</div>";
    }
}

//echo task3(9, 4);

function task4()
{
    $now = time();
    return date("d.m.Y H:i", $now);
}

//echo task4();

function task5()
{
    $unixTime = strtotime("2016-02-24 00:00:00");
    return $unixTime;
}

//echo task5();

function task6($str)
{
    return str_replace("К", "", $str);

}

//$string = "Карл у Клары украл Кораллы";
//
//echo task6($string);

function task7($str)
{
    return str_replace("Две", "Три", $str);

}

//$stringLemonade = "Две бутылки лимонада";
//
//echo task7($stringLemonade);



function task8($str) {
    file_put_contents("test.txt", $str);
    return file_get_contents("test.txt");
}
//$fileString = "Hello again!";
//echo task8($fileString);