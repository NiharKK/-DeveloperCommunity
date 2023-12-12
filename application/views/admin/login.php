<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <title>Admin Login</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('resources/admin/') ?>assets/img/apple-icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="ArchitectUI HTML Bootstrap 4 Dashboard Template">

    <meta name="msapplication-tap-highlight" content="no">

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url('resources/admin/') ?>maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="<?php echo base_url('resources/admin/') ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url('resources/admin/') ?>assets/css/light-bootstrap-dashboard790f.css?v=2.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?php echo base_url('resources/admin/') ?>assets/css/demo.css" rel="stylesheet" />

    <link href="<?php echo base_url('resources/admin/') ?>assets/css/main.d810cf0ae7f39f28f336.css" rel="stylesheet">
</head>

<body>
    <div class="wrapper wrapper-full-page">
        <div class="app-container app-theme-white body-tabs-shadow">
            <div class="app-container">
                <div class="h-100">
                    <div class="h-100 no-gutters row">
                        <div class="d-none d-lg-block col-lg-4">
                            <div class="slider-light">
                                <div class="slick-slider">
                                    <div class="position-relative h-100 d-flex justify-content-center align-items-center bg-plum-plate" tabindex="-1">
                                        <div class="slide-img-bg" style="background-image: url('assets/images/originals/city.jpg');"></div>
                                        <div class="slider-content">
                                            <h3>Developer Comunity</h3>
                                            <p>
                                                Admin Dashboard
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="h-100 d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8">
                            <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                                <div>
                                    <form class="form" method="post" action="<?php echo site_url('admin/Login/validateLogin') ?>">
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <div class="position-relative form-group">
                                                    <label for="txtUname" class>User Name</label>
                                                    <input name="txtUname" id="txtUname" placeholder="Email here..." type="text" class="form-control">
                                                </div>
                                                <div class="position-relative form-group">
                                                    <label for="password" class>Password</label>
                                                    <input name="txtPwd" id="txtPwd" placeholder="Password here..." type="password" class="form-control">
                                                </div>
                                                <?php
                                                if (isset($loginErr)) {
                                                ?>

                                                    <div class="position-relative form-group">
                                                        <p style="color: red"><?php echo $loginErr; ?></p>
                                                    </div>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <!-- <div class="card-footer ml-auto mr-auto">
                                        <a href="<?php echo site_url('admin/Login/loadForgetPassword'); ?>" class="btn btn-warning btn-wd">Forgot Password</a>
                                        </div> -->
                                        <div class="divider row"></div>
                                        <div class="d-flex align-items-center">
                                            <div class="ml-auto">
                                                <button type="submit" class="btn btn-primary btn-lg">Login to Dashboard</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <?php include_once("footer.php"); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <script type="text/javascript" src="./assets/scripts/main.d810cf0ae7f39f28f336.js"></script> -->
    </div>

</body>
<!--   Core JS Files   -->
<script src="<?php echo base_url('resources/admin/') ?>assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('resources/admin/') ?>assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('resources/admin/') ?>assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: https://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="<?php echo base_url('resources/admin/') ?>assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
<!--  Chartist Plugin  -->
<script src="<?php echo base_url('resources/admin/') ?>assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo base_url('resources/admin/') ?>assets/js/plugins/bootstrap-notify.js"></script>
<!--  Share Plugin -->
<script src="<?php echo base_url('resources/admin/') ?>assets/js/plugins/jquery.sharrre.js"></script>
<!--  jVector Map  -->
<script src="<?php echo base_url('resources/admin/') ?>assets/js/plugins/jquery-jvectormap.js" type="text/javascript"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="<?php echo base_url('resources/admin/') ?>assets/js/plugins/moment.min.js"></script>
<!--  DatetimePicker   -->
<script src="<?php echo base_url('resources/admin/') ?>assets/js/plugins/bootstrap-datetimepicker.js"></script>
<!--  Sweet Alert  -->
<script src="<?php echo base_url('resources/admin/') ?>assets/js/plugins/sweetalert2.min.js" type="text/javascript"></script>
<!--  Tags Input  -->
<script src="<?php echo base_url('resources/admin/') ?>assets/js/plugins/bootstrap-tagsinput.js" type="text/javascript"></script>
<!--  Sliders  -->
<script src="<?php echo base_url('resources/admin/') ?>assets/js/plugins/nouislider.js" type="text/javascript"></script>
<!--  Bootstrap Select  -->
<script src="<?php echo base_url('resources/admin/') ?>assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
<!--  jQueryValidate  -->
<script src="<?php echo base_url('resources/admin/') ?>assets/js/plugins/jquery.validate.min.js" type="text/javascript"></script>
<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="<?php echo base_url('resources/admin/') ?>assets/js/plugins/jquery.bootstrap-wizard.js"></script>
<!--  Bootstrap Table Plugin -->
<script src="<?php echo base_url('resources/admin/') ?>assets/js/plugins/bootstrap-table.js"></script>
<!--  DataTable Plugin -->
<script src="<?php echo base_url('resources/admin/') ?>assets/js/plugins/jquery.dataTables.min.js"></script>
<!--  Full Calendar   -->
<script src="<?php echo base_url('resources/admin/') ?>assets/js/plugins/fullcalendar.min.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?php echo base_url('resources/admin/') ?>assets/js/light-bootstrap-dashboard790f.js?v=2.0.1" type="text/javascript"></script>
<!-- Light Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url('resources/admin/') ?>assets/js/demo.js"></script>
<script>
    $(document).ready(function() {
        demo.checkFullPageBackgroundImage();

        setTimeout(function() {
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>
<!-- Facebook Pixel Code Don't Delete -->
<script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window,
        document, 'script', '../../../../connect.facebook.net/en_US/fbevents.js');

    try {
        fbq('init', '111649226022273');
        fbq('track', "PageView");

    } catch (err) {
        console.log('Facebook Track Error:', err);
    }
</script>
<noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1" />
</noscript>
<!-- End Facebook Pixel Code -->


<!-- Mirrored from demos.creative-tim.com/light-bootstrap-dashboard-pro/examples/pages/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 May 2020 04:06:07 GMT -->

</html>