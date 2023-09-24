<?php
include "../shared/addh.php";
include "../shared//nav.php";
include "../shared/asaid.php";
include "../genral/config.php";
include "../genral/function.php";




// ================================================================
if (isset($_POST['send'])) {
    $title = $_POST['title'];
    $post = $_POST['post'];
    $auther = $_POST['auther'];

    $img_name = $_FILES['img']['name'];
    $img_temp = $_FILES['img']['tmp_name'];
    $locahion = "./upload/$img_name";
    $move = move_uploaded_file($img_temp, $locahion);


    $insert = "INSERT INTO `articels`VALUES (NULL,'$title','$post','$auther','$img_name',default)";
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
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">post</label>
                    <textarea type="" name="post" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="">auther</label>
                    <input type="text" name="auther" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">img</label>
                    <input type="file" name="img" class="form-control">
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