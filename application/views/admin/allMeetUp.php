<?php
$me = "All MeetUp";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php echo $me; ?></title>
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
                  <div>All Meat Up's
                    <div class="page-title-subheading">List of meeet-up;'s for every Community</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="main-card mb-3 card">
              <div class="table-responsive">
                <table class="align-middle text-truncate mb-0 table table-borderless table-hover">
                  <thead>
                    <tr>
                      <th class="text-center">MeetUp ID</th>
                      <th class="text-center">Topic</th>
                      <th class="text-center">Creator</th>
                      <th class="text-center">Description</th>
                      <th class="text-center">Created On</th>
                      <th class="text-center">Status</th>
                      <th class="text-center">Total Seates</th>
                      <th class="text-center">Address</th>
                      <th class="text-center">City Name</th>
                      <th class="text-center">MeetUp Date</th>
                      <th class="text-center">Begins at</th>
                      <th class="text-center">Ends at</th>
                      <th class="text-center">Community</th>
                      <th class="text-center">Cover Image</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($meetup as $m) {
                    ?>
                      <tr>
                        <td class="text-center text-muted" style="width: 80px;"><?php echo $m->MeetUpId ?></td>
                        <td class="text-center"> <?php echo $m->Topic ?> </td>
                        <td class="text-center"> <?php echo $m->UserName ?> </td>
                        <td class="text-center"> <?php echo $m->Description ?> </td>
                        <td class="text-center"> <?php echo $m->CreatedDt ?> </td>
                        <td class="text-center"> <?php echo $m->Status ?> </td>
                        <td class="text-center"> <?php echo $m->TotalSeats ?> </td>
                        <td class="text-center"> <?php echo $m->Address ?> </td>
                        <td class="text-center"> <?php echo $m->CityName ?> </td>
                        <td class="text-center"> <?php echo $m->MeetUpDate ?> </td>
                        <td class="text-center"> <?php echo $m->TimingsFrom ?> </td>
                        <td class="text-center"> <?php echo $m->TimingsTo ?> </td>
                        <td class="text-center"> <?php echo $m->Title ?> </td>
                        <td class="" style="padding: 0;width: 150%;height: 150%;">
                          <img width="40" class="" src="<?php echo base_url("resources/shared/images/$m->CoverImage") ?>" alt="" style="width: 100%;">
                        </td>
                        <!-- <td class="text-center">
                          <button class="btn-shadow btn btn-primary"><a href="<?php echo site_url("admin/Community/removeMeetUp/" . $c->MeetUpId) ?>" style="color: white;">
                              Delete
                            </a></button>
                        </td> -->
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