<?php
$title = "Home";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $title; ?></title>
    <?php include_once("topscripts.php"); ?>
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
        <?php include_once("header.php"); ?>
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <?php include_once("nav bar.php"); ?>
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div>Wellcome to Community Management - Admin Dashboard
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="app-wrapper-footer">
                    <div class="app-footer">
                        <?php include_once("footer.php"); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="./assets/scripts/main.d810cf0ae7f39f28f336.js"></script>
</body>
<!--   Core JS Files   -->
<?php include_once("bottomscripts.php"); ?>

</html>