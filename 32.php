<?php
/*Дан одномерный массив числовых значений, насчитывающий N элементов.
Поменять местами элементы, стоящие на чётных и нечётных местах:
A[1] ↔ A[2]; A[3] ↔ A[4] ...*/
echo "Массив: &nbsp";
$array = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];
for ($i=1; $i<=14; $i=$i+2) {
  $x=$array[$i];
  $y=$array[$i+1];
  $array[$i]=$y;
  $array[$i+1]=$x;
}
echo implode(", &nbsp", $array);
?>
