<?php
$ad = "Admin Details";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php echo $ad; ?></title>
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
                <div>User data
                  <div class="page-title-subheading">Details of currently loged in admin
                    <?php
                    if (isset($Msg)) {
                    ?>
                      <p style="color: green">
                        <?php echo $Msg; ?>
                      </p>
                    <?php
                    }
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="main-card mb-3 card">
            <div class="table-responsive">
              <table class="align-middle text-truncate mb-0 table table-borderless table-hover">
                <thead>
                  <tr>
                    <th class="text-center">Admin ID</th>
                    <th class="text-center">Admin Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Profile Image</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach ($Admin as $a) {
                  ?>
                    <tr>
                      <td class="text-center text-muted" style="width: 80px;">#54</td>
                      <td class="text-center"> name </td>
                      <td class="text-center"> email </td>
                      <td class="" style="padding: 20px;width: 100%;height: 100%; text-align: center;">
                        <img width="40" class="" src="<?php echo base_url('resources/shared/images/' . $a->ProfilePic); ?>" alt="" style="width: 30%;">
                      </td>
                      <td class="text-center">
                        <button class="btn-shadow btn btn-primary"><a href="<?php echo site_url("admin/Profile/loadEditProfile/" . $a->AdminId) ?>" style="color: white;">
                            Edit
                          </a></button>
                      </td>
                    </tr>
                  <?php
                  }
                  ?>
                </tbody>
              </table>
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