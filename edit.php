<?php
include 'config.php';

// Ambil ID dari URL
$id = $_GET['id'];

// Ambil data berdasarkan ID
$result = mysqli_query($conn, "SELECT * FROM prodi WHERE id = $id");
$data = mysqli_fetch_assoc($result);

// Jika tombol simpan ditekan
if (isset($_POST['update'])) {
    $nama_prodi = $_POST['nama_prodi'];
    $kode_prodi = $_POST['kode_prodi'];
    $status = $_POST['status'];
    $jenjang = $_POST['jenjang'];
    $kaprodi = $_POST['kaprodi'];
    $fakultas = $_POST['fakultas'];

    $query = "UPDATE prodi SET 
                nama_prodi='$nama_prodi',
                kode_prodi='$kode_prodi',
                status='$status',
                jenjang='$jenjang',
                kaprodi='$kaprodi',
                fakultas='$fakultas'
              WHERE id=$id";

    if (mysqli_query($conn, $query)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Gagal memperbarui data: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Prodi</title>
</head>
<body>
    <h2>Edit Data Prodi</h2>
    <form method="post" action="">
        <label>Nama Prodi:</label><br>
        <input type="text" name="nama_prodi" value="<?php echo $data['nama_prodi']; ?>"><br><br>

        <label>Kode Prodi:</label><br>
        <input type="text" name="kode_prodi" value="<?php echo $data['kode_prodi']; ?>"><br><br>

        <label>Status:</label><br>
        <select name="status">
            <option value="Aktif" <?php if($data['status']=='Aktif') echo 'selected'; ?>>Aktif</option>
            <option value="Tidak Aktif" <?php if($data['status']=='Tidak Aktif') echo 'selected'; ?>>Tidak Aktif</option>
        </select><br><br>

        <label>Jenjang:</label><br>
        <input type="text" name="jenjang" value="<?php echo $data['jenjang']; ?>"><br><br>

        <label>Kaprodi:</label><br>
        <input type="text" name="kaprodi" value="<?php echo $data['kaprodi']; ?>"><br><br>

        <label>Fakultas:</label><br>
        <input type="text" name="fakultas" value="<?php echo $data['fakultas']; ?>"><br><br>

        <button type="submit" name="update">Simpan</button>
    </form>
</body>
</html>
