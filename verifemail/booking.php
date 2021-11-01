<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/head.php'; 
    include '../koneksi.php'; 

    function query($query){
    global $con;
    $result = mysqli_query($con, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    }
    return $rows;
    }

    
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
                <form action="./proses/bookingProcess.php" method="post">
                    <!-- tipe kamar -->
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tipe Kamar</label>
                        <select id="tipe" name="tipe" class="form-control" onchange="price()">
                        <option value="">-Pilih-</option>
                        <?php
                        $sql_kamar = mysqli_query($con,"SELECT * FROM kamar") or die
                            (mysqli_error($con));
                            //var_dump($sql_kamar); die();
                            while($type_kamar = mysqli_fetch_assoc($sql_kamar)){
                                echo ' <option value="'.$type_kamar['harga'].'"> '.$type_kamar['type'];'</option> ';
                            } ?>
                        </select>
                    </div>
                    <!-- harga -->
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga Kamar</label>
                        <input type="text" readonly="readonly" class="form-control" id="harga" name="harga">

                        <script type="text/javascript">
                            function price(){
                                var data = document.getElementById("tipe").value;
                                document.getElementById("harga").value=data;
                            }
                        </script>

                    </div>

                    <!-- nama pemesan -->
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
