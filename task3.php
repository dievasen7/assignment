<?php

// assignment/task3.php

// 3. php програмка, която извежда факториела на  5, 8 и 10.

// Създаваме масив съдържащ числата за изчисление на факториел:
$nums = [5, 8, 10];  

// Обхождаме масива $nums и извеждаме фактуриела за всяка негова стойност:
foreach ($nums as $key => $num) {
    // Променлива носеща стойността на факториела.:
    $factorial = 1;
    // С цикъл for извършваме изчислението на фактуриел:
    for ($i = 1; $i <= $num; $i++) {
        $factorial = $factorial * $i; // 1*2*3...$num
    }
    // Извеждаме на екрана резултата:
    echo 'Factorial on ' . $num . ' is: ' . $factorial . '<hr />';
}

