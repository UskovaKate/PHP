<?php
/*Дан одномерный массив числовых значений, насчитывающий N элементов.
Выполнить перемещение элементов массива по кругу вправо,
т. е. A[1] → A[2]; A[2] → A[3]; ... A[n] → A[1].*/
echo "Массив: &nbsp";
$array = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];
$x=$array[count($array)-1];
for ($i=0; $i<count($array); $i++) {
  $y=$array[$i];
  $array[$i]=$x;
  $x=$y;
}
echo implode(", &nbsp", $array);
?>
