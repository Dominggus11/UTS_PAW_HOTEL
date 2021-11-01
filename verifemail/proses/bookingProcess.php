<?php
// untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
// $_POST itu method di formnya
if (isset($_POST['pesan'])) {
    // untuk mengoneksikan dengan database dengan memanggil file db.php
    include('../../koneksi.php');
    // tampung nilai yang ada di from ke variabel
    // sesuaikan variabel name yang ada di registerPage.php disetiap input
    $tipe = $_POST['tipe'];
    $harga = $_POST['harga'];
    $namapemesan = $_POST['namapemesan'];
    $jumlahorang = $_POST['jumlahorang'];
    $tanggalcheckin = $_POST['tanggalcheckin'];
    $tanggalcheckout = $_POST['tanggalcheckout'];
    // Melakukan insert ke databse dengan query dibawah ini
    $query = mysqli_query(
        $con,
        "INSERT INTO booking(tipe, harga, namapemesan, jumlahorang, tanggalcheckin, tanggalcheckout)
VALUES
('$tipe', '$harga', '$namapemesan', '$jumlahorang', '$tanggalcheckin', '$tanggalcheckout')"
    )
        or die(mysqli_error($con));
    // perintah mysql yang gagal dijalankan ditanganioleh perintah “or die”
    if ($query) {
        echo
        '<script>
            alert("Create Data Success");
            window.location = "../home.php"
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
