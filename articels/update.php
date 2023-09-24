<?php
include "../shared/addh.php";
include "../shared//nav.php";
include "../shared/asaid.php";
include "../genral/config.php";
include "../genral/function.php";

// ================================================
// up date
$title = "";
$post = "";
$img = "";
$update = false;
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $selectone = "SELECT * FROM `articels` WHERE id=$id";
    $ss = mysqli_query($conn, $selectone);
    $row = mysqli_fetch_assoc($ss);
    $title = $row['title'];

    $post = $row['post'];
    $img = $row['password'];
    if (isset($_POST['update'])) {
        $title = $_POST['title'];
        $post = $_POST['post'];
        $img_name = $_FILES['img']['name'];
        $img_temp = $_FILES['img']['tmp_name'];
        $locahion = "./upload/$img_name";
        $move = move_uploaded_file($img_temp, $locahion);
        $update = "UPDATE `articels` SET `id`= Null,`title`='$title',`post`='$post',`img`='$img_name',`date`=default WHERE id=$id";
        $u = mysqli_query($conn, $update);
        go("/articels/add.php");
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
                    <label for="">title</label>
                    <input type="text" value="<?php echo " $title" ?>" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">post</label>
                    <input type="text" name="post" value="<?php echo "$post" ?> " class="form-control">
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