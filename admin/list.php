<?php
include "../shared/addh.php";
include "../shared/nav.php";
include "../shared/asaid.php";
include "../genral/config.php";
include "../genral/function.php";


// ================================================================
$select = "SELECT * FROM `admin` JOIN permthion on admin.role=permthion.roleid ";
$s = mysqli_query($conn, $select);


?>
<!-- =============================================================== -->
<?php


if (isset($_GET["delet"])) {
    $id = $_GET["delet"];
    $delate = "DELETE FROM `admin` WHERE id=$id";

    $d = mysqli_query($conn, $delate);

    // go("/admin/list.php");


}


?>
<!-- ================================================================ -->

<!-- ============================================================== -->
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Data Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Data</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">ADmin list</h5>



                        <!-- Table with stripped rows -->
                        <table class="table datatable text-center">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">email</th>
                                    <th scope="col">password</th>
                                    <th scope="col">role</th>

                                    <th colspan="3" scope="cols">Acthion</th>

                                </tr>
                            </thead>
                            <?php foreach ($s as $data) { ?>
                                <tbody>

                                    <th scope="col">
                                        <?php echo $data['id'] ?>
                                    </th>
                                    <th scope="col">
                                        <?php echo $data['name'] ?>
                                    </th>
                                    <th scope="col">
                                        <?php echo $data['email'] ?>
                                    </th>
                                    <th scope="col">
                                        <?php echo $data['password'] ?>
                                    </th>
                                    <th scope="col">
                                        <?php echo $data['descropthion'] ?>
                                    </th>




                                    <th scope="col">
                                        <a href="list.php?delet=<?php echo $data['id'] ?>" class="btn btn-danger"><i
                                                class='bx bxs-message-square-x'></i></a>
                                    </th>
                                    <th scope="col">
                                        <a href="update.php?edit=<?php echo $data['id'] ?>" class="btn btn-info"><i
                                                class='bx bxs-edit'></i>
                                    </th>


                                    <?php

                            }


                            ?>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->
<?php
include "../shared/adds.php";
include "../shared/footer.php"; ?>