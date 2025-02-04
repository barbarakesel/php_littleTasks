<?php
$string = "rhtthr";
function isPalindrome($string)   //является ли число палиндромом
{
        $string = trim($string);
        $string = strtolower($string);
    for ($i = 0; $i < strlen($string); $i++){
        if ($string[$i] != $string[strlen($string) - $i - 1]){
            return "Не палиндром";
        }
    }
     return "Палиндром";
}
echo isPalindrome($string) . "\n";

$number = 1;
function isPrime($number) //является ли число простым
{
    if ($number < 2) {
        return "Число $number не является простым";
    }
    $maxNumber = sqrt($number);
for ($i = 2; $i <= $maxNumber; $i++){
    if ($number % $i == 0){ return "Число $number не является простым";}
}
return "Число $number является простым";
}
echo isPrime($number);

$arr = [5, 5, 2, 0, 9, 2];
function sortArray($array) // сортировка массива без функции sort
{
    $k = 0;
    for ($i = 0; $i < count($array) - 1; $i++) {
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$i] > $array[$j]) {
                $k = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $k;
            }
        }
    }

    foreach ($array as $value) {
        echo $value . "\n";
    }
}

sortArray($arr);

function wordFrequency($wordFrequency) //
{

}
function generatePassword($length) //
{

}
/*
 * 1️⃣ Проверка палиндрома
Написать функцию isPalindrome($string), которая проверяет, является ли строка палиндромом (учитывая, что регистр и пробелы не должны влиять на проверку).

2️⃣ Проверка простого числа
Создать функцию isPrime($number), которая проверяет, является ли число простым.

3️⃣ Сортировка массива
Написать функцию sortArray($arr), которая принимает массив чисел и возвращает его, отсортированный по возрастанию (без использования sort()).

4️⃣ Частота слов в тексте
Написать функцию wordFrequency(wordFrequency), которая принимает строку и возвращает массив, где ключ — слово, а значение — количество его вхождений в строку.

5️⃣ Генератор паролей
Создать функцию generatePassword($length), которая генерирует случайный пароль заданной длины, состоящий из букв и цифр.

6️⃣ Факториал числа
Написать функцию factorial($n), которая рекурсивно вычисляет факториал числа.

7️⃣ Фибоначчи
Реализовать функцию fibonacci($n), которая возвращает n-е число Фибоначчи (можно через рекурсию или цикл).

8️⃣ Четные и нечетные числа
Создать функцию splitEvenOdd($arr), которая принимает массив чисел и возвращает два массива: один с четными числами, другой — с нечетными.

9️⃣ Поиск самого длинного слова
Написать функцию longestWord($text), которая возвращает самое длинное слово в строке.

🔟 Калькулятор
Создать функцию calculate($a, $b, $operator), которая выполняет математическую операцию (+, -, *, /) над двумя числами.*/