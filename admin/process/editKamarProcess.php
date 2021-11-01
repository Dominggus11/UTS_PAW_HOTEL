<?php
// untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
// $_POST itu method di formnya
if (isset($_POST['update'])) {
    // untuk mengoneksikan dengan database dengan memanggil file db.php
    include('../../koneksi.php');
    // tampung nilai yang ada di from ke variabel
    // sesuaikan variabel name yang ada di registerPage.php disetiap input
    $idkamar = $_POST['idkamar'];
    $type = $_POST['type'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];

    // Melakukan update ke databse dengan query dibawah ini
    $query = mysqli_query(
        $con,
        "UPDATE kamar SET 
                type = '$type', jumlah = '$jumlah', harga = '$harga'
                WHERE idkamar = $idkamar")
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
            alert("UPDATE Data Failed");
        </script>';
    }
} else {
    echo
    '<script>
window.history.back()
</script>';
}
