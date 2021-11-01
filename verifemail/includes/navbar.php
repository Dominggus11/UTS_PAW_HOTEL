<!--- Navigation -->


<nav class="navbar navbar-dark bg-dark navbar-expand-md fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img class="logo" src="img/p4.png" width="40px" height="40px"></a> <button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                   <a class="nav-link " href="./proses/logoutProcess.php">Logout</a>
                </li>
                <li class="nav-item">
                <?php
                include('../koneksi.php');
                $query = mysqli_query($con, "SELECT * FROM users") or die(mysqli_error($con));
                if (mysqli_num_rows($query) == 0) {
                    echo '  colspan="7"> Tidak ada data ';
                } else {
                    session_start();
                    $id = $_SESSION['user']['id'];
                    echo '<a class="nav-link " href="editUser.php?id=' .$id. '">Update</a>';
                    }
            ?>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--- End Navigation -->