<?php
/*Известна денежная сумма. Разменять её купюрами 500,
100, 10 и монетой 2 руб., если это возможно.*/
$x=rand(1,10000);
echo "<b>Сумма денег= $x руб.</b><br><br>";
$a=$x%500;
$a1=intdiv($x,500);
echo "Купюры по 500 руб: $a1 шт<br>";
$b=$a%100;
$b1=intdiv($a,100);
echo "Купюры по 100 руб: $b1 шт<br>";
$c=$b%10;
$c1=intdiv($b,10);
echo "Купюры по 100 руб: $c1 шт<br>";
$d1=intdiv($c,2);
echo "Монеты по 2 руб: $d1 шт<br>";
 ?>