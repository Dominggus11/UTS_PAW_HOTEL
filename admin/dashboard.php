<?php
session_start();
    if (!$_SESSION['isLogin']) {
      header("location: ./login.php");
    } else {
        include './sidebar.php' ;
    }

?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #1d1b31; box-shadow:
0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <h4>ABOUT DEVELOPER</h4>
    <hr>
    <div class="d-flex">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="./img/Moreno.png" width="30px" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Alessandro Moreno</h5>
                <p class="cardtext">
                    Alessandro Moreno TF 19</p>
                <a href="https://www.instagram.com/morenozoldyck" class="btn btn-primary">Follow Me</a>
            </div>
        </div>
        <div class="card mx-4" style="width: 18rem;">
            <img class="card-img-top" src="./img/Edward.png" width="30px" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Edward Sebastian</h5>
                <p class="cardtext">
                    Edward Sebastian TF 19</p>
                <a href="https://www.instagram.com/watt.18/" class="btn btn-primary">Follow Me</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="./img/Roy Malau.png" width="30px" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Roy Dominggus Andornov</h5>
                <p class="cardtext">
                    Roy Dominggus A.  Malau TF 19</p>
                <a href="https://www.instagram.com/roynov11" class="btn btn-primary">Follow Me</a>
            </div>
        </div>
    </div>
</div>
</aside>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>