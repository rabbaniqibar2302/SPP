<?php
session_start();
require_once 'Admin.php';

$admin = new Admin;

//jika session id belum di set , maka dikembalikan ke halaman login
if (!isset($_SESSION['id'])) {
    header('Location: ../../');
}

$id = $_SESSION['id'];

$data = $admin->getDataPetugas($id);
$row = mysqli_fetch_assoc($data);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Selamat Datang</title>
</head>

<body>
    Hi, <?= $row['nama_petugas'] ?>
</body>

</html>