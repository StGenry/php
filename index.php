<?php
header("Content-type: text/html; charset=utf-8");
?>

<h2> Task 1. Вывести которые делятся на 3 без остатка </h2>
<p>
<?php
$a = 0; 
while ($a < 101) {
    if ($a % 3 == 0) {
        echo $a.' ';
    }
    $a++;
}
?>
</p>

<h2> Task 2. Вывесте от 0 до 10: 0 - это ноль,  1 - нечетное число, 2 - четное число</h2>
<p>
<?php
$a = 0; 
do {
    if ($a == 0) {
        echo $a.' - это ноль<br>';
    } elseif ($a % 2 == 0) {
        echo $a.' - четное число<br>';
    } else {
        echo $a.' - нечетное число<br>';
    }
    $a++;
}
while ($a < 11)
?>
</p>

<h2> Task 3. массив города - области </h2>
<p>
<?php
$towns = [  "Моск область" => ["Москва", "Зеленоград", "Клин"], 
            "Лен область" => ["СПб", "Гатчина", "Павловск"],
            "Рязанская область" => ["Рязань", "Других", "Не", "Знаю", "Интернета", "Нет"]
        ];

    foreach ($towns as $key => $area) {
        echo "<p><b>{$key}:</b></p>";
        foreach ($area as $index => $town) {
            echo "{$town}".(($index == sizeof($area) - 1) ? "" : ", ");
        }
    }

?>
</p>

<h2> Task 4. массив для транслитерации </h2>
<p>
<?php
function translit($str) {
    $translitedStr = '';
    $letters = ['а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'ю' => 'yu', 'я' => 'ya']; // TODO: если успею добью массив, суть не меняет
    for ($i = 0; $i < mb_strlen($str); $i++) {
        $translitedStr .= $letters[mb_substr($str, $i, 1)];
    }
    return $translitedStr;
}
echo translit('абю');
?>
</p>

<h2> Task 5. заменить пробелы на подчеркивания </h2>
<p>
<?php
function changeSpaces($str) {
    $translitedStr = '';
    for ($i = 0; $i < mb_strlen($str); $i++) {
        $symbol = mb_substr($str, $i, 1);
        $translitedStr .= ($symbol == ' ') ? '_' : $symbol;
    }
    return $translitedStr;
}
echo changeSpaces('аб ыф');
?>
</p>

<h2> Task 6. меню с вложенностью </h2>
<p>
<?php
$towns = [  "Моск область" => ["Москва", "Зеленоград", "Клин"], 
"Лен область" => ["СПб", "Гатчина" => ["ул Ленина", "Купчино"]],
"Рязанская область" => ["Рязань", "Других", "Не", "Знаю", "Интернета", "Нет"]
];
function buildMenu($items) {
    $translitedStr = '';
    echo "<ul>";
    foreach ($items as $key => $value) {
        if(is_array($value)) {
            echo "<li>{$key}</li>";
            buildMenu($value);
        } else {
            echo "<li>{$value}</li>";
        }
    }
    echo "</ul>";
}
echo buildMenu($towns);
?>
</p>

<h2> Task 7*. от 0 до 9 без тела цикла </h2>
<p>
<?php
for ($i = 0; $i < 10; $i++, var_dump($i)) {
    // пусто
}
?>
</p>

<h2> Task 8*. 3-е задание с городами на К </h2>
<p>
<?php
$towns = [  "Моск область" => ["Москва", "Зеленоград", "Клин"], 
            "Лен область" => ["СПб", "Гатчина", "Павловск"],
            "Рязанская область" => ["Рязань", "Других", "Не", "Знаю", "Интернета", "Нет"]
        ];

    foreach ($towns as $key => $area) {
        echo "<p><b>{$key}:</b></p>";
        foreach ($area as $index => $town) {
            if (mb_substr($town, 0, 1) == 'К') {
                echo "{$town}".(($index == sizeof($area) - 1) ? "" : ", ");
            }
            
        }
    }

?>
</p>
