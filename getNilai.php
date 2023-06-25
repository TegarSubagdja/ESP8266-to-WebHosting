<?php
//koneksi ke database
$koneksi = mysqli_connect("localhost", "", "", "");

//query untuk menampilkan data LDR dengan id=1
$query = "SELECT * FROM tb_ldr WHERE id=1";

//eksekusi query
$result = mysqli_query($koneksi, $query);

//looping untuk menampilkan data LDR
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td class='align-middle text-center'>" . $row['ldr'] . "</td><td class='align-middle text-center'>" . $row['date'] . "</td></tr>";
}

//tutup koneksi ke database
mysqli_close($koneksi);
