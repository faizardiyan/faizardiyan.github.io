<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nama="Gaby";
    $kota="Jakarta";
    $nim="1242300";
    $kelas=$_GET["kelas"];
    echo "Nama : ".$nama;
    ?>
    <br>
    <?php
    echo "Kota : $kota";
    ?>
    <br>
    nim : <?=$nim?>
    <br>
    <?php
    $nilai = $_GET["nilai"];
    if ($nilai >=85){
        echo "Nilai A";
    }else if ($nilai >=75 ){
    echo "Nilai B";
    }else if ($nilai >=65 ){
        echo "Nilai C";
    }else if ($nilai >= 55){
        echo "Nilai D";
    } else {
    echo "Nilai E";
}
    ?>
    <br>
    kelas: <?=$kelas?>
    <hr>
    <?php
    $mobil =["Honda","Toyota","Wuling"];
    for ($i = 0; $i < count($mobil); $i++) {
        echo "Mobil ke-$i ".$mobil[$i]."<br>";
    }
    
    foreach ($mobil as $k => $v) {
        echo "Mobil ke-".($k+1).": $v <br>";
    }
    ?>


</body>
</html>