<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/head.php'; ?>
</head>
<style>
    .container {
        width: 20%;
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
                <div class="text-dark">
                    <div class="container min-vh-100 d-flex align-items-center justify-content-center">
                        <div class="card text-dark ma-5 shadow" style="min-width: 25rem;">
                            <div class="card-header fw-bold">Login</div>
                            <div class="card-body">
                                <form action="verifemail/proses/loginProses.php" method="post">
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="input" class="form-control" id="email" name="email" placeholder="Input Username Disini" aria-describedby="emailHelp" required >
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Input Umur Disini" aria-describedby="emailHelp" required>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary" name="login">Masuk</button>
                                    </div>
                                    <p class="mt-2 mb-0">Belum punya akun ? <a href="./register.php" class="textprimary">Klik Disini!</a></p>
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
