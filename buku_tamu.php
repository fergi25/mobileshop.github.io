<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Shop</title>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header -->
    <div class="header">
        <div class="wrapper">
            <div class="logo">
                <h1><a href=""><span>Mobile</span>Shop</a></h1>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="About.html">About</a></li>
                    <li><a href="Belanja.php">Belanja</a></li>
                    <li><a href="Cart.php">Cart</a></li>
                    <li class="active"><a href="#">Buku Tamu</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Header -->
    
    <div class="komentar">
        <h2>Buku Tamu</h2>
        <div class="frame">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <div>
                <label>Nama</label>
                </div>
                <div>
                    <input type="text" name="fnama">
                </div>
                <br>
                <div>
                    <label>Email</label>
                </div>
                <div>
                    <input type="email" name="femail">
                </div>
                <br>
                <div>
                    <label>No HP</label>
                </div>
                <div>
                    <input type="angka" name="fnohp">
                </div>
                <br>
                <div>
                    <label>Pesan</label>
                </div>
                <div>
                    <textarea name="fpesan" style="height: 64px"></textarea>
                </div>
                <button type="submit" name="submit">Kirim</button>
            </form>
        </div>
        <br><br>
        <div class="frame">
            <div>
                <?php
                    $nama = " ";
                    $nohp = " ";
                    $email = " ";
                    $pesan = " ";
                    if(isset($_POST['submit'])){
                        $nama = $_POST['fnama'];
                        $nohp = $_POST['fnohp'];
                        $email = $_POST['femail'];
                        $pesan = $_POST['fpesan'];
                    }
                ?>
                <p>
                    <b><?= $nama; ?></b><br>
                    <?= $nohp; ?><br>
                    <?= $email; ?><br>
                    <?= $pesan; ?><br>
                </p>
            </div>
        </div>
</div>
 <!-- Footer -->
 <div class="footer">
        <p>Fergi Putra Abiansa. &copy; 2022. All Right Reserved</p>
    </div>
    <!-- End Footer -->