<?php
include './sidebar.php'
?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #1d1b31; box-shadow:
0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <h4 class="text-center">BOOKING KAMAR</h4>
    <hr>
    <table class="table ">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Tipe Kamar</th>
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
                echo '<tr> <td colspan="7" class="text-center"> Tidak ada User </td> </tr>';
            } else {
                $no = 1;
                while ($data = mysqli_fetch_assoc($query)) {
                    echo '
<tr>
<th scope="row">' . $no . '</th>
<td>' . $data['tipe'] . '</td>
<td>' . $data['harga'] . '</td>
<td>' . $data['namapemesan'] . '</td>
<td>' . $data['jumlahorang'] . '</td>
<td>' . $data['tanggalcheckin'] . '</td>
<td>' . $data['tanggalcheckout'] . '</td>
<td>
<a href="./process/deleteUserProcess.php?id=' . $data['id'] . '"
onClick="return confirm ( \'Yakin Ingin Menghapus User ?\')">
<i style="color: red" class="fa fa-trash"></i>  
</a>
</td>
</tr>';
                    $no++;
                }
            }
            ?>
        </tbody>
    </table>
</div>
</aside>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>