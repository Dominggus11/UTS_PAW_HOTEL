<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
            include 'includes/head.php';     
        ?>
        
</head>
<style>
    .container {
        width: 60%;
    }
    .bottom_div {
        bottom: 0px;
        left: 0px;
        right: 0px;
        position:absolute;
        padding-bottom: 50px;
    }
    .p-0 {
        /*padding-right:0.5px;*/
        /*padding-left:0.5px;*/
        /*--bs-gutter-x: 0;*/
        /*--bs-gutter-y: 0;*/
    }

</style>
<body>
    <?php $page = 'home'; include 'includes/navbar.php'; ?>
    
	<!--- Image Slider -->
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="overlay-image" style="background-image:url(img/sidekix-media-WgkA3CSFrjc-unsplash.jpg)"></div>
                <div class="container bottom_div">
                    <h1 class="display-3">Yasogami Hotel</h1>
                    <p style="text-align: justify">For the sophisticated and experienced business and leisure traveler alike, who appreciates quality and wants a friendly and accessible hotel, Yasogami provides comfortable facilities and personalized service. Having welcomed and passionately served millions of domestic and overseas guests every month for more than two decades, has earned us an unrivaled reputation as the most trusted hotel in the Archipelago and one of the most trusted names in hospitality far beyond. As we grow and expand globally, we stay true to our values and create incredible guest experiences across our eclectic hotels. We have a variety of astonishing brand choices for every taste and budget.</p>
                    <a href="roomtype.php" class="btn btn-lg btn-primary">BOOK NOW!</a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="overlay-image" style="background-image:url(img/francesca-saraco-_dS27XGgRyQ-unsplash.jpg)"></div>
                <div class="container bottom_div">
                    <h1 class="display-3">Yasogami Hotel</h1>
                    <p style="text-align: justify">For the sophisticated and experienced business and leisure traveler alike, who appreciates quality and wants a friendly and accessible hotel, Yasogami provides comfortable facilities and personalized service. Having welcomed and passionately served millions of domestic and overseas guests every month for more than two decades, has earned us an unrivaled reputation as the most trusted hotel in the Archipelago and one of the most trusted names in hospitality far beyond. As we grow and expand globally, we stay true to our values and create incredible guest experiences across our eclectic hotels. We have a variety of astonishing brand choices for every taste and budget.</p>
                    <a href="roomtype.php" class="btn btn-lg btn-primary">BOOK NOW!</a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="overlay-image" style="background-image:url(img/eunice-stahl-CxiJt88QJdQ-unsplash.jpg)"></div>
                <div class="container bottom_div">
                    <h1 class="display-3">Yasogami Hotel</h1>
                    <p style="text-align: justify">For the sophisticated and experienced business and leisure traveler alike, who appreciates quality and wants a friendly and accessible hotel, Yasogami provides comfortable facilities and personalized service. Having welcomed and passionately served millions of domestic and overseas guests every month for more than two decades, has earned us an unrivaled reputation as the most trusted hotel in the Archipelago and one of the most trusted names in hospitality far beyond. As we grow and expand globally, we stay true to our values and create incredible guest experiences across our eclectic hotels. We have a variety of astonishing brand choices for every taste and budget.</p>
                    <a href="roomtype.php" class="btn btn-lg btn-primary">BOOK NOW!</a>
                </div>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>
        </div>
    </div>
	<!--- End Image Slider -->

    <!--At Your Service-->
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-10 py-5">
                <h2 class="display-4">At Your Service</h2>
                <div class="row">
                    <div class="col col-sm-3">
                        <i class="bi-currency-dollar fs-1 text-primary"></i>
                        <h3>Value</h3>
                        <p>Our service has a quality equivalent to the price listed, the customer will get value according to the price he pays</p>
                    </div>
                    <div class="col col-sm-3">
                        <i class="bi-gem fs-1 text-primary"></i>
                        <h3>Premium</h3>
                        <p>Our service provides premium services with a professional team, ranging from waitresses, cooks, janitors, etc</p>
                    </div>
                    <div class="col col-sm-3">
                        <i class="bi-house fs-1 text-primary"></i>
                        <h3>Hospitality</h3>
                        <p>this hotel has a team that will always be friendly with anyone and will provide top quality hospitality services</p>
                    </div>
                    <div class="col col-sm-3">
                        <i class="bi-key fs-1 text-primary"></i>
                        <h3>Secure</h3>
                        <p>We are responsible for all existing rules and take care of every guest's responsibility</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!---End Service -->

