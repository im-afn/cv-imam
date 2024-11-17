<p><b>Boleh Pemilu</b></p>

<?php
$name = "Imam arifin";
$age = 17;

if($age >= 17){
  echo $name . ", Adalah di perbolehkan menconlos";
} else {
  echo $name . ", Anda belum boleh mencoblos";
}
?>

<br>

<p><b>Ganjil Genap</b></p>
<?php
$number = 3; 
if ($number % 2 == 0) { // Modulus sisa bagi
echo "$number adalah beilangan Genap";
} else {
echo "$number adalah beilangan Ganjil";
}
?>

<br>

<p><b>Negatif Positif</b></p>
<?php
$number = "76455456";
if ($number > 0){
  echo $number . ", Is a positive number";
} else if ($number < 0){
  echo $number . ", Is a negative number";
} else if ($number == 0){
  echo ("You have entered zero");
} else {
  echo ("Pleas enter a numeric value");
}
?>

<br>

<p><b>Hari Bagian 1</b></p>
<?php
$dayNumber = 20; // Ubah angka ini untuk mencoba hari yang berbeda

switch ($dayNumber) {
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    case 6:
        echo "Saturday";
        break;
    case 7:
        echo "Sunday";
        break;
    default:
        echo "Invalid day number. Please enter a number between 1 and 7.";
}
?>

<br>

<p><b>Hari Bagian 2</b></p>
<?php
$timestamp = strtotime( "2025-11-2");
echo "$timestamp";
// Mengubah text menjadi tipe tanggal yang di kena php
// Fungsi daete mengolah data tanggal
$dayNumber = date('w', $timestamp);
echo "$dayNumber";

switch ($dayNumber) {
    case 1:
        echo "Senin";
        break;
    case 2:
        echo "Selasa";
        break;
    case 3:
        echo "Rabu";
        break;
    case 4:
        echo "Kamis";
        break;
    case 5:
        echo "Jumat";
        break;
    case 6:
        echo "Sabtu";
        break;
    case 0:
        echo "Minggu";
        break;
    default:
        echo "Tanggal yang anda masukkan salah. Masukkan tahun-bulan-tanggal";
}
?>