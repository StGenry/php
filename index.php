<h2> Task 1. Объявить две целочисленные переменные $a и $b
    и задать им произвольные начальные значения.
    Затем написать скрипт, который работает по следующему принципу </h2>
<p>
    <?php
$a = 1;
$b = -1; 
if ($a >= 0 && $b >= 0) {
    echo $a - $b;
} elseif ($a < 0 && $b < 0) {
    echo $a * $b;
} else {
    echo $a + $b;
}
?>
</p>
<h2> Task 3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно
    использовать оператор return. </h2>
<p>
    <?php
function sum($arg1, $arg2)
{
    return $arg1 + $arg2;
}

function diff($arg1, $arg2)
{
    return $arg1 - $arg2;
}

function mult($arg1, $arg2)
{
    return $arg1 * $arg2;
}

function div($arg1, $arg2)
{
    return $arg1/$arg2;
}

echo '4/2 = '.div(4, 2);
?>
</p>
</p>
<h2> Task 4. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно
    использовать оператор return. </h2>
<p>
    <?php
function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case 'add':
            return sum($arg1, $arg2);
        case 'diff':
            return diff($arg1, $arg2);
        case 'mult':
            return mult($arg1, $arg2);
        case 'div':
            return div($arg1, $arg2);
        // в случае если $operation не один из 4 функция вернет null (т.к. явного возврата нет)
    }
}

echo '2 х 2 = '.mathOperation(2, 2, 'mult');
?>
</p>

<h2> Task 6*. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow),
    где $val – заданное число, $pow – степень. </h2>
<p>
<?php
function power($val, $pow) { // в общем случае, с 0-й и отрицательной степенью
    if ($pow == 0) { 
        return 1;
    } elseif ($pow > 0) { 
        return $val * power($val, $pow - 1);
    } else {
        return 1.0 / ($val * power (1.0 / $val, $pow + 1));
    }
}

echo '2 в степени 3 = '.power(2, 3).'<br>';
echo '2 в степени -1 = '.power(2, -1);
?>
</p>

<h2> Task 7*. Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями </h2>
<p>
<?php
// немного поизвращенски получилось, зато "секунды" добавить можно за 3 секунды ))
function getNumberSpell($number, $word) {
    $lastDigit = $number % 10;
    if ($number < 10 || floor($number / 10) % 10 !== 1) {
        if ($lastDigit === 1) {
            return $word["N"]; // Nominative case (именительный падеж) 
        }
        elseif ($lastDigit > 1 && $lastDigit < 5) {
            return $word["A"]; // Accusative case (винительный падеж)
        }
    }
    return $word["G"]; // Genitive case (родительный падеж) - вот с названием падежей конечно мог наврать, давно это было.. :)
}

function getHourSpell($number) {
    return getNumberSpell($number, ["N" => "час", "A" => "часа", "G" => "часов"]);
}

function getMinuteSpell($number) {
    return getNumberSpell($number, ["N" => "минута", "A" => "минуты", "G" => "минут"]);
}

echo '22:15 ---> 22'.getHourSpell(22).' 15'.getMinuteSpell(15).'<br>';
echo '21:43 ---> 21'.getHourSpell(21).' 43'.getMinuteSpell(43).'<br>';
?>
</p>