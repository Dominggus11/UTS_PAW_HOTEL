<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/head.php'; ?>
</head>
<style>
    .container {
        width: 30%;
    }
    .bottom_div {
        bottom: 0px;
        left: 0px;
        right: 0px;
        position:absolute;
        padding-bottom: 300px;
    }
    .p-0 {
        padding: 0 !important;
        --bs-gutter-x: 0;
        --bs-gutter-y: 0;
    }
</style>
<body>
<?php $page = 'login'; include 'includes/navbar.php'; ?>

    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="overlay-image" style="background-image:url(./img/hotelext1.jpg)"></div>
                <div class="text-dark"> <br>
                    <div class="container min-vh-100 d-flex align-items-center justify-content-center">
                        <div class="card text-dark ma-5 shadow" style="min-width: 25rem;">
                            <div class="card-header fw-bold">Register</div>
                            <div class="card-body">
                                <form action="verifemail/proses/registerProses.php" method="post">
                                    <div class="mb-2">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="input" class="form-control" id="username" name="username" placeholder="Input Username Disini" aria-describedby="emailHelp" required>
                                    </div>
                                    <div class="mb-2">
                                        <label for="umur" class="form-label">Umur</label>
                                        <input type="input" class="form-control" id="umur" name="umur" placeholder="Input Umur Disini" aria-describedby="emailHelp" required>
                                    </div>
                                    <div class="mb-2">
                                        <label for="nomorhp" class="form-label">Nomor HP</label>
                                        <input type="input" class="form-control" id="nomorhp" name="nomorhp" placeholder="08xxxxxxxxxx" aria-describedby="emailHelp" required>
                                    </div>
                                    <div class="mb-2">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="input" class="form-control" id="email" name="email" placeholder="xxxx@contoh.com" aria-describedby="emailHelp" required>
                                    </div>
                                    <div class="mb-2">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Buat password yang unik" aria-describedby="emailHelp" required>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary" name="register">Daftar</button>
                                    </div>
                                    <p class="mt-2 mb-0">Sudah punya Akun ? <a href="./login.php" class="textprimary">Klik Disini!</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>

</body>
</html>
