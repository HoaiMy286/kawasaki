<!-- include header.php -->
<?php include 'includes/header.php'; ?>

<?php 
    $login_check = Session::get('customer_login');
    if ($login_check==false) {
        header('Location:login.php');
    }
?>

<div class="homeVehicles">
    <div class="container">
        <h2>oder</h2>
    </div>
</div>

<!-- include footer.php -->
<?php include 'includes/footer.php'; ?>
