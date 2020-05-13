<?php
// function untuk melakukan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "pw19009", "#Akun#193040009#") or die("Koneksi ke DB gagal");
    mysqli_select_db($conn, "pw19009_tubes_193040009") or die("Database salah!");
    return $conn;
}


// function untuk melakukan query ke database
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

// function untuk menambahkan data ke dalam database
function tambah($data)
{
    $conn = koneksi();

    $gambar = htmlspecialchars($data['Gambar']);
    $alat_musik = htmlspecialchars($data['Alat_musik']);
    $merk = htmlspecialchars($data['Merk']);
    $cara_bermain = htmlspecialchars($data['Cara_bermain']);
    $harga = htmlspecialchars($data['Harga']);

    $query = "INSERT INTO alat_musik
                    VALUES
                    ('','$gambar','$alat_musik','$merk','$cara_bermain','$harga')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
