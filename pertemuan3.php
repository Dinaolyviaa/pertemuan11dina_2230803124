<?php
$Mahasiswa =[
    ["Joni","123456","Sistem Informasi","almahiramutia11@gmail.com"],
    ["Kia","654113","Teknik Informatika","almahiramutia01@gmail.com"],
    ["Almahira","78910","Ilmu Komputer","budigmail.com"],
    ["Almahira","32145","Ilmu Komputer","Kiagmail.com"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <? php foreach ($Mahasiswa as $mhs): ?>
    <ul>
        <li><?=mhs [0]; ?>< </li>
        <li><?=mhs [1]; ?>< </li>
        <li><?=mhs [2]; ?>< </li>
        <li><?=mhs [3]; ?>< </li>
    </ul>
    <?php endforeach
</body>
</html>