<?php

// assignment/task2.php

// 2. Php програмка, която извежда сумата на числата от 0 до 30.:

// Създаваме променливи за начало и край на диапазона от числа:
$start = 0;
$end = 30;

// Празна променлива за сумата, преди да завърти for цикъла:
$sum = 0;
for ($i = $start; $i <= $end; $i++) {
    
    // Събираме моментната стойност на сумата с числото $i (увеличавасе с 1 при всеки цикъл):
    $sum += $i;
}
// Извеждаме крайния сбор на числата от 0 до 30:
echo "Sum from " . $start . " to " . $end . " = " . $sum;

