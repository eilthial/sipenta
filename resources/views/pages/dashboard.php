<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ol>
        <li>Andre</li>
        <li>Andi</li>
        <li>Irfan</li>

        <?php
            foreach ($mahasiswa as $mhs) {?>
            <li><?= $mhs?></li>
        <?php }?>

    </ol>
    <img src=" " width="1000px">
    <div>
        Copyright <?= date("Y")?>
    </div>


    <script src="js/script.js"></script>
</body>
</html>
