<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <b>Form Pendaftaran Peserta Workshop</b>
    <form action="tampil_data.php" method="GET">
        <ul>
            <li>
                <label for="noktp">No.KTP : </label>
                <input type="text" name="noktp">
            </li><br>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama">
            </li><br>
            <li>Alamat : <br>
                <textarea name="alamat">
               Jln. Cisanggarung No.2 Bandung
                </textarea></br>
            </li><br>
            <li>
                <button type="submit">Daftar</button>
            </li>
        </ul>
    </form>
    
</body>
</html>