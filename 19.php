<?php
/*Даны вещественные числа: X, Y, Z. Определить, существует ли треугольник
с такими длинами сторон и, если существует, будет ли он прямоугольным.*/
$x=rand(-100,100);
$y=rand(-100,100);
$z=rand(-100,100);
echo "Даны вещественные числа: <br>
X= $x <br> Y= $y<br> Z= $z<br><br>"

if ($x+$y>$z and $y+$z>$x and $x+$z>$y)
echo "<b>Треугольник существет</b>";
else echo "<b>Треугольник не существет </b>";

if ($x**2+$y**2==$z**2 or $x**2+$z**2==$y**2 or $z**2+$y**2==$x**2)
echo ", является прямоугольным";
else echo " и не является прямоугольным";
 ?>
