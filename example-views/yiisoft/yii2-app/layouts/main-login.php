<?php
use backend\assets\AppAsset;
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

dmstr\web\ApricotAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html idmmzcc-ext-docid="644898369536" class="sb-init" lang="en"><head><style type="text/css">.gm-style .gm-style-mtc label,.gm-style .gm-style-mtc div{font-weight:400}</style><link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700"><style type="text/css">.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div{font-size:10px}</style><style type="text/css">@media print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style>
    <meta charset="utf-8">
    <title>Apricot V 1.3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <script type="text/javascript" src="assets/js/jquery.min.js" style=""></script>

    <!--  <link rel="stylesheet" href="assets/css/style.css"> -->
        <link rel="stylesheet" href="assets/css/loader-style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/signin.css">






        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/minus.png"><script type="text/javascript" src="assets/js/skin-select/jquery.cookie.js"></script><script type="text/javascript" src="assets/js/skin-select/skin-select.js"></script><script type="text/javascript" src="assets/js/clock/date.js"></script><script type="text/javascript" src="assets/js/newsticker/jquery.newsTicker.js"></script><script type="text/javascript" src="assets/js/custom/scriptbreaker-multiple-accordion-1.js"></script><script type="text/javascript" src="assets/js/slidebars/slidebars.min.js"></script><script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script><script type="text/javascript" src="assets/js/search/jquery.quicksearch.js"></script><script type="text/javascript" src="assets/js/gage/jquery.easypiechart.min.js"></script><script type="text/javascript" src="assets/js/tip/jquery.tooltipster.js"></script><script type="text/javascript" src="assets/js/nano/jquery.nanoscroller.js"></script><script type="text/javascript" src="assets/js/pace/pace.js"></script><script type="text/javascript" src="assets/js/chart/jquery.sparkline.js"></script><script type="text/javascript" src="assets/js/clock/jquery.clock.js"></script><script type="text/javascript" src="assets/js/gage/raphael.2.1.0.min.js"></script><script type="text/javascript" src="assets/js/gage/justgage.js"></script>
    <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style><script type="text/javascript" charset="UTF-8" src="http://maps.googleapis.com/maps-api-v3/api/js/28/11/common.js"></script><script type="text/javascript" charset="UTF-8" src="http://maps.googleapis.com/maps-api-v3/api/js/28/11/map.js"></script><script type="text/javascript" charset="UTF-8" src="http://maps.googleapis.com/maps-api-v3/api/js/28/11/util.js"></script><script type="text/javascript" charset="UTF-8" src="http://maps.googleapis.com/maps-api-v3/api/js/28/11/marker.js"></script><style type="text/css">.gm-style {
            font: 400 11px Roboto, Arial, sans-serif;
            text-decoration: none;
        }
        .gm-style img { max-width: none; }</style><script type="text/javascript" charset="UTF-8" src="http://maps.googleapis.com/maps-api-v3/api/js/28/11/onion.js"></script><script type="text/javascript" charset="UTF-8" src="http://maps.googleapis.com/maps/api/js/ViewportInfoService.GetViewportInfo?1m6&amp;1m2&amp;1d-7.827595750814287&amp;2d110.31435130712794&amp;2m2&amp;1d-7.7358545529786555&amp;2d110.49191491584202&amp;2u15&amp;4sen-US&amp;5e0&amp;6sm%40378000000&amp;7b0&amp;8e0&amp;callback=_xdc_._b14sa4&amp;token=92477"></script><script type="text/javascript" charset="UTF-8" src="http://maps.googleapis.com/maps-api-v3/api/js/28/11/stats.js"></script><script type="text/javascript" charset="UTF-8" src="http://maps.googleapis.com/maps-api-v3/api/js/28/11/controls.js"></script><script type="text/javascript" charset="UTF-8" src="http://maps.googleapis.com/maps/vt?pb=!1m4!1m3!1i15!2i26430!3i17093!1m4!1m3!1i15!2i26431!3i17093!1m4!1m3!1i15!2i26430!3i17094!1m4!1m3!1i15!2i26430!3i17095!1m4!1m3!1i15!2i26431!3i17094!1m4!1m3!1i15!2i26431!3i17095!1m4!1m3!1i15!2i26432!3i17093!1m4!1m3!1i15!2i26433!3i17093!1m4!1m3!1i15!2i26432!3i17094!1m4!1m3!1i15!2i26432!3i17095!1m4!1m3!1i15!2i26433!3i17094!1m4!1m3!1i15!2i26433!3i17095!1m4!1m3!1i15!2i26434!3i17093!1m4!1m3!1i15!2i26435!3i17093!1m4!1m3!1i15!2i26434!3i17094!1m4!1m3!1i15!2i26434!3i17095!1m4!1m3!1i15!2i26435!3i17094!1m4!1m3!1i15!2i26435!3i17095!2m3!1e0!2sm!3i378067248!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e3!12m1!5b1&amp;callback=_xdc_._12jjzo&amp;token=12584"></script><script type="text/javascript" charset="UTF-8" src="http://maps.googleapis.com/maps/api/js/AuthenticationService.Authenticate?1sfile%3A%2F%2F%2FC%3A%2FUsers%2Famin__000%2FDesktop%2Fthemeforest-7664475-apricot-navigation-admin-dashboard-template-v1.3%2FHTML%2Flogin.html&amp;callback=_xdc_._mqcu30&amp;token=5570"></script><script type="text/javascript" charset="UTF-8" src="http://maps.googleapis.com/maps/api/js/QuotaService.RecordEvent?1sfile%3A%2F%2F%2FC%3A%2FUsers%2Famin__000%2FDesktop%2Fthemeforest-7664475-apricot-navigation-admin-dashboard-template-v1.3%2FHTML%2Flogin.html&amp;5e0&amp;6u1&amp;7sybktf3&amp;callback=_xdc_._7xicxd&amp;token=83651"></script></head>

