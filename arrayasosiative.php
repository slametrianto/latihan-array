<?php
$mahasiswa = [
    [
        "nama" => "mamet",
        "nrp" => "0900877",
        "email" => "mamet@gmail.com"
    ],
    [
        "nama" => "reni",
        "nrp" => "098765444",
        "email" => "ren@gmail.com",
        "tugas" => [90, 80, 70],
        "gambar" => "sandika.jpg"
    ],


];

// echo $mahasiswa[0]["nrp"];
// echo $mahasiswa[1]["tugas"][2];

?>

<?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li><?php echo  $mhs["nama"]; ?></li>
        <li><?php echo  $mhs["nrp"]; ?></li>
        <li><?php echo  $mhs["email"]; ?></li>
        <li>
            <img src="img/<?php echo $mhs["gambar"]; ?>">
        </li>
    </ul> <?php endforeach; ?>