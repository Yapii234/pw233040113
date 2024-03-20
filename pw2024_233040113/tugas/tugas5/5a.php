<?php  

$mahasiswa = [
[
    'gambar' => '1.jpg',
    'nrp' => '233040100',
    'nama' => 'Aaroniero Arruruerie',
    'email' => 'aaron@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => '2.webp',
    'nrp' => '233040101',
    'nama' => 'Szayelaporro Granz',
    'email' => 'sgranz@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => '3.webp',
    'nrp' => '233040102',
    'nama' => 'Zommari Rureaux',
    'email' => 'zommari@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => '4.webp',
    'nrp' => '233040103',
    'nama' => 'Grimmjow Jaegerjaquezu',
    'email' => 'grimmjae@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => '5.jpg',
    'nrp' => '233040104',
    'nama' => 'Nnoitra Gilga',
    'email' => 'ngilga@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => '6.webp',
    'nrp' => '233040105',
    'nama' => 'Ulquiorra Cifer',
    'email' => 'ulcifer@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => '7.jpg',
    'nrp' => '233040106',
    'nama' => 'Tier Harribel',
    'email' => 'harribel@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => '8.jpg',
    'nrp' => '233040107',
    'nama' => 'Baraggan Louisenbairn',
    'email' => 'baragganl@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => '9.jpg',
    'nrp' => '233040108',
    'nama' => 'Coyote Starrk',
    'email' => 'cstarrk@gmail.com',
    'jurusan' => 'Teknik Informatika'
],
[
    'gambar' => '10.jpg',
    'nrp' => '233040109',
    'nama' => 'Yammy Llargo',
    'email' => 'llargo@gmail.com',
    'jurusan' => 'Teknik Informatika'
],

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5a</title>
</head>
<body>
<h2>Daftar Mahasiswa</h2>
    <?php foreach($mahasiswa as $m) { ?>
    <ul>
        <li>
            <img src="image/<?= $m['gambar']; ?>" width = 200px >
        </li>
        <li>NRP : <?= $m['nrp']; ?></li>
        <li>Nama : <?= $m['nama']; ?></li>
        <li>Email : <?= $m['email']; ?></li>
        <li>Jurusan : <?= $m['jurusan']; ?></li>
        </li>
    </ul>
    <?php } ?>
</body>
</html>