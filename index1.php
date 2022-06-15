<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Restoran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo">RestoranMasterSyifu</div>
            <div class="menu">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="index.html">About</a></li>
                    <li><a href="index.html">Menu</a></li>
                    <li><a href="index1.php">Transaksi</a></li>
                    <li><a href="index2.html">Tambah Foto</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="wrapper">
        <!-- untuk Home -->
        <?php 
                    //ambil nilai variabel error
                    if(isset($_GET['error'])) {
                        $error=$_GET['error'];
                    } else {
                        $error="";
                    }

                    //siapkan pesan kesalahan
                    $pesan="";
                    if($error=="variabel_belum_diset") {
                        $pesan="Anda harus mengakses halaman ini";
                    } else if($error=="nama_kosong") {
                        $pesan="Nama harus diisi";
                    } else if($error=="jumlah_kosong") {
                        $pesan="Jumlah harus diisi";
                    }


                    //siapkan isian form jika terjadi kesalahan
                    if(isset($_GET['nama']) AND isset($_GET['status']) AND isset($_GET['menu']) AND isset($_GET['jumlah'])) {
                        $nama=$_GET['nama'];
                        $status=$_GET['status'];
                     $menu=$_GET['menu'];
                        $jumlah=$_GET['jumlah'];
                    } else {
                        $nama="";
                        $status="";
                        $menu="";
                        $jumlah="";
                    }
                ?>

                <span class="error"><?php echo $pesan;?></span>
        
                <table>
                    <form method="get" action="proses.php">
                        <tr><h2>Pengisian Transaksi</h2></tr>
                        <tr>
                            <td> Nama Pembeli : </td>
                            <td> <input type="text" name="nama" value="<?php echo $nama; ?>"> </td>
                        </tr>
                        <tr>
                            <td> Status Pembeli : </td>
                            <td><select name="status" size="1">
			                    <?php 
                                $options1 = array('Member', 'Non Member');
                                foreach ($options1 as $status) {
				                    $selected1 = @$_POST['status'] == $status ? ' selected1="selected1"' : '';
				                    echo '<option value="' . $status . '"' . $selected1 . '>' . $status . '</option>';
			                    }
                                ?>
		                    </select></td>
                        </tr>
                        <tr>
                            <td> Menu : </td>
                            <td><select name="menu" size="1">
			                     <?php 
                                $options2 = array('Paket 1', 'Paket 2', 'Paket 3');
                                foreach ($options2 as $menu) {
				                $selected2 = @$_POST['menu'] == $menu ? ' selected2="selected2"' : '';
				                echo '<option value="' . $menu . '"' . $selected2 . '>' . $menu . '</option>';
			                    }
                                ?>
		                    </select></td>
                        </tr>
                        <tr>
                            <td> Jumlah : </td>
                            <td> <input type="text" name="jumlah" value="<?php echo $jumlah; ?>"> </td>
                        </tr>
                        <tr>
                            <td> <input type="submit" name="Hitung" value="Hitung"></td>
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