<?php
if(isset($_GET['id'])){
include ('../../koneksi.php');
$idkamar = $_GET['id'];
$queryDelete = mysqli_query($con, "DELETE FROM booking WHERE id='$id'") or die(mysqli_error($con));
if($queryDelete){
echo
'<script>
    alert("Delete Booking Success");
    window.location = "../listBooking.php"
</script>';
}else{
echo
'<script>
    alert("Delete Failed");
    window.location = "../listBooking.php"
</script>';
}
}else {
echo
'<script>
    window.history.back()
</script>';
}
?>