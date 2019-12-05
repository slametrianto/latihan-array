<?php
$mahasiswa = [
    ["mamet", "02131222", "mamet@gmail.com", "teknik informatika"],
    ["reni", "02131222", "reni@gmail.com", "manajemen informatika"],

];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li><?php echo  $mhs[0]; ?></li>
            <li><?php echo  $mhs[1]; ?></li>
            <li><?php echo  $mhs[2]; ?></li>
            <li><?php echo  $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>



</body>

</html>