<?php

$mahasiswa = [
[
    'Nama' => 'Muhammad Wildhan',
    'Nrp' => '193040009', 
    'Email' => 'muhammadwildan334@gmail.com',
    'Jurusan' => 'Teknik Informatika'
],
[
    'Nama' => 'Fahri Arliansyah', 
    'Nrp' => '193040011', 
    'Email' => '193040011.fahri@mail.unpas.ac.id',
    'Jurusan' => 'Teknik Informatika'
],
[
    'Nama' => 'Renal Mutaqqin', 
    'Nrp' => '193040037', 
    'Email' => '193040037.renal@mail.unpas.ac.id', 
    'Jurusan' => 'Teknik Informatika'
],
[
    'Nama' => 'M. Farhan Assidiq', 
    'Nrp' => '193040010', 
    'Email' => '193040011.farhan@mail.unpas.ac.id', 
    'Jurusan' => 'Teknik Informatika'
],
[
    'Nama' => 'Aji Fattah', 
    'Nrp' => '193040012', 
    'Email' => '193040012.aji@mail.unpas.ac.id', 
    'Jurusan' => 'Teknik Informatika'
]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h3>Daftar Mahasiswa</h3>

    <?php foreach($mahasiswa as $msw) { ?>
    <ul>
        <li>Nama : <?php echo $msw['Nama']; ?></li>
        <li>NRP : <?php echo $msw['Nrp']; ?></li>
        <li>Email : <?php echo $msw['Email']; ?></li>
        <li>Jurusan : <?php echo $msw['Jurusan']; ?></li>
    </ul>
    <?php } ?>
    
</body>
</html>