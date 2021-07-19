<?php
    $connection = mysqli_connect("localhost", "root", "", "kampurs");

    if (mysqli_connect_errno($connection))
    {
        echo "Koneksi Gagal ". mysqli_connect_error();
    }
?>