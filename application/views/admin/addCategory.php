<?php
$title = "Add Category";
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
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Add Category</h5>
                            <br>
                            <form id="signupForm" class="col-md-10" method="post" action="<?php echo site_url('admin/Category/addCategory') ?>">
                                <div class="form-group">
                                    <label for="txtCname">Category name</label>
                                    <div>
                                        <input type="text" class="form-control" id="txtCname" name="txtCname" placeholder="category name retaed to programing e.g.: Python, DOM, ..." required />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" name="signup">
                                        Add
                                    </button>
                                </div>
                            </form>
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