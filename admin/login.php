<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/head.php'; ?>
</head>
<style>
    <style>
    .background {
        background-image: url("img/marten-bjork-n_IKQDCyrG0-unsplash.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
</style>
    
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
                            <div class="card-header fw-bold text-center">ADMIN</div>
                            <div class="card-body">
                                <form action="./process/loginProcess.php" method="post">
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="input" class="form-control" id="username" name="username" placeholder="Username" aria-describedby="emailHelp" required >
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" aria-describedby="emailHelp" required>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary" name="login">Masuk</button>
                                    </div>
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
