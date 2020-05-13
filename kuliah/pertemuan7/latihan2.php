<?php

$mahasiswa = [['Muhammad Wildhan', '193040009', 'muhammadwildan334@gmail.com', 'Teknik Informatika'],
['Fahri Arliansyah', '193040011', '193040011.fahri@mail.unpas.ac.id', 'Teknik Informatika'],
['Renal Mutaqqin', '193040037', '193040037.renal@mail.unpas.ac.id', 'Teknik Informatika'],
['M. Farhan Assidiq', '193040010', '193040011.farhan@mail.unpas.ac.id', 'Teknik Informatika'],
['Aji Fattah', '193040012', '193040012.aji@mail.unpas.ac.id', 'Teknik Informatika']];

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
        <li>Nama : <?php echo $msw[0]; ?></li>
        <li>NRP : <?php echo $msw[1]; ?></li>
        <li>Email : <?php echo $msw[2]; ?></li>
        <li>Jurusan : <?php echo $msw[3]; ?></li>
    </ul>
    <?php } ?>
    
</body>
</html>