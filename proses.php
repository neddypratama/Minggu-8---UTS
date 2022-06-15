<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Restoran</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo">RestoranMasterSyifu</div>
            <div class="menu">
                <ul>
                <li><a href="indeks.html">Home</a></li>
                    <li><a href="index.html">About</a></li>
                    <li><a href="index.html">Menu</a></li>
                    <li><a href="index1.php">Transaksi</a></li>
                    <li><a href="index2.html">Tambah Foto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="wrapper">
    <?php
                    if(isset($_GET['nama']) AND isset($_GET['status']) AND isset($_GET['menu']) AND isset($_GET['jumlah'])) {
                        $nama=$_GET['nama'];
                        $status=$_GET['status'];
                        $menu=$_GET['menu'];
                        $jumlah=$_GET['jumlah'];

                        $isi_form="&nama=$nama&status=$status&menu=$menu&jumlah=$jumlah";
                    } else {
                        header("Location:index1.php?error=variabel_belum_diset");
                    }

                    $harga = 0;
                    $diskon = 0;
                    $total = 0;

                    if($status == "Member") {
                        if($menu == "Paket 1") {
                            if($jumlah == 1) {
                                $diskon = 1000 * $jumlah;
                                $harga = $jumlah * 20000;
                                $total = $harga - $diskon;
                         } else if($jumlah > 1 AND $jumlah < 4) {
                                $diskon = 1400 * $jumlah;
                                $harga = $jumlah * 20000;
                                $total = $harga - $diskon;
                            } else if($jumlah >= 4){
                                $diskon = 2000 * $jumlah;
                                $harga = $jumlah * 20000;
                                $total = $harga - $diskon;
                            }
                        } else if($menu == "Paket 2") {
                            if($jumlah == 1) {
                                $diskon = 1500 * $jumlah;
                                $harga = $jumlah * 30000;
                                $total = $harga - $diskon;
                            } else if($jumlah > 1 AND $jumlah < 4) {
                                $diskon = 2100 * $jumlah;
                                $harga = $jumlah * 30000;
                                $total = $harga - $diskon;
                            } else if($jumlah >= 4){
                                $diskon = 3000 * $jumlah;
                                $harga = $jumlah * 30000;
                               $total = $harga - $diskon;
                            }
                        } else if($menu == "Paket 3") {
                            if($jumlah == 1) {
                                $diskon = 2500 * $jumlah;
                                $harga = $jumlah * 50000;
                                $total = $harga - $diskon;
                            } else if($jumlah > 1 AND $jumlah < 4) {
                                $diskon = 3500 * $jumlah;
                                $harga = $jumlah * 50000;
                                $total = $harga - $diskon;
                            } else if($jumlah >= 4){
                                $diskon = 5000 * $jumlah;
                                $harga = $jumlah * 50000;
                                $total = $harga - $diskon;
                            }
                        }
                    } else if($status == "Non Member") {
                        if($menu == "Paket 1") {
                            if($jumlah <= 5) {
                                $diskon = 0 * $jumlah;
                                $harga = $jumlah * 20000;
                                $total = $harag - $diskon;
                            } else if($jumlah > 5 AND $jumlah < 11) {
                                $diskon = 1000 * $jumlah;
                                $harga = $jumlah * 20000;
                                $total = $harga - $diskon;
                            } else if($jumlah >= 11){
                                $diskon = 1400 * $jumlah;
                                $harga = $jumlah * 20000;
                                $total = $harga - $diskon;
                            }
                        } else if($menu == "Paket 2") {
                            if($jumlah <= 5) {
                                $diskon = 0 * $jumlah;
                                $harga = $jumlah * 30000;
                                $total = $harga - $diskon;
                            } else if($jumlah > 5 AND $jumlah < 11) {
                                $diskon = 1500 * $jumlah;
                                $harga = $jumlah * 30000;
                                $total = $harga - $diskon;
                            } else if($jumlah >= 11) {
                                $diskon = 2100 * $jumlah;
                                $harga = $jumlah * 30000;
                                $total = $harga - $diskon;
                            }
                        } else if($menu == "Paket 3") {
                            if($jumlah <= 5) {
                                $diskon = 0* $jumlah;
                                $harga = $jumlah * 50000;
                                $total = $harga - $diskon;
                            } else if($jumlah > 5 AND $jumlah < 11) {
                                $diskon = 2500 * $jumlah;
                                $harga = $jumlah * 50000;
                                $total = $harga - $diskon;
                            } else if($jumlah >= 11) {
                                $diskon = 3500 * $jumlah;
                                $harga = $jumlah * 50000;
                                $total = $harga - $diskon;
                            }
                        }
                    }

                    if(empty($nama)) {
                        header("Location:index1.php?error=nama_kosong".$isi_form);
                    } else if(empty($jumlah)) {
                        header("Location:index1.php?error=jumlah_kosong".$isi_form);
                    }
                
                ?>
                <table>
                    <form>
                        <tr><h2>Hasil Transaksi</h2></tr>
                        <tr>
                            <td> Nama Pembeli </td>
                            <td> :<?php echo $nama; ?></td>
                        </tr>
                        <tr>
                        <td> Status Pembeli </td>
                            <td> :<?php echo $status; ?></td>
                        </tr>
                        <tr>
                        <td> Total Harga </td>
                            <td> :<?php echo $harga; ?></td>
                        </tr>
                        <tr>
                            <td> Total Diskon </td>
                            <td> :<?php echo $diskon; ?></td>
                        </tr>
                        <tr>
                        <td> Total Pembayaran </td>
                            <td> :<?php echo $total; ?></td>
                     </tr>
                </table>
    </div>
        
    <div id="copyright">
        <div class="wrapper">
            &copy; 2020. <b>RestoranMasterSyifu</b> All Right Reserved
        </div>
    </div>
</body>
</html>