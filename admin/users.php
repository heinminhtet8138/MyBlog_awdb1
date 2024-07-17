<?php 
session_start();

if(isset($_SESSION['user_id']) && $_SESSION['user_role'] == 'Admin'){

    include "layouts/side_nav.php";
?>

    <h1>User Pages</h1>

<?php 

include "layouts/footer.php";

}else {
    header('location:index.php');
}

?>