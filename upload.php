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
    <?php
        $target_path = "upload/";

        $target_path = $target_path . basename(
        $_FILES['uploadedfile']['name']);
    
        if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'],$target_path)) {
            echo "File " . basename($_FILES['uploadedfile']['name'])." sudah dikirim";
        } else {
            echo "Terdapat error saat mengirim file, coba ulangi lagi!";
        }
    ?>
    </div>
        
    <div id="copyright">
        <div class="wrapper">
            &copy; 2020. <b>RestoranMasterSyifu</b> All Right Reserved
        </div>
    </div>
</body>
</html>