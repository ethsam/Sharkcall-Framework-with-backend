
<?php include_once 'views/_admin/header_admin.php';?>

    <div id="wrapper">

        <!-- Menu and Navbar -->
        <?php include_once 'views/_admin/admin_menu.php';?>
        <!-- /Menu and Navbar -->

        <!-- Page -->
        <?php include_once 'views/_admin/'.$pageAdmin.'.php'; ?>
        <!-- /Page -->

    </div>
    
<?php include_once '/_functions/admin-ajax.php';?>

<?php include_once 'views/_admin/footer_admin.php';?>
