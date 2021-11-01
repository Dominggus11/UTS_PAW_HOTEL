<?php
//import koneksi ke database
session_start();
    if (!$_SESSION['isLogin']) {
      header("location: ./login.php");
    } else {
        include 'includes/head.php'; 
        include '../koneksi.php'; 
    }
?>
<html>
<head>
    <title>Report Booking</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
<div class="container">
				<div class="data-tables datatable-dark">
					
					<!-- Masukkan table nya disini, dimulai dari tag TABLE -->
                    <table class="table table-bordered" id="export">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Nama Pemesan</th>
                                <th scope="col">Jumlah Orang</th>
                                <th scope="col">Check In</th>
                                <th scope="col">Check Out</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = mysqli_query($con, "SELECT * FROM booking") or die(mysqli_error($con));
                            if (mysqli_num_rows($query) == 0) {
                                echo '<tr> <td colspan="6" class="text-center"> Tidak ada User </td> </tr>';
                            } else {
                                $no = 1;
                                while ($data = mysqli_fetch_assoc($query)) {
                                    echo '
                                        <tr>
                                        <th scope="row">' . $no . '</th>
                                        <td>' . $data['harga'] . '</td>
                                        <td>' . $data['namapemesan'] . '</td>
                                        <td>' . $data['jumlahorang'] . '</td>
                                        <td>' . $data['tanggalcheckin'] . '</td>
                                        <td>' . $data['tanggalcheckout'] . '</td>
                                        
                                        </tr>';
                                            $no++;
                                }
                            }
                            ?>
                        </tbody>
                    </table>
					<a href="./sidebar.php">Back</a>
				</div>
</div>
	
<script>
$(document).ready(function() {
    $('#export').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'pdf', 'print'
        ]
    } );
} );

</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

	

</body>

</html>