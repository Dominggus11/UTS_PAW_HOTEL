<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/head.php'; ?>
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

    <?php $page = 'roomtype'; include 'includes/navbar.php'; ?>
    <!--- Today's best deals -->
    <div class="container-fluid mt-auto background">
        <div class="container" style="margin-top: 50px">
            <div class="row justify-content-around text-center">
                <div class="col col-sm-6 px-5">
                    <div class="card text-center">
                        <div class="inner"><img class="card-img-top" src="img/single.jpg" height="300px" alt="" /></div>
                        <div class="card-body">
                            <h2 class="card-title">Single</h2>
                            <h6 class="card-text">IDR 499.999/day</h6>
                            <a href="booking.php" class="btn btn-lg btn-primary">Book Now!</a>
                        </div>
                    </div>
                </div>

                <div class="col col-sm-6 px-5">
                    <div class="card text-center">
                        <div class="inner"><img class="card-img-top" src="img/kamar2.jpg"  height="300px"  alt="" /></div>
                        <div class="card-body">
                            <h2 class="card-title">Deluxe</h2>
                            <h6 class="card-text">IDR 999.999/day</h6>
                            <a href="booking.php" class="btn btn-lg btn-primary">
                                Book Now!
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col col-sm-6 px-5">
                    <div class="card text-center">
                        <div class="inner"><img class="card-img-top" src="img/kamar3.jpg"  height="300px"  alt="" /></div>
                        <div class="card-body">
                            <h2 class="card-title">Double</h2>
                            <h6 class="card-text">IDR 1.499.999/day</h6>
                            <a href="booking.php" class="btn btn-lg btn-primary">
                                Book Now!
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col col-sm-6 px-5">
                    <div class="card text-center">
                        <div class="inner"><img class="card-img-top" src="img/luxury.jpg"  height="300px"  alt="" /></div>
                        <div class="card-body">
                            <h2 class="card-title">Luxury</h2>
                            <h6 class="card-text">IDR 2.499.999/day</h6>
                            <a href="booking.php" class="btn btn-lg btn-primary">
                                Book Now!
                            </a>
                        </div>
                    </div>
                </div>

            </div><!--- End Row -->
        </div><!--- End Container -->
    </div>
    <!--- End Jumbotron -->

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>  
</body>
</html>

