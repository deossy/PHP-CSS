<?php
    $loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Voluptatem reprehenderit nobis veritatis commodi fugiat molestias impedit
    unde ipsum voluptatum, corrupti minus sit excepturi nostrum quisquam?
    Quos impedit eum nulla optio.";

    # dari indeks 0 sampai sepanjang 150 karakter
    echo "<p>" . substr($loremIpsum, 0, 150) . "</p>";

    # dari indeks 30 sampai sepanjang 150 karakter
    echo "<p>" . substr($loremIpsum, 30, 150) . "</p>";

    # dari indeks 100 sampai habis
    echo "<p>" . substr($loremIpsum, 100) . "</p>";

    # abmil 100 karakter terakhir
    echo "<p>" . substr($loremIpsum, -100) . "</p>";
?>