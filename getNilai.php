<?php
//koneksi ke database
$koneksi = mysqli_connect("localhost", "username", "password", "database");

//query untuk menampilkan data LDR dengan id=1
$query = "SELECT * FROM tabel_sensor WHERE id=1";

//eksekusi query
$result = mysqli_query($koneksi, $query);

//looping untuk menampilkan data LDR
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td class='align-middle text-center'>" . $row['sensor'] . "</td><td class='align-middle text-center'>" . $row['date'] . "</td></tr>";
}

//tutup koneksi ke database
mysqli_close($koneksi);
