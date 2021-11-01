<?php
// untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
// $_POST itu method di formnya
if (isset($_POST['add'])) {
    // untuk mengoneksikan dengan database dengan memanggil file db.php
    include('../../koneksi.php');
    // tampung nilai yang ada di from ke variabel
    // sesuaikan variabel name yang ada di registerPage.php disetiap input
    $type = $_POST['type'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];
    // Melakukan insert ke databse dengan query dibawah ini
    $query = mysqli_query(
        $con,
        "INSERT INTO kamar(type, jumlah, harga)
VALUES
('$type', '$jumlah', '$harga')"
    )
        or die(mysqli_error($con));
    // perintah mysql yang gagal dijalankan ditanganioleh perintah “or die”
    if ($query) {
        echo
        '<script>
            alert("Tambah Kamar Success");
            window.location = "../kamar.php"
        </script>';
    } else {
        echo
        '<script>
            alert("Create Data Failed");
        </script>';
    }
} else {
    echo
    '<script>
window.history.back()
</script>';
}
