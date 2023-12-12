<?php
$title = "Update City";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $title; ?></title>
    <?php include_once("topscripts.php"); ?>
</head>

<body>
    <div class="wrapper">
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
                                <h5 class="card-title">Update City Form</h5>
                                <form id="signupForm" class="col-md-10" method="post" action="<?php echo site_url('admin/City/editCity/' . $cityinfo[0]->CityId) ?>">
                                    <div class="form-group">
                                        <label for="txtCname">City name</label>
                                        <div>
                                            <input type="text" class="form-control" id="txtCname" name="txtCname" value="<?php echo $cityinfo[0]->CityName ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">
                                            Update
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="app-wrapper-footer">
                        <div class="app-footer">
                            <h5>Content</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="./assets/scripts/main.d810cf0ae7f39f28f336.js"></script>
    </div>

</body>
<!--   Core JS Files   -->
<?php include_once("bottomscripts.php"); ?>

</html>