<!DOCTYPE html>
<html lang="en">
<head>
    <?php session_start();
    if (!$_SESSION['isLogin']) {
      header("location: ./login.php");
    } else {
        include 'includes/head.php'; 
        include '../koneksi.php'; 
    }

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
            <div class="card-header fw-bold">EDIT KAMAR</div>
            <div class="card-body">
                                <form action="./process/editKamarProcess.php" method="post">
                                    <div class="mb-2">
                                        <label for="type" class="form-label">Tipe Kamar</label>
                                        <input type="input" class="form-control" id="type" name="type" placeholder="Tipe Kamar" aria-describedby="emailHelp" required>
                                    </div>
                                    <input type="hidden" name="idkamar" value="<?=$_GET["idkamar"];?>">  
                                    <div class="mb-2">
                                        <label for="Jumlah" class="form-label">Jumlah</label>
                                        <input type="input" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah Kamar" aria-describedby="emailHelp" required>
                                    </div>
                                    <div class="mb-2">
                                        <label for="harga" class="form-label">Harga</label>
                                        <input type="input" class="form-control" id="harga" name="harga" placeholder="Harga Kamar" aria-describedby="emailHelp" required>
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