<?php
    /**
     * Increment
     */

    $a = 1;
    echo "a = {$a} <br>";

    $a++;
    echo "a = {$a} <br>";

    $a++;
    echo "a = {$a} <br>";

    # isi dari variabel $a dimasukkan lebih dulu ke variabel $b
    # lalu variabel $a menambah dirinya sendiri dengan angka 1

    $b = $a++;
    echo "b = {$b} <br>";
    echo "a = {$a} <br>";

    /**
     * Decrement
     */
    $a--;
    echo "a = {$a} <br>";

    $a--;
    echo "a = {$a} <br>";

    # isi dari variabel $a dimasukkan lebih dulu ke variabel $b
    # lalu variabel $a mengurangi dirinya sendiri dengan angka 1
    $b = $a--;
    echo "b = {$b} <br>";
    echo "a = {$a} <br>";
    
    # bisa juga menaruh operator tersebut sebelum nama variabel:
    $a = 5;
    --$a;

    # variabel $a menambah dirinya sendiri dengan angka 1
    # lalu hasil terbaru tersebut akan dimasukkan ke variabel $b
    $b = --$a;

    # begitu juga yang $c.
    $c = ++$b;
?>