<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/head.php'; 
    include '../koneksi.php'; 

//     function query($query){
//         global $con;
//         $result = mysqli_query($con, $query);
//         $rows = [];
//         while ($row = mysqli_fetch_assoc($result) ){
//             $rows[] = $row;
//         }
//         return $rows;
    
//     }
// $id = $_GET["id"];
// $mhs = query("SELECT * FROM prodi WHERE id = $id")[0];
// if(isset($_POST["submit"])){ }

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
<?php $page = 'loginPage'; include 'includes/navbar.php'; ?>

<div class="bg bg-light text-dark background">
    <div class="container min-vh-100 d-flex align-items-center justify-content-center">
        <div class="card text-dark bg-light ma-5 shadow" style="min-width: 25rem;">
            <div class="card-header fw-bold">Pesan Kamar</div>
            <div class="card-body">
                                <form action="./proses/editUserProcess.php" method="post">
                                    <div class="mb-2">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="input" class="form-control" id="username" name="username" placeholder="Input Username Disini" aria-describedby="emailHelp" required>
                                    </div>
                                    <input type="hidden" name="id" value="<?=$_GET["id"];?>">  
                                    <div class="mb-2">
                                        <label for="umur" class="form-label">Umur</label>
                                        <input type="input" class="form-control" id="umur" name="umur" placeholder="Input Umur Disini" aria-describedby="emailHelp" required>
                                    </div>
                                    <div class="mb-2">
                                        <label for="nomorhp" class="form-label">Nomor HP</label>
                                        <input type="input" class="form-control" id="nomorhp" name="nomorhp" placeholder="08xxxxxxxxxx" aria-describedby="emailHelp" required>
                                    </div>
                                    <div class="mb-2">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Buat password yang unik" aria-describedby="emailHelp" required>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary" name="update">UPDATE</button>
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
    </form>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>