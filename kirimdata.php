<?php
$koneksi = mysqli_connect("localhost", "username", "password", "database");

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_errno();
}

if (isset($_GET['pir'])) {
    $pir = $_GET['pir'];
    $datetime = date('Y-m-d H:i:s');
    $simpan = mysqli_query($koneksi, "UPDATE `tabel_sensor` SET `sensor`='$pir', `date`='$datetime' WHERE `id`='1'");

    if ($simpan){
        echo "Berhasil disimpan";
    } else {
        echo "Gagal disimpan";
    }
} else {
    echo "Variabel ldr tidak didefinisikan";
}
