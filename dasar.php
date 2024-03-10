<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo "Hi, I'm a PHP script!"; ?>

    <!-- tanggal -->
    Tanggal : <?php echo(date("d F Y ")); ?>

    <!-- variabel -->
    <?php
        /* deklarasi variabel */
        $tanggal = date ("d F Y");
        $nama = "Praktikan" ;
        /*memanggil variabel tanggal*/
        echo("$tanggal<br>");
        /* memanggil variabel nama */
        echo("$nama, Selamat datang di dunia webmaster");
    ?>

    <!-- input -->
    <form action="keluaran.php" method="post">
    Nama Anda :<br> <input type="text" name="nama"><br><br>
    Kuliah di :<br> <input type="text" name="sekolah"><br><br>
    <input type="submit"> <input type="reset">
    </form>
    <?php
    echo "Hai, $_POST[nama] <br>";
    echo "$_POST[sekolah] memang top";
    ?>


    <?php
    $Hari = date( 'l' );
    if ($Hari == "Tuesday")
    {
    echo "Hari yang menyenangkan";
    }
    else
    {
    echo "Hari yang melelahkan";
    }
    ?>

    <?php
    $tanggal = date("d F Y");
    /* script pengenalan pengulangan */
    echo "$tanggal <br>";
    for ($count = 1 ; $count <= 4; $count++)
    {
    echo "Anda adalah calon webmaster<br>";
    }
    ?>
</body>
</html>