<!--    Our Hotels Service-->
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-12 py-5">
				<h2 class="display-4">Our Service</h2>
                <br>
                <div class="row">
                    <div class="col col-sm-6 border rounded float-left" >
                        <img class=" img-fluid" width="100%" height="100%" src="img/roberto-nickson-h1_ILkb9tLo-unsplash.jpg">
                        <h3 style="margin-top:20px;">Swimming Pool</h3>
                        <p style="text-align: justify">Need refreshments? Then the beautiful outdoor swimming pool of Yasogami Hotel is all what you need!</p>
                    </div>
                    <div class="col col-sm-6 border rounded float-right">
                        <img class=" img-fluid" width="100%"  height="100%" src="img/stefan-schauberger-djfmhCXyxV8-unsplash.jpg" style>
                        <h3 style="margin-top:20px;">24/7 Service</h3>
                        <p style="text-align: justify">Waking up at night, feeling hungry but too lazy to buy something yourself? Don't worry! Yasogami Hotel service is ready anytime! </p>
                    </div>
                    <div class="col col-sm-6 border rounded">
                        <img class=" img-fluid" width="100%"  height="100%" src="img/tennislapang.jpg" style>
                        <h3 style="margin-top:20px;">Tennis Court</h3>
                        <p style="text-align: justify">Do you like Tennis? Yasogami Hotel provide it's guest a free to use Tennis Court if they want to do outdoor activities with other people</p>
                    </div>
                    <div class="col col-sm-6 border rounded">
                        <img class=" img-fluid" width="100%"  height="100%" src="img/risen-wang-20jX9b35r_M-unsplash.jpg" style>
                        <h3 style="margin-top:20px;">Fitness Center</h3>
                        <p style="text-align: justify">Stay healthy together with the Fitness Center of Yasogami Hotel. We will provide you all the latest fitness equipment to fulfill your workout session.</p>
                    </div>
                </div>
			</div>
		</div>
	</div>
<!--End of Our Hotels Service-->

	<!--- Today's best deals -->
	<div class="container-fluid">
		<div class="container-md">
			<h2 class="display-5" style="text-align:center">Today's Best Deal</h2>
			<div class="row justify-content-between text-center">

                <div class="col col-sm-3">
                    <div class="card text-center">
                        <div class="inner"><img class="card-img-top" src="img/single.jpg" width="250px" height="150px" alt="" /></div>
                        <div class="card-body">
                            <h2 class="card-title">Single</h2>
                            <h6 class="card-text">IDR 499.999</h6>
                        </div>
                    </div>
                </div>

                <div class="col col-sm-3">
                    <div class="card text-center">
                        <div class="inner"><img class="card-img-top" src="img/kamar2.jpg" width="250px" height="150px" alt="" /></div>
                        <div class="card-body">
                            <h2 class="card-title">Deluxe</h2>
                            <h6 class="card-text">IDR 999.999</h6>
                        </div>
                    </div>
                </div>

                <div class="col col-sm-3">
                    <div class="card text-center">
                        <div class="inner"><img class="card-img-top" src="img/kamar3.jpg" width="250px" height="150px" alt="" /></div>
                        <div class="card-body">
                            <h2 class="card-title">Double</h2>
                            <h6 class="card-text">IDR 1.499.999</h6>
                        </div>
                    </div>
                </div>

                <div class="col col-sm-3">
                    <div class="card text-center">
                        <div class="inner"><img class="card-img-top" src="img/luxury.jpg" width="250px" height="150px" alt="" /></div>
                        <div class="card-body">
                            <h2 class="card-title">Luxury</h2>
                            <h6 class="card-text">IDR 2.499.999</h6>
                        </div>
                    </div>
                </div>
			</div><!--- End Row -->
		</div><!--- End Container -->
	</div>
	<!--- End Jumbotron -->

	<!--- YASOGAMI HOTEL Section -->
    <div class="container">
        <div class="row justify-content-around align-items-center py-5">
        <h3 class="py-4 display-3" style="text-align:center">About us</h3>
            <div class="col-lg-4">
                <blockquote class="blockquote">
                    <p class="mb-0" style="text-align:left">The Yasogami Hotel is located in Special Region of Yogyakarta. We offer Gym, free parking, a tennis court, a beautiful swimming pool, and a restaurant serving hearty cuisine. Each room at The Yasogami Hotel includes a private bathroom and hairdryer. Free tea and coffee is provided in each room, along with flat-screen cable TV and free Wi-Fi.</p>
                </blockquote>
            </div>
            <div class="col-lg-8 inner"><img class="img-fluid float-end" src="img/hotelext2.jpg"></div>
        </div>
    </div>
	<!--- End Two Column Section -->

