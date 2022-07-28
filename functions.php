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

function tambah_samrtphone($data)
{
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $merek = htmlspecialchars($data["merek"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $harga = htmlspecialchars($data["harga"]);

    //upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }


    //query insert data
    $query = "INSERT INTO smartphone VALUES
    ('', '$nama', '$merek', '$deskripsi', '$harga', '$gambar')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function tambah_psmartphone($data)
{
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $des1 = htmlspecialchars($data["des1"]);
    $des2 = htmlspecialchars($data["des2"]);

    //upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }


    //query insert data
    $query = "INSERT INTO pu_smartphone VALUES
    ('', '$nama', '$des1', '$des2', '$gambar')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function tambah_laptop($data)
{
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $merek = htmlspecialchars($data["merek"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $harga = htmlspecialchars($data["harga"]);

    //upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }


    //query insert data
    $query = "INSERT INTO laptop VALUES
    ('', '$nama', '$merek', '$deskripsi', '$harga', '$gambar')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function tambah_plaptop($data)
{
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $merek = htmlspecialchars($data["des1"]);
    $deskripsi = htmlspecialchars($data["des2"]);

    //upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }


    //query insert data
    $query = "INSERT INTO pu_laptop VALUES
    ('', '$nama', '$merek', '$deskripsi', '$gambar')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function tambah_acesories($data)
{
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $merek = htmlspecialchars($data["merek"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $harga = htmlspecialchars($data["harga"]);

    //upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }


    //query insert data
    $query = "INSERT INTO acesories VALUES
    ('', '$nama', '$merek', '$deskripsi', '$harga', '$gambar')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function tambah_brand($data)
{
    global $conn;
    $nama = htmlspecialchars($data["nama"]);

    //upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }


    //query insert data
    $query = "INSERT INTO logo VALUES ('', '$nama', '$gambar')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function tambah_promo($data)
{
    global $conn;
    $des1 = htmlspecialchars($data["des1"]);
    $des2 = htmlspecialchars($data["des2"]);

    //query insert data
    $query = "INSERT INTO promo VALUES ('', '$des1', '$des2')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


function upload()
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
    if ($ukuranFile > 3000) {
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
function hapus_smartphone($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM smartphone WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function hapus_psmartphone($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM pu_smartphone WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function hapus_laptop($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM laptop WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function hapus_plaptop($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM pu_laptop WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function hapus_acesories($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM acesories WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function hapus_brand($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM logo WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function hapus_promo($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM promo WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah_smartphone($data)
{
    global $conn;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $merek = htmlspecialchars($data["merek"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $harga = htmlspecialchars($data["harga"]);
    $gambarLama = htmlspecialchars($data["gambarlama"]);

    //cek apakah user pilih gambar baru
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }


    //query insert data
    $query = "UPDATE smartphone SET nama = '$nama', merek = '$merek', deskripsi = '$deskripsi', harga = '$harga', gambar = '$gambar'
                WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function ubah_psmartphone($data)
{
    global $conn;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $des1 = htmlspecialchars($data["des1"]);
    $des2 = htmlspecialchars($data["des2"]);
    $gambarLama = htmlspecialchars($data["gambarlama"]);

    //cek apakah user pilih gambar baru
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }


    //query insert data
    $query = "UPDATE pu_smartphone SET nama = '$nama', des1 = '$des1', des2 = '$des2', gambar = '$gambar'
                WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function ubah_laptop($data)
{
    global $conn;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $merek = htmlspecialchars($data["merek"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $harga = htmlspecialchars($data["harga"]);
    $gambarLama = htmlspecialchars($data["gambarlama"]);

    //cek apakah user pilih gambar baru
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }


    //query insert data
    $query = "UPDATE laptop SET nama = '$nama', merek = '$merek', deskripsi = '$deskripsi', harga = '$harga', gambar = '$gambar'
                WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function ubah_plaptop($data)
{
    global $conn;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $des1 = htmlspecialchars($data["des1"]);
    $des2 = htmlspecialchars($data["des2"]);
    $gambarLama = htmlspecialchars($data["gambarlama"]);

    //cek apakah user pilih gambar baru
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }


    //query insert data
    $query = "UPDATE pu_laptop SET nama = '$nama', des1 = '$des1', des2 = '$des2', gambar = '$gambar'
                WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


function ubah_acesories($data)
{
    global $conn;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $merek = htmlspecialchars($data["merek"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);
    $harga = htmlspecialchars($data["harga"]);
    $gambarLama = htmlspecialchars($data["gambarlama"]);

    //cek apakah user pilih gambar baru
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }


    //query insert data
    $query = "UPDATE acesories SET nama = '$nama', merek = '$merek', deskripsi = '$deskripsi', harga = '$harga', gambar = '$gambar'
                WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function ubah_brand($data)
{
    global $conn;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $gambarLama = htmlspecialchars($data["gambarlama"]);

    //cek apakah user pilih gambar baru
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    //query insert data
    $query = "UPDATE logo SET nama = '$nama', gambar = '$gambar' WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function ubah_promo($data)
{
    global $conn;
    $id = $data["id"];
    $des1 = htmlspecialchars($data["des1"]);
    $des2 = htmlspecialchars($data["des2"]);

    //query insert data
    $query = "UPDATE promo SET des1 = '$des1', des2 = '$des2' WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    global $conn;

    $nama_drop = strtolower(stripslashes($data["nama_drop"]));
    $jeniskelamin = strtolower(stripslashes($data["jeniskelamin"]));
    $alamat = strtolower(stripslashes($data["alamat"]));
    $email = strtolower(stripslashes($data["email"]));
    $nomor_hp = strtolower(stripslashes($data["nomor_hp"]));
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $ulangi_password = mysqli_real_escape_string($conn, $data["ulangi_password"]);

    //cek username
    $result = mysqli_query($conn, "SELECT nama_drop FROM dropshiper WHERE nama_drop = '$nama_drop'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
        alert('username telah terdaftar');
        </script>";

        return false;
    }

    //cek konfirmasi password
    if ($password !== $ulangi_password) {
        echo "<script>
        alert('konfirmasi password salah');
        </script>";

        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //enkripsi ulngi password
    $ulangi_password = password_hash($ulangi_password, PASSWORD_DEFAULT);

    //tambahkan kedatabase
    mysqli_query($conn, "INSERT dropshiper VALUES('', '$nama_drop', '$jeniskelamin', '$alamat', '$email', '$nomor_hp', 
    '$username', '$password', '$ulangi_password')");
    return mysqli_affected_rows($conn);
}

function cari_smartphone($keyword)
{
    $query = "SELECT * FROM smartphone WHERE nama LIKE '%$keyword%'";
    return query($query);
}

function cari_laptop($keyword)
{
    $query = "SELECT * FROM laptop WHERE nama LIKE '%$keyword%'";
    return query($query);
}

function cari_acesories($keyword)
{
    $query = "SELECT * FROM acesories WHERE nama LIKE '%$keyword%'";
    return query($query);
}
