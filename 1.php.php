<?php
$input = "1001"; //.masukkan angka

//.mulai memproses input
echo "<b>input = </b>".$input; //.menampilkan input
echo "<hr />"; //.menampilkan pembatas antara input dan output

if($input == strrev($input))
{
    echo "<b>output = </b>"; //.menampilkan output
    echo $input." (palindrom)";
}
else
{
    echo "<b>output = </b>"; //.menampilkan output
    echo $input." (bukan palindrom)";
}

?>

