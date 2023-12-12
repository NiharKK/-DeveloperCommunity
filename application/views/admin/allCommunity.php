<?php
$allc = "All Communities";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php echo $allc; ?></title>
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
                  <div>Communities
                    <div class="page-title-subheading">Liston of developer's community</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="main-card mb-3 card">
              <div class="table-responsive">
                <table class="align-middle text-truncate mb-0 table table-borderless table-hover">
                  <thead>
                    <tr>
                      <th class="text-center">Community ID</th>
                      <th class="text-center">Title</th>
                      <th class="text-center">Status</th>
                      <th class="text-center">Created On</th>
                      <th class="text-center">Curator</th>
                      <th class="text-center">Profile Image</th>
                      <th class="text-center">Description</th>
                      <th class="text-center">Category</th>
                      <th class="text-center">Address</th>
                      <th class="text-center">City</th>
                      <th class="text-center">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($comm as $c) {
                    ?>
                      <tr>
                        <td class="text-center text-muted" style="width: 80px;"><?php echo $c->CommunityId ?></td>
                        <td class="text-center"> <?php echo $c->Title ?> </td>
                        <td class="text-center"> <?php echo $c->Status ?> </td>
                        <td class="text-center"> <?php echo $c->CreatedDt ?> </td>
                        <td class="text-center"> ><?php echo $c->UserName ?> </td>
                        <td class="text-center" style="width: 80px;">
                          <img width="40" class="rounded-circle" src="<?php echo base_url("resources/shared/images/$c->CoverImage") ?>" alt>
                        </td>
                        <td class="text-center"> <?php echo $c->Description ?> </td>
                        <td class="text-center"> <?php echo $c->CategoryName ?> </td>
                        <td class="text-center"> <?php echo $c->Address ?> </td>
                        <td class="text-center"> <?php echo $c->CityName ?> </td>
                        <td class="text-center">
                          <button class="btn-shadow btn btn-primary"><a href="<?php echo site_url("admin/Community/removeCommunity/" . $c->CommunityId) ?>" style="color: white;">
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