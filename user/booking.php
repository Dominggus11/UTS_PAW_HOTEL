<?php
    session_start();
    if(isset($_SESSION['isLogin'])){
        echo "halo lagi, ".$_SESSION['user']['username'];
    }else {
        echo 'LOGIN DULU GAN <a href="login.php">login</a>';        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/head.php'; ?>
    <style>
    .container {
        width: 20%;
    }
</style>
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
<?php $page = 'loginPage'; include 'includes/navbar.php'; ?>

<div class="bg bg-light text-dark background">
    <div class="container min-vh-100 d-flex align-items-center justify-content-center">
        <div class="card text-dark bg-light ma-5 shadow" style="min-width: 25rem;">
        <br><br>
            <div class="card-header fw-bold">Pesan Kamar</div>
            <div class="card-body">
            <form action="bookingProcess.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tipe Kamar</label>
                        <select class="form-select" aria-label="Default select example" name="tipekamar" id="tipekamar">
                        <option value="Single">Single - Rp. 499.999</option>
                        <option value="Deluxe">Deluxe - Rp. 999.999</option>
                        <option value="Double">Double - Rp. 1.499.999</option>
                        <option value="Luxury">Luxury - Rp. 2.499.999</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="namapemesan" class="form-label">Nama Pemesan</label>
                        <input type="input" class="form-control" id="namapemesan" name="namapemesan" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="jumlahorang" class="form-label">Jumlah Orang</label>
                        <input type="input" class="form-control" id="jumlahorang" name="jumlahorang" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggalcheckin" class="form-label">Tanggal Check In</label>
                        <input type="date" class="form-control" id="tanggalcheckin" name="tanggalcheckin" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggalcheckout" class="form-label">Tanggal Check Out</label>
                        <input type="date" class="form-control" id="tanggalcheckout" name="tanggalcheckout" aria-describedby="emailHelp" required>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary" name="pesan">Pesan</button>
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
