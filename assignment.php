<?php
    $nilaiMatematika = 8;
    $rataRata = (10 + 7 + $nilaiMatematika) / 3;
    $namaDepan = "Nurul";
    $namaLengkap = "{$namaDepan} Huda";
    $a = 5;

    //sama dengan $a = $a + 10;
    $a += 10; 
    echo var_dump($a) . "<br>";

    //sama dengan $a = $a - 20;
    $a -= 20; 
    echo var_dump($a) . "<br>";

    //sama dengan $a = $a * 100;
    $a *= 100; 
    echo var_dump($a) . "<br>";

    //sama dengan $a = $a / 10;
    $a /= 10; 
    echo var_dump($a) . "<br>";
?>