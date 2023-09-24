<?php
include "../shared/addh.php";
include "../shared//nav.php";
include "../shared/asaid.php";
include "../genral/config.php";
include "../genral/function.php";

// ================================================


if (isset($_GET['show'])) {
    $id = $_GET['show'];
    $selectone = "SELECT * FROM `articels` WHERE id=$id";
    $ss = mysqli_query($conn, $selectone);
    $row = mysqli_fetch_assoc($ss);


}
?>


<main id="main" class="main">
    <h1>show Artical</h1>

    <div class="container  "></div>
    <div class="card p-5" style="width: %50;">
        <img style="height:300px;width:250px;margin:auto"src="./upload/<?=$row['img']?>"class="card-img-top"
            alt="...">
        <div class="card-body">
            <h1 style="text-align:center" class="card-title">
                <?= $row['title'] ?>
            </h1>
            <p class="card-text" style="text-align:center">
                <?= $row['post'] ?>
            </p>

        </div>
    </div>
</main>




<?php
include "../shared/adds.php";
include "../shared/footer.php"; ?>