<?php
include "../shared/addh.php";
include "../shared//nav.php";
include "../shared/asaid.php";
include "../genral/config.php";
include "../genral/function.php";




// ================================================================
if (isset($_POST['send'])) {
    $username = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $insert = "INSERT INTO `lawyers`(`id`, `name`, `password`, `email`) VALUES (NULL,' $username',' $pass ','    $email')";
    $i = mysqli_query($conn, $insert);

}
auth(1);

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
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">password</label>
                    <input type="password" name="pass" class="form-control">
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