<?php

// assignment/task6.php

// 6. Таблица с числа от 1 до 100

$numRow = 10; // Задаваме брой редове
$numCol = 10; // Задаваме брой колони

echo "<table border =\"1\"'>";
    // Този цикъл създава таблица с зададения брой редове
    for ($row=1; $row <= $numRow; $row++) { 
    echo "<tr>";
        // Създава броя зададени колони, като попълва във всяка клетка 
        // резултата при умножение на ред * колона
        for ($col=1; $col <= $numCol; $col++) { 
           $result = $col * $row;
           echo "<td>$result</td>";
        }
    echo "</tr>";
    }
echo "</table>";
