<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $nama = $_GET['nama'];
    $jumlah = $_GET['jumlah'];

    echo "Anak Ayam $nama ada $jumlah <br>";
    // echo "Anak ayam turun $jumlah";
    for ($jumlah; $jumlah > 0; $jumlah--) {
        
        if ($jumlah == 1){
            echo "Anak ayam turun $jumlah <br>";
            echo "Mati satu $nama galau.";
        } else {
            echo "Anak ayam turun $jumlah <br> mati satu tinggal ".($jumlah-1)."<br>";
        }
    }
?>
</body>
</html>
