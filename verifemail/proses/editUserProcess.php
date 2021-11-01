<?php
// untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
// $_POST itu method di formnya
if (isset($_POST['update'])) {
    // untuk mengoneksikan dengan database dengan memanggil file db.php
    include('../../koneksi.php');
    // tampung nilai yang ada di from ke variabel
    // sesuaikan variabel name yang ada di registerPage.php disetiap input
    $id = $_POST['id'];
    $username = $_POST['username'];
    $umur = $_POST['umur'];
    $nomorhp = $_POST['nomorhp'];
    // $email = $_POST['email'];
    $password = $_POST['password'];
    $password = password_hash($password, PASSWORD_DEFAULT);
    // Melakukan update ke databse dengan query dibawah ini
    $query = mysqli_query(
        $con,
        "UPDATE users SET 
                username = '$username', umur = '$umur', nomorhp = '$nomorhp',password ='$password'
                WHERE id = $id")
        or die(mysqli_error($con));
    // perintah mysql yang gagal dijalankan ditanganioleh perintah “or die”
    if ($query) {
        echo
        '<script>
            alert("Update Data Success");
            header("location: ./../login.php");
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
