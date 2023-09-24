<?php
include "../shared/addh.php";
include "../shared//nav.php";
include "../shared/asaid.php";
include "../genral/config.php";
include "../genral/function.php";

// ================================================
// up date
$name = "";
$pas = "";
$mail = "";
$update = false;
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $selectone = "SELECT * FROM `lawyers` WHERE id=$id";
    $ss = mysqli_query($conn, $selectone);
    $row = mysqli_fetch_assoc($ss);
    $name = $row['name'];

    $mail = $row['email'];
    $pas = $row['password'];
    if (isset($_POST['update'])) {
        $username = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $update = "UPDATE `lawyers` SET `name`='$username',`password`='$pass',`email`='$email' WHERE id=$id";
        $u = mysqli_query($conn, $update);
        go("/lawyer/add.php");
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
            <form action="" method="POST">

                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" value="<?php echo " $name" ?>" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" value="<?php echo "$mail" ?> " class="form-control">
                </div>
                <div class="form-group">
                    <label for="">password</label>
                    <input type="password" value="<?php echo "$pas" ?>" name="pass" class="form-control">
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