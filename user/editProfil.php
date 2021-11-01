<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/head.php'; ?>
</head>
<body>
<?php $page = 'registerPage'; include 'includes/navbar.php'; ?>

<div class="bg bg-light text-dark">
    <div class="container min-vh-100 mt-5 d-flex align-items-center justify-content-center">
        <div class="card text-dark bg-light ma-5 shadow " style="min-width: 25rem;">
            <div class="card-header fw-bold">Edit Data Pemesan</div>
            <div class="card-body">
                <form action="../process/registerProcess.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <input class="form-control" id="nama" name="nama" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Umur</label>
                        <input class="form-control" id="umur" name="umur" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nomor HP</label>
                        <input class="form-control" id="noHP" name="noHP" aria-describedby="emailHelp">
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary" name="update">update</button>
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
