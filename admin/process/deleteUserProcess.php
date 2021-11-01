<?php
if(isset($_GET['id'])){
include ('../../koneksi.php');
$id = $_GET['id'];
$queryDelete = mysqli_query($con, "DELETE FROM users WHERE id='$id'") or die(mysqli_error($con));
if($queryDelete){
echo
'<script>
    alert("Delete User Success");
    window.location = "../listUser.php"
</script>';
}else{
echo
'<script>
    alert("Delete Failed");
    window.location = "../listUser.php"
</script>';
}
}else {
echo
'<script>
    window.history.back()
</script>';
}
?>