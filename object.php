<?php
    class Sapa
    {
        var $str;  
    }

    // membuat object pesan, ini disebut instansiasi
    $pesan = new Sapa();

    //memberikan nilai utk properti str pada objek pesan
    $pesan->str="Hello World!"; 

    // mencetak nilainya (pengolahan data)
    echo $pesan->str; 
?>