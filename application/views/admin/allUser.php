<?php
$main = "All Users";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php echo $main; ?></title>
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
                  <div>End Users
                    <div class="page-title-subheading">List of all signed up developer.</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="main-card mb-3 card">
              <div class="table-responsive">
                <table class="align-middle text-truncate mb-0 table table-borderless table-hover">
                  <thead>
                    <tr>
                      <th class="text-center">User ID</th>
                      <th class="text-center">Avatar</th>
                      <th class="text-center">Name</th>
                      <th class="text-center">Email</th>
                      <th class="text-center">Mobile No.</th>
                      <th class="text-center">Gender</th>
                      <th class="text-center">Date of Birth</th>
                      <th class="text-center">City</th>
                      <th class="text-center">State</th>
                      <th class="text-center">Status</th>
                      <th class="text-center">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($users as $u) {
                    ?>
                      <tr>
                        <td class="text-center text-muted" style="width: 80px;"><?php echo $u->UserId ?></td>
                        <td class="text-center" style="width: 80px;">
                          <img width="40" class="rounded-circle" src="<?php echo base_url("resources/shared/images/$u->ProfileImage") ?>" alt>
                        </td>
                        <td class="text-center"> <?php echo $u->Username ?> </td>
                        <td class="text-center"> <?php echo $u->Email ?> </td>
                        <td class="text-center"> <?php echo $u->MobileNo ?> </td>
                        <td class="text-center"> <?php echo $u->Gender ?> </td>
                        <td class="text-center"> <?php echo $u->DOB ?> </td>
                        <td class="text-center"> <?php echo $u->CityName ?> </td>
                        <td class="text-center"> <?php echo $u->StateName ?> </td>
                        <td class="text-center"> <?php echo $u->Status ?> </td>
                        <td class="text-center">
                          <button class="btn-shadow btn btn-primary"><a href="<?php echo site_url("admin/User/removeUser/" . $u->UserId) ?>" style="color: white;">
                              Delete
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
  </div>

</body>
<!--   Core JS Files   -->
<?php include_once("bottomscripts.php"); ?>

</html>