<body class="  pace-done" style="overflow: visible;"><div id="sb-site" style="min-height: 645px;"><div class="pace  pace-inactive"><div class="pace-progress" style="width: 100%;" data-progress-text="100%" data-progress="99">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div></div><div id="preloader" style="display: none;">
        <div id="status" style="display: none;">&nbsp;</div>
    </div><div class="container">



        <div class="" id="login-wrapper">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div id="logo-login">
                        <h1>Apricot
                            <span>v1.3</span>
                        </h1>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="account-box">

                        <form role="form">
                            <div class="form-group">
                                <a href="#" class="pull-right label-forgot">Forgot email?</a>
                                <label for="inputUsernameEmail">Username or email</label>
                                <input id="inputUsernameEmail" class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <a href="#" class="pull-right label-forgot">Forgot password?</a>
                                <label for="inputPassword">Password</label>
                                <input id="inputPassword" class="form-control" type="password">
                            </div>
                            <div class="checkbox pull-left">
                                <label>
                                    <input type="checkbox">Remember me</label>
                            </div>
                            <button class="btn btn btn-primary pull-right" type="submit">
                                Log In
                            </button>
                        </form>
                        <a class="forgotLnk" href="index.html"></a>
                        <div class="or-box">

                            <center><span class="text-center login-with">Login or <b>Sign Up</b></span></center>
                            <div class="row">
                                <div class="col-md-6 row-block">
                                    <a href="index.html" class="btn btn-facebook btn-block">
                                        <span class="entypo-facebook space-icon"></span>Facebook</a>
                                </div>
                                <div class="col-md-6 row-block">
                                    <a href="index.html" class="btn btn-twitter btn-block">
                                        <span class="entypo-twitter space-icon"></span>Twitter</a>

                                </div>

                            </div>
                            <div style="margin-top:25px" class="row">
                                <div class="col-md-6 row-block">
                                    <a href="index.html" class="btn btn-google btn-block"><span class="entypo-gplus space-icon"></span>Google +</a>
                                </div>
                                <div class="col-md-6 row-block">
                                    <a href="index.html" class="btn btn-instagram btn-block"><span class="entypo-instagrem space-icon"></span>Instagram</a>
                                </div>

                            </div>
                        </div>
                        <hr>
                        <div class="row-block">
                            <div class="row">
                                <div class="col-md-12 row-block">
                                    <a href="index.html" class="btn btn-primary btn-block">Create New Account</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





        <div style="text-align:center;margin:0 auto;">
            <h6 style="color:#fff;">Release Candidate 1.0 Powered by © Themesmiles 2014</h6>
        </div>

    </div><div id="test1" class="gmap3" style="position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;" class="gm-style"><div style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default;"><div style="z-index: 1; position: absolute; top: 0px; left: 0px; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;" aria-hidden="true"><div style="width: 256px; height: 256px; position: absolute; left: 394px; top: 193px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 650px; top: 193px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 394px; top: -63px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 650px; top: -63px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 138px; top: 193px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 906px; top: 193px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 138px; top: -63px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 906px; top: -63px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -118px; top: 193px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 1162px; top: 193px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -118px; top: -63px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 1162px; top: -63px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;" aria-hidden="true"><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 394px; top: 193px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 650px; top: 193px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 394px; top: -63px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 650px; top: -63px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 138px; top: 193px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 906px; top: 193px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 138px; top: -63px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 906px; top: -63px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -118px; top: 193px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 1162px; top: 193px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -118px; top: -63px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 1162px; top: -63px;"></div></div></div><div style="width: 22px; height: 40px; overflow: hidden; position: absolute; left: 663px; top: 308px; z-index: 348;"><img style="position: absolute; left: 0px; top: 0px; width: 22px; height: 40px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="http://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi.png" draggable="false"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;" aria-hidden="true"><div style="position: absolute; left: 650px; top: 193px; transition: opacity 200ms ease-out 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i26433!3i17094!4i256!2m3!1e0!2sm!3i378067248!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=9642" draggable="false" alt=""></div><div style="position: absolute; left: 394px; top: 193px; transition: opacity 200ms ease-out 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i26432!3i17094!4i256!2m3!1e0!2sm!3i378067248!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=49363" draggable="false" alt=""></div><div style="position: absolute; left: 394px; top: -63px; transition: opacity 200ms ease-out 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i26432!3i17093!4i256!2m3!1e0!2sm!3i378067248!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=13342" draggable="false" alt=""></div><div style="position: absolute; left: 650px; top: -63px; transition: opacity 200ms ease-out 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i26433!3i17093!4i256!2m3!1e0!2sm!3i378067248!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=104692" draggable="false" alt=""></div><div style="position: absolute; left: 906px; top: 193px; transition: opacity 200ms ease-out 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i26434!3i17094!4i256!2m3!1e0!2sm!3i378067248!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=100992" draggable="false" alt=""></div><div style="position: absolute; left: 138px; top: 193px; transition: opacity 200ms ease-out 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i26431!3i17094!4i256!2m3!1e0!2sm!3i378067248!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=89084" draggable="false" alt=""></div><div style="position: absolute; left: 138px; top: -63px; transition: opacity 200ms ease-out 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i26431!3i17093!4i256!2m3!1e0!2sm!3i378067248!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=53063" draggable="false" alt=""></div><div style="position: absolute; left: 906px; top: -63px; transition: opacity 200ms ease-out 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i26434!3i17093!4i256!2m3!1e0!2sm!3i378067248!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=64971" draggable="false" alt=""></div><div style="position: absolute; left: 1162px; top: 193px; transition: opacity 200ms ease-out 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i26435!3i17094!4i256!2m3!1e0!2sm!3i378067176!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=120922" draggable="false" alt=""></div><div style="position: absolute; left: -118px; top: 193px; transition: opacity 200ms ease-out 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i26430!3i17094!4i256!2m3!1e0!2sm!3i378067248!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=128805" draggable="false" alt=""></div><div style="position: absolute; left: 1162px; top: -63px; transition: opacity 200ms ease-out 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i26435!3i17093!4i256!2m3!1e0!2sm!3i378067248!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=25250" draggable="false" alt=""></div><div style="position: absolute; left: -118px; top: -63px; transition: opacity 200ms ease-out 0s;"><img style="width: 256px; height: 256px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i15!2i26430!3i17093!4i256!2m3!1e0!2sm!3i378067248!3m9!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=92784" draggable="false" alt=""></div></div></div></div><div style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"></div><div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"><div style="z-index: 1; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"></div></div><div style="z-index: 4; position: absolute; top: 0px; left: 0px; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"><div style="width: 22px; height: 40px; overflow: hidden; position: absolute; opacity: 0.01; left: 663px; top: 308px; z-index: 348;" class="gmnoprint"><img style="position: absolute; left: 0px; top: 0px; width: 22px; height: 40px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="http://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi.png" draggable="false" usemap="#gmimap0"><map name="gmimap0" id="gmimap0"><area log="miw" coords="8,0,5,1,4,2,3,3,2,4,2,5,1,6,1,7,0,8,0,14,1,15,1,16,2,17,2,18,3,19,3,20,4,21,5,22,5,23,6,24,7,25,7,27,8,28,8,29,9,30,9,33,10,34,10,40,11,40,11,34,12,33,12,30,13,29,13,28,14,27,14,25,15,24,16,23,16,22,17,21,18,20,18,19,19,18,19,17,20,16,20,15,21,14,21,8,20,7,20,6,19,5,19,4,18,3,17,2,16,1,14,1,13,0,8,0" shape="poly" title="" style="cursor: pointer;"></map></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div><iframe style="z-index: -1; border: 0px none; position: absolute; height: 100%; width: 100%; padding: 0px; margin: 0px; left: 0px; top: 0px;" frameborder="0"></iframe></div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a style="position: static; overflow: visible; float: none; display: inline;" target="_blank" href="https://maps.google.com/maps?ll=-7.775324,110.402645&amp;z=15&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3" title="Click to see this area on Google Maps"><div style="width: 66px; height: 26px; cursor: pointer;"><img style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" src="http://maps.gstatic.com/mapfiles/api-3/images/google4.png" draggable="false"></div></a></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto,Arial,sans-serif; color: rgb(34, 34, 34); box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.2); z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 525px; top: 80px;"><div style="padding: 0px 0px 10px; font-size: 16px;">Map Data</div><div style="font-size: 13px;">Map data ©2017 Google</div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false"></div></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 166px; bottom: 0px; width: 121px;"><div draggable="false" style="-moz-user-select: none; height: 14px; line-height: 14px;" class="gm-style-cc"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Map Data</a><span>Map data ©2017 Google</span></div></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto,Arial,sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data ©2017 Google</div></div><div class="gmnoprint gm-style-cc" style="z-index: 1000001; -moz-user-select: none; height: 14px; line-height: 14px; position: absolute; right: 95px; bottom: 0px;" draggable="false"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);" href="https://www.google.com/intl/en-US_US/help/terms_maps.html" target="_blank">Terms of Use</a></div></div><div style="cursor: pointer; width: 25px; height: 25px; overflow: hidden; display: none; margin: 10px 14px; position: absolute; top: 0px; right: 0px;"><img style="position: absolute; left: -52px; top: -86px; width: 164px; height: 175px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px;" src="http://maps.gstatic.com/mapfiles/api-3/images/sv9.png" draggable="false" class="gm-fullscreen-control"></div><div draggable="false" style="-moz-user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;" class="gm-style-cc"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_new" title="Report errors in the road map or imagery to Google" style="font-family: Roboto,Arial,sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;" href="https://www.google.com/maps/@-7.7753244,110.402645,15z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3">Report a map error</a></div></div><div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" style="margin: 10px; -moz-user-select: none; position: absolute; bottom: 107px; right: 28px;" draggable="false" controlwidth="28" controlheight="93"><div class="gmnoprint" style="position: absolute; left: 0px; top: 38px;" controlwidth="28" controlheight="55"><div draggable="false" style="-moz-user-select: none; box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 28px; height: 55px;"><div title="Zoom in" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img style="position: absolute; left: 0px; top: 0px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;" src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png" draggable="false"></div></div><div style="position: relative; overflow: hidden; width: 67%; height: 1px; left: 16%; background-color: rgb(230, 230, 230); top: 0px;"></div><div title="Zoom out" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img style="position: absolute; left: 0px; top: -15px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;" src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png" draggable="false"></div></div></div></div><div class="gm-svpc" style="background-color: rgb(255, 255, 255); box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); border-radius: 2px; width: 28px; height: 28px; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; position: absolute; left: 0px; top: 0px;" controlwidth="28" controlheight="28"><div style="position: absolute; left: 1px; top: 1px;"></div><div style="position: absolute; left: 1px; top: 1px;"><div style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px;" aria-label="Street View Pegman Control"><img style="position: absolute; left: -147px; top: -26px; width: 215px; height: 835px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false"></div><div style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;" aria-label="Pegman is on top of the Map"><img style="position: absolute; left: -147px; top: -52px; width: 215px; height: 835px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false"></div><div style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;" aria-label="Street View Pegman Control"><img style="position: absolute; left: -147px; top: -78px; width: 215px; height: 835px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false"></div></div></div><div class="gmnoprint" controlwidth="28" controlheight="0" style="display: none; position: absolute;"><div style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); cursor: pointer; background-color: rgb(255, 255, 255); display: none;" title="Rotate map 90 degrees"><img style="position: absolute; left: -141px; top: 6px; width: 170px; height: 54px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png" draggable="false"></div><div style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); top: 0px; cursor: pointer; background-color: rgb(255, 255, 255);" class="gm-tilt"><img style="position: absolute; left: -141px; top: -13px; width: 170px; height: 54px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none;" src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png" draggable="false"></div></div></div><div class="gmnoprint" style="margin: 10px; z-index: 0; position: absolute; cursor: pointer; left: 0px; top: 0px;"><div style="float: left;" class="gm-style-mtc"><div style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(0, 0, 0); font-family: Roboto,Arial,sans-serif; -moz-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; background-clip: padding-box; box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); min-width: 22px; font-weight: 500;" draggable="false" title="Show street map">Map</div><div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); position: absolute; left: 0px; top: 30px; text-align: left; display: none;"><div style="color: rgb(0, 0, 0); font-family: Roboto,Arial,sans-serif; -moz-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;" draggable="false" title="Show street map with terrain"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img style="position: absolute; left: -52px; top: -44px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;" src="http://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false"></div></span><label style="vertical-align: middle; cursor: pointer;">Terrain</label></div></div></div><div style="float: left;" class="gm-style-mtc"><div style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(86, 86, 86); font-family: Roboto,Arial,sans-serif; -moz-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; background-clip: padding-box; box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); border-left: 0px none; min-width: 40px;" draggable="false" title="Show satellite imagery">Satellite</div><div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: 0px 1px 4px -1px rgba(0, 0, 0, 0.3); position: absolute; right: 0px; top: 30px; text-align: left; display: none;"><div style="color: rgb(0, 0, 0); font-family: Roboto,Arial,sans-serif; -moz-user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;" draggable="false" title="Show imagery with street names"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;"><img style="position: absolute; left: -52px; top: -44px; -moz-user-select: none; border: 0px none; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;" src="http://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false"></div></span><label style="vertical-align: middle; cursor: pointer;">Labels</label></div></div></div></div></div></div></div><script type="text/javascript" src="assets/js/preloader.js"></script><script type="text/javascript" src="assets/js/bootstrap.js"></script><script type="text/javascript" src="assets/js/app.js"></script><script type="text/javascript" src="assets/js/load.js"></script><script type="text/javascript" src="assets/js/main.js"></script><script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script><script type="text/javascript" src="assets/js/map/gmap3.js"></script><script type="text/javascript">
        $(function() {

            $("#test1").gmap3({
                marker: {
                    latLng: [-7.782893, 110.402645],
                    options: {
                        draggable: true
                    },
                    events: {
                        dragend: function(marker) {
                            $(this).gmap3({
                                getaddress: {
                                    latLng: marker.getPosition(),
                                    callback: function(results) {
                                        var map = $(this).gmap3("get"),
                                            infowindow = $(this).gmap3({
                                                get: "infowindow"
                                            }),
                                            content = results && results[1] ? results && results[1].formatted_address : "no address";
                                        if (infowindow) {
                                            infowindow.open(map, marker);
                                            infowindow.setContent(content);
                                        } else {
                                            $(this).gmap3({
                                                infowindow: {
                                                    anchor: marker,
                                                    options: {
                                                        content: content
                                                    }
                                                }
                                            });
                                        }
                                    }
                                }
                            });
                        }
                    }
                },
                map: {
                    options: {
                        zoom: 15
                    }
                }
            });

        });
    </script></div>
<!-- Preloader -->






<!--  END OF PAPER WRAP -->




<!-- MAIN EFFECT -->
















</body></html>
<?php $this->endPage() ?>
