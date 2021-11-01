<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    session_start();
    if (!$_SESSION['isLogin']) {
      header("location: ./login.php");
    } else {
        include 'includes/head.php'; 
        include '../koneksi.php'; 
    }
    function query($query){
    global $con;
    $result = mysqli_query($con, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    }
    return $rows;
    }

    
?>
</head>
<body>
<style>
    .background {
        background-image: url("img/marten-bjork-n_IKQDCyrG0-unsplash.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
</style>
<?php $page = 'login'; include 'includes/navbar.php'; ?>

<div class="bg bg-light text-dark background">
    <div class="container min-vh-100 d-flex align-items-center justify-content-center">
        <div class="card text-dark bg-light ma-5 shadow" style="min-width: 25rem;">
            <div class="card-header fw-bold">ADD KAMAR</div>
            <div class="card-body">
                <form action="./process/addKamarProcess.php" method="post">
                    <!-- tipe kamar -->
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipe Kamar</label>
                        <input type="input" class="form-control" id="type" name="type" aria-describedby="emailHelp" required>
                    </div>

                    <!-- jumlah kamar -->
                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Jumlah Kamar</label>
                        <input type="input" class="form-control" id="jumlah" name="jumlah" aria-describedby="emailHelp" required>
                    </div>
                    <!-- Harga kamar -->
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga Kamar</label>
                        <input type="input" class="form-control" id="harga" name="harga" aria-describedby="emailHelp" required>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary" name="add">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>

</body>
</html>
