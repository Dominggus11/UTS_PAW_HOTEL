<!--- Navigation -->
<nav class="navbar navbar-dark bg-dark navbar-expand-md fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img class="logo" src="img/p4.png"></a> <button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link <?php if($page == 'home') {echo 'active';}?> " href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($page == 'login') {echo 'active';}?>" href="login.php">Log In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($page == 'register') {echo 'active';}?>" href="register.php">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($page == 'admin') {echo 'active';}?>" href="./admin/login.php">ADMIN</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<!--- End Navigation -->