<?php
//kobeksi ke database
$conn = mysqli_connect("localhost", "root", "", "tugas_akhirsmt5");
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function tambah_unggulans($data)
{
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $des1 = htmlspecialchars($data["des1"]);
    $des2 = htmlspecialchars($data["des2"]);

    //upload gambar
    $gambar = uploads();
    if (!$gambar) {
        return false;
    }


    //query insert data
    $query = "INSERT INTO psmartphone VALUES
    ('', '$nama', '$des1', '$des2', '$gambar')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function uploads()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek apakah ada gambar
    if ($error === 4) {
        echo "
        <script>
        alert('pilih gambar terlebih dahulu');
        </script>";
        return false;
    }

    //cek jenis gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "
        <script>
        alert('yang anda upload bukan gambar');
        </script>";
        return false;
    }

    //cek jika ukuran terlalu besar
    if ($ukuranFile > 1000000) {
        echo "
        <script>
        alert('ukuran gambar terlalu besar');
        </script>";
        return false;
    }

    //lolos pengecekan dan upload
    //generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= ',';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
    return $namaFileBaru;
}
