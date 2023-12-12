<?php
$title = "Update Profile";
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
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div>Edit Profile
                                        <div class="page-title-subheading">Update your profile here</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Upadte Admin Basic Details</h5>
                                <form id="detailUpdateForm" class="col-md-10 mx-auto" method="post" action="<?php echo site_url('admin/Profile/editBasicProfile/' . $Admin[0]->AdminId) ?>">
                                    <div class="form-group">
                                        <label for="txtAname">Name</label>
                                        <div>
                                            <input type="text" class="form-control" id="txtAname" name="txtAname" value="<?php echo $Admin[0]->Username ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="txtEmail">Email</label>
                                        <div>
                                            <input type="text" class="form-control" id="txtEmail" name="txtEmail" value="<?php echo $Admin[0]->Email ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" name="detailUpdateForm" value="Update">
                                            Update
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Upadte Admin Password</h5>
                                <form id="passwordChangeForm" class="col-md-10 mx-auto" method="post" action="<?php echo site_url('admin/Profile/editPassword/' . $Admin[0]->AdminId) ?>">
                                    <div class="form-group">
                                        <label for="txtOldPwd">Old Password</label>
                                        <input type="password" class="form-control" id="txtOldPwd" name="txtOldPwd" placeholder="Old Password" />
                                    </div>
                                    <div class="form-group">
                                        <label for="txtNewPwd">New Password</label>
                                        <input type="password" class="form-control" id="txtNewPwd" name="txtNewPwd" placeholder="New Password" />
                                    </div>
                                    <div class="form-group">
                                        <label for="txtConPwd">Confirm Password</label>
                                        <input type="password" class="form-control" id="txtConPwd" name="txtConPwd" placeholder="Re-enter New Password" />
                                    </div>

                                    <?php
                                    if (isset($Msg)) {
                                    ?>
                                        <div class="form-group">
                                            <p style="color: red">
                                                <?php
                                                echo $Msg;
                                                ?>
                                            </p>
                                        </div>
                                    <?php
                                    }
                                    ?>

                                    <?php
                                    if (isset($Err)) {
                                    ?>
                                        <div class="form-group">
                                            <p style="color: red">
                                                <?php
                                                echo $Err;
                                                ?>
                                            </p>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" name="passwordChangeForm" value="Change Password">
                                            Change Password
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Upadte Admin Profile Image</h5>
                                <form id="imageUpdateForm" class="col-md-10 mx-auto" method="post" enctype="multipart/form-data" action="<?php echo site_url('admin/Profile/editImage/' . $Admin[0]->AdminId) ?>">
                                    <div class="form-group">
                                        <label for="fup">Select Image</label>
                                        <div>
                                            <input type="file" class="form-control" id="fup" name="fup" title="Select Image" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" name="imageUpdateForm" value="Update Image">
                                            Update Image
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
    </div>

</body>
<!--   Core JS Files   -->
<?php include_once("bottomscripts.php"); ?>

</html>