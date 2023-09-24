<?php
include "../shared/addh.php";
include "../shared//nav.php";
include "../shared/asaid.php";
include "../genral/config.php";
include "../genral/function.php";

// ================================================
// up date
$name = "";
$email = "";
$password = "";
$role = "";
$update = false;
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $selectone = " SELECT * FROM `admin`WHERE id = $id";
    $ss = mysqli_query($conn, $selectone);

    $row = mysqli_fetch_assoc($ss);
    $name = $row['name'];
    $email = $row['email'];
    $password = $row['password'];
    $role = $row['role'];



    if (isset($_POST['update'])) {
        $name = $_POST['name'];
        $role = $_POST['role'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $img_name = $_FILES['img']['name'];
        $img_temp = $_FILES['img']['tmp_name'];
        $locahion = "./upload/$img_name";
        $move = move_uploaded_file($img_temp, $locahion);
        $update = "UPDATE `admin` SET `name`='$name',`email`='$email',`password`='$password',`img`='$img_name',`role`=$role ";
        $u = mysqli_query($conn, $update);
        testmassge($u,"ipdate");
        // go("/admin/add.php");
    }
}
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
                    <label for="">Username</label>
                    <input type="text" name="name" value="<?php echo " $name" ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">email</label>
                    <input type="email" name="email" value="<?php echo "$email" ?> " class="form-control">
                </div>
                <div class="form-group">
                    <label for="">password</label>
                    <input type="password" name="password" value="<?php echo "$password" ?> " class="form-control">
                </div>
                <div class="form-group">
                    <label for="">role</label>
                    <select name="role" id="" class="form-control">
                        <option value="0">alla cces</option>
                        <option value="1">alla accses with out admin</option>
                        <option value="2">alla accses with out admin and artical</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">img</label>
                    <input type="file" name="img" value="<?php echo "$img" ?> " class="form-control">
                </div>

                <button class="btn btn-info mt-3 " name="update">update data</button>



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