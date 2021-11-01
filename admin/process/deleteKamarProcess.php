<?php
if(isset($_GET['idkamar'])){
include ('../../koneksi.php');
$idkamar = $_GET['idkamar'];
$queryDelete = mysqli_query($con, "DELETE FROM kamar WHERE idkamar='$idkamar'") or die(mysqli_error($con));
if($queryDelete){
echo
'<script>
    alert("Delete Kamar Success");
    window.location = "../kamar.php"
</script>';
}else{
echo
'<script>
    alert("Delete Failed");
    window.location = "../kamar.php"
</script>';
}
}else {
echo
'<script>
    window.history.back()
</script>';
}
?>