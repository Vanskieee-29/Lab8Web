<?php
error_reporting(E_ALL);
include_once 'koneksi.php';

// =========================
// CEK ID HARUS ADA
// =========================
if (!isset($_GET['id'])) {
    die("Error: ID tidak ditemukan di URL.");
}

$id = $_GET['id'];

// =========================
// AMBIL DATA LAMA
// =========================
$sql = "SELECT * FROM data_barang WHERE id_barang = '{$id}'";
$result = mysqli_query($conn, $sql);

if (!$result || mysqli_num_rows($result) == 0) {
    die("Error: Data tidak ditemukan.");
}

$data = mysqli_fetch_array($result);

// =========================
// FUNGSI SELECT OPTION
// =========================
function is_select($val, $current)
{
    return ($val == $current) ? 'selected="selected"' : '';
}

// =========================
// KETIKA SUBMIT
// =========================
if (isset($_POST['submit']))
{
    $nama       = $_POST['nama'];
    $kategori   = $_POST['kategori'];
    $harga_jual = $_POST['harga_jual'];
    $harga_beli = $_POST['harga_beli'];
    $stok       = $_POST['stok'];
    $file_gambar = $_FILES['file_gambar'];
    $gambar = null;

    // upload gambar baru jika ada
    if ($file_gambar['error'] == 0)
    {
        $filename = str_replace(" ", "_", $file_gambar['name']);
        $destination = __DIR__ . '/gambar/' . $filename;

        if (move_uploaded_file($file_gambar['tmp_name'], $destination))
        {
            $gambar = 'gambar/' . $filename;
        }
    }

    // query update
    $sql = "UPDATE data_barang SET
                nama = '{$nama}',
                kategori = '{$kategori}',
                harga_jual = '{$harga_jual}',
                harga_beli = '{$harga_beli}',
                stok = '{$stok}'";

    if (!empty($gambar)) {
        $sql .= ", gambar = '{$gambar}'";
    }

    $sql .= " WHERE id_barang = '{$id}'";

    mysqli_query($conn, $sql);

    header('Location: index.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ubah Barang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Ubah Barang</h1>

    <form method="post" enctype="multipart/form-data">

        <div class="input">
            <label>Nama Barang</label>
            <input type="text" name="nama" value="<?php echo $data['nama']; ?>">
        </div>

        <div class="input">
            <label>Kategori</label>
            <select name="kategori">
                <option value="Komputer"   <?php echo is_select('Komputer', $data['kategori']); ?>>Komputer</option>
                <option value="Elektronik" <?php echo is_select('Elektronik', $data['kategori']); ?>>Elektronik</option>
                <option value="Hand Phone" <?php echo is_select('Hand Phone', $data['kategori']); ?>>Hand Phone</option>
            </select>
        </div>

        <div class="input">
            <label>Harga Jual</label>
            <input type="text" name="harga_jual" value="<?php echo $data['harga_jual']; ?>">
        </div>

        <div class="input">
            <label>Harga Beli</label>
            <input type="text" name="harga_beli" value="<?php echo $data['harga_beli']; ?>">
        </div>

        <div class="input">
            <label>Stok</label>
            <input type="text" name="stok" value="<?php echo $data['stok']; ?>">
        </div>

        <div class="input">
            <label>File Gambar</label>
            <input type="file" name="file_gambar">
        </div>

        <div class="submit">
            <input type="submit" name="submit" value="Simpan">
        </div>

    </form>
</div>
</body>
</html>
