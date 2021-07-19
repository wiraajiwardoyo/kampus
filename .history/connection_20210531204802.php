<?php
    $connection = mysqli_connect("localhost", "root", "", "kampu");

    if (mysqli_connect_errno($connection))
    {
        echo "Koneksi Gagal ". mysqli_connect_error();
    }
?>