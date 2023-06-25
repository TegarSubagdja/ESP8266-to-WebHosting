<?php
$koneksi = mysqli_connect("localhost", "", "", "");

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_errno();
}

if (isset($_GET['ldr'])) {
    $ldr = $_GET['ldr'];
    $datetime = date('Y-m-d H:i:s');
    $simpan = mysqli_query($koneksi, "UPDATE `tb_ldr` SET `ldr`='$ldr', `date`='$datetime' WHERE `id`='1'");

    if ($simpan)
        echo "Berhasil di Simpan";
    else
        echo "Gagal di Simpan";
} else {
    echo "Variabel ldr tidak didefinisikan";
}
