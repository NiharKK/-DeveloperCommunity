<?php
$alstate = "All State";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php echo $alstate; ?></title>
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
                  <div>States
                    <div class="page-title-subheading">
                      List of all community state's
                    </div>
                  </div>
                </div>
                <div class="page-title-actions">
                  <a href="<?php echo site_url('admin/State/loadAddState') ?>" style="color: white;">
                    <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                      Add
                    </button>
                  </a>
                </div>
              </div>
            </div>
            <div class="main-card mb-3 card">
              <div class="card-body">
                <table class="mb-0 table table-striped">
                  <thead>
                    <tr>
                      <th>State ID</th>
                      <th>State Name</th>
                      <th>Delete</th>
                      <th>Update</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($State as $s) {
                    ?>
                      <tr>
                        <th scope="row"><?php echo $s->StateId ?></th>
                        <td><?php echo $s->StateName ?></td>
                        <td class="text-center">
                          <button class="btn-shadow btn btn-primary"><a href="<?php echo site_url("admin/State/removeState/" . $s->StateId) ?>" style="color: white;">
                              Delete
                            </a></button>
                        </td>
                        <td class="text-center">
                          <button class="btn-shadow btn btn-primary"><a href="<?php echo site_url("admin/State/loadEditState/" . $s->StateId) ?>" style="color: white;">
                              Updater
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