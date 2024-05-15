<?php 
// Informasi koneksi database
$host = 'localhost'; // Host database
$user = 'root'; // Username database
$password = ''; // Password database
$database = 'phpdasar'; // Nama database

// Membuat koneksi ke database
$koneksi = mysqli_connect($host, $user, $password, $database);

// Periksa koneksi
if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query untuk mengambil data mahasiswa
$sql = "SELECT * FROM mahasiswa";
$result = $koneksi->query($sql);

$koneksi->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                $no = 1;
                // output data setiap baris
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $no++ . "</td>
                            <td>" . $row["nrp"] . "</td>
                            <td>" . $row["nama"] . "</td>
                            <td>" . $row["email"] . "</td>
                            <td>" . $row["jurusan"] . "</td>
                            <td><img src='./img/" . $row["gambar"] . "' alt='gambar' style='width:100px;'></td>
                            <td><a href='ubah.php?nrp=" . $row["nrp"] . "'>Ubah</a> | <a href='hapus.php?nrp=" . $row["nrp"] . "'>Hapus</a></td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Tidak ada data</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>