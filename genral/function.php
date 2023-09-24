<?php
function testmassge($condathion, $massge)
{
    if ($condathion = true) {
        echo "<div style'margin-top:100px' class='alert alert-success mt-5 mx-auto w-50 pt-5'> true $massge </div> ";
    } else
        echo "<div class='alert alert-danger mt-5 mx-auto w-50 pt-5'> true $massge </div> ";
    ;


}
function go($path)
{

    echo " <script>
window.location.replace('/lawyes/$path')
</script>";

}

function secure()
{
    if (isset($_SESSION['email'])) {

    } else {
        go("/pages-login.php");
    }
}
secure();

function auth($value)
{
    if ($_SESSION['role'] == $value || $_SESSION['role'] == 0) {

    } else {
        go("/pages-error-404.php");
    }

}
?>