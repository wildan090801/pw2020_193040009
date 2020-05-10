<?php
// function untuk melakukan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("Koneksi ke DB gagal");
    mysqli_select_db($conn, "tubes_193040009") or die("Database salah!");
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

// function untuk menghapus data dalam database
function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM alat_musik WHERE id = $id");

    return mysqli_affected_rows($conn);
}

// function untuk mengubah data pada database
function ubah($data)
{
    $conn = koneksi();
    $id = htmlspecialchars($data['id']);
    $gambar = htmlspecialchars($data['Gambar']);
    $alat_musik = htmlspecialchars($data['Alat_musik']);
    $merk = htmlspecialchars($data['Merk']);
    $cara_bermain = htmlspecialchars($data['Cara_bermain']);
    $harga = htmlspecialchars($data['Harga']);

    $query = "UPDATE alat_musik
             SET
            Gambar = '$gambar',
            Alat_musik = '$alat_musik',
            Merk = '$merk',
            Cara_bermain = '$cara_bermain',
            Harga = '$harga'
            WHERE id = '$id'
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
        alert('username sudah digunakan');
        </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
