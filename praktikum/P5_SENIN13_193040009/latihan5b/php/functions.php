<?php
    // function untuk melakukan koneksi ke database
    function koneksi() {
        $conn = mysqli_connect("localhost", "pw19009", "#Akun#193040009#") or die ("koneksi ke DB gagal");
        mysqli_select_db($conn, "pw19009_tubes_193040009") or die("Database salah!");

        return $conn;
    }

    // function untuk melakukan query ke database
    function query($sql){
        $conn = koneksi();
        $result = mysqli_query($conn, "$sql");

        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        
        return $rows;
    }
