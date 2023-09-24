<?php
include "../shared/addh.php";
include "../shared//nav.php";
include "../shared/asaid.php";
include "../genral/config.php";
include "../genral/function.php";




// ================================================================
if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $img_name = $_FILES['img']['name'];
    $img_temp = $_FILES['img']['tmp_name'];
    $locahion = "./upload/$img_name";
    $move = move_uploaded_file($img_temp, $locahion);


    $insert = "INSERT INTO `admin`VALUES (NULL,'$name','$email','$password','$img_name', $role)";
    $i = mysqli_query($conn, $insert);


}
auth(0);
?>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>
</script>
<main id="main" class="main">

    <div class="container p-5">
        <div class="card p-5">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">img</label>
                    <input type="file" name="img" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">role</label>
                    <select class="form-control" name="role" id="">
                        <option value="0">all Acces</option>
                        <option value="1">all Acces with out admin</option>
                        <option value="2">all Acces with out admin and artical</option>
                    </select>
                </div>

                <button class="btn btn-info mt-3 " name="send">send data</button>

            </form>
        </div>
    </div>


</main>



<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>
<?php
include "../shared/adds.php";
include "../shared/footer.php"; ?>