<!--    Start Guess Feedback-->
    <div class="container-md">
        <div class="container">
            <h1 class="py-4 display-5" style="text-align: center">Guest Feedback</h1>
            <div class="row justify-content-between text-center">

                <div class="col col-sm-6">
                    <div class="card text-center">
                        <div class="inner"><img class="card-img-top" src="img/userratings1.jpg" height="auto" alt="" /></div>
                        <div class="card-body">
                            <h2 class="card-title">Joko Widodo</h2>
                            <h6 class="card-text">Rating : ★★★★★</h6>
                            <p style="text-center">Hotel Yang sangat bagus. pelayanannya bagus, desain hotelnya keren, kamarnya luas dan nyaman, fasilitasnya lengkap, pemandangannya keren, dan makanannya enak</p>
                        </div>
                    </div>
                </div>

                <div class="col col-sm-6">
                    <div class="card text-center">
                        <div class="inner"><img class="card-img-top" src="img/userratings2.jpg"  height="auto"  alt="" /></div>
                        <div class="card-body">
                            <h2 class="card-title">Elon Musk</h2>
                            <h6 class="card-text">Rating : ★★★★☆</h6>
                            <p style="text-center">This is a cool Hotel. I really like the design, the service is good, the food is tasty, the facility is over the top, the view is great, overall it's a nice hotel. I love Indonesia</p>
                        </div>
                    </div>
                </div>
            </div><!--- End Row -->
        </div><!--- End Container -->
    </div>
<!--    End Guess Feedback-->

    <!--Start gambar-gambar-->
    <div class="container-xxl justify-content-around" style="padding-bottom:10px; margin-top:200px">
        <h1 class="py-4 display-6" style="text-align: center">Our Gallery</h1>
        <div class="row">
            <div class="col-lg-4 col-sm-6 p-0 obj-fit inner"><img class="img-fluid" style="width: auto; height:300px; padding: 4px" src="img/hotelext2.jpg" ></div>
            <div class="col-lg-4 col-sm-6 p-0 obj-fit inner"><img class="img-fluid" style="width: 500px; height:300px; padding: 4px" src="img/swimpool.jpg"></div>
            <div class="col-lg-4 col-sm-6 p-0 obj-fit inner"><img class="img-fluid" style="width: 500px; height:300px; padding: 4px" src="img/luxury.jpg"></div>
            <div class="col-lg-4 col-sm-6 p-0 obj-fit inner"><img class="img-fluid" style="width: 600px; height:300px; padding: 4px" src="img/hotelext1.jpg"></div>
            <div class="col-lg-4 col-sm-6 p-0 obj-fit inner"><img class="img-fluid" style="width: 500px; height:300px; padding: 4px" src="img/resto.jpg"></div>
            <div class="col-lg-4 col-sm-6 p-0 obj-fit inner"><img class="img-fluid" style="width: 500px; height:300px; padding: 4px" src="img/fitness.jpg"></div>
            <div class="col-lg-4 col-sm-6 p-0 obj-fit inner"><img class="img-fluid" style="width: 500px; height:300px; padding: 4px" src="img/tennislapang.jpg"></div>
            <div class="col-lg-4 col-sm-6 p-0 obj-fit inner"><img class="img-fluid" style="width: 500px; height:300px; padding: 4px" src="img/beautifulscenery.jpg"></div>
            <div class="col-lg-4 col-sm-6 p-0 obj-fit inner"><img class="img-fluid" style="width: 500px; height:300px; padding: 4px" src="img/kamar3.jpg"></div>
        </div>
    </div>
    <!--End gambar-gambar-->

<?php include 'includes/footer.php'; ?>
<?php include 'includes/scripts.php'; ?>

</body>
</html>
