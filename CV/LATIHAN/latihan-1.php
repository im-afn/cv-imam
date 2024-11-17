<p><b>Penjumlahan</b></p>
<?php
$num1 = 10;
$num2 = 20;
$sum = 0;

$sum = $num1 + $num2;

echo "The sum of $num1 and $num2 is: $sum";
?>

<br>

<p><b>Perkalian</b></p>
<?php
$length = 5;
$width = 10;
$area = 0;

$area = $length * $width;

echo "The area of the rectangle is: $area";
?>

<br>

<p><b>Pembagian</b></p>
<?php
$num1 = 10;
$num2 = 20;
$num3 = 30;
$average = 0;

$sum = $num1 + $num2 + $num3;
$average = $sum / 3;

echo "The average of $num1, $num2, and $num3 is: $average";
?>

<br>

<p><b>Persentase</b></p>
<?php
$total = 200;
$part = 50;
$percentage = 0;

$percentage = ($part / $total) * 100;

echo "The percentage of $part out of $total is: $percentage%";
?>

<br>

<p><b>Bunga Yang Berbunga</b></p>
<?php
$principal = 1000; // Jumlah uang awal
$rate = 5; // Tingkat bunga per tahun
$time = 2; // Lama waktu dalam tahun
$amount = 0;

$amount = $principal * (1 + ($rate / 100)) ** $time;

echo "The amount after $time years is: $amount";
?>

<br>

<p><b>Mengubah Nilai</b></p>
<?php
$num = 5;

$num++; // Increment (menambah 1)
echo "After increment: $num\n";

$num--; // Decrement (mengurangi 1)
echo "After decrement: $num";
?>