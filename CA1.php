<?php

$A = [
    [1, 2],
    [2, 3],
];

$B = [
    [1, 2],
    [2, 3],
];

$rowsA = count($A);
$colsA = count($A[0]);
$rowsB = count($B);
$colsB = count($B[0]);

$result = array_fill(0, $rowsA, array_fill(0, $colsB, 0));

for ($i = 0; $i < $rowsA; $i++) {
    for ($j = 0; $j < $colsB; $j++) {
        for ($k = 0; $k < $colsA; $k++) {
            $result[$i][$j] += $A[$i][$k] * $B[$k][$j];
        }
    }
}


echo "<h1>Result of Matrix Multiplication:</h1>";
echo "<table border='1'>";
for ($i = 0; $i < $rowsA; $i++) {
    echo "<tr>";
    for ($j = 0; $j < $colsB; $j++) {
        echo "<td>" . $result[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
