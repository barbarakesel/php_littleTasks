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

$text = "My family is very important to me. We do lots of things together. My brothers and I like to go on long walks in the mountains. ";

function wordFrequency($wordFrequency) //количество вхождений словa в строку
{

    $text = strtolower(preg_replace("/[^\w\s]/", "", $wordFrequency));
    $text = explode(" ", $text);
    $wCount =[];
    foreach ($text as $word) {
        if (!empty($word)) {
        if (!isset($wCount[$word])) {
            $wCount[$word] = 1;
        } else {
            $wCount[$word]++;
        }
        }
    }


    foreach ($wCount as $word => $count) {
        echo "$word: $count\n";
    }
}
wordFrequency($text);
function generatePassword($length) //
{

}

function splitEvenOdd($arr)
{
    $even = [];
    $odd = [];
    foreach ($arr as $num){
      if ($num%2 == 0 ){
          array_push($even, $num);
      }
      else array_push($odd, $num);
    }
    echo "Это четные:\n";
    foreach ($even as $value) {
        echo $value . "\n";
    }
    echo "Это нечетные:\n";
    foreach ($odd as $value) {
        echo $value . "\n";
    }
}
splitEvenOdd($arr);

function longestWord($text)
{
    $text = strtolower(preg_replace("/[^\w\s]/", "", $text));
    $text = explode(" ", $text);
    $words =[];
    for ($i = 0; $i < count($text); $i++) {
           $words[strlen($text[$i])] = $text[$i] ;
    }
  return $words[max(array_keys($words))];
}
echo longestWord($text) . "\n";

function calculate($a, $b, $operator)
{
    switch ($operator) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            if ($b == 0) return "b = 0";
            else
            return $a / $b;
        default:
            return "wrong operator";
    }
}
echo calculate(2, 2, '+');
/*
 * 1️⃣ Проверка палиндрома
Написать функцию isPalindrome($string), которая проверяет, является ли строка палиндромом (учитывая, что регистр и пробелы не должны влиять на проверку).

2️⃣ Проверка простого числа
Создать функцию isPrime($number), которая проверяет, является ли число простым.

3️⃣ Сортировка массива
Написать функцию sortArray($arr), которая принимает массив чисел и возвращает его, отсортированный по возрастанию (без использования sort()).

4️⃣ Частота слов в тексте
Написать функцию wordFrequency($wordFrequency), которая принимает строку и возвращает массив, где ключ — слово, а значение — количество его вхождений в строку.

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