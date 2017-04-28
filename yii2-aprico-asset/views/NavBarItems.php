<?php
/**
 * Created by amintado
 * Email:amintado@gmail.com
 * Date: 04/28/2017
 * Time: 03:57 PM
 */
use amintado\widgets\NavbarItems;

/**
 * @var $type    string
 * @var $user   string
 * @var $image string
 * @var $name string
 * @var $url string
 *
 */

?>

<?php  if ($type==NavbarItems::USER_WIDGET){

    ?>
<li class="open">
    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
        <img alt="" class="admin-pic img-circle" src="<?= $image ?>">
        <?= $name ?>
        <b class="caret"></b>
    </a>
    <ul style="margin-top:14px;" role="menu" class="dropdown-setting dropdown-menu">
        <li>
            <a href="#">
                <span class="entypo-user"></span>&nbsp;&nbsp;My Profile</a>
        </li>
        <li>
            <a href="#">
                <span class="entypo-vcard"></span>&nbsp;&nbsp;Account Setting</a>
        </li>
        <li>
            <a href="#">
                <span class="entypo-lifebuoy"></span>&nbsp;&nbsp;Help</a>
        </li>
        <li class="divider"></li>
        <li>
            <a href="#">
                <span class="entypo-logout"></span>&nbsp;&nbsp;Logout</a>
        </li>
    </ul>
</li>
<?php }  ?>


<?php
/**
 *
 */

if ($type==NavbarItems::WEATHER_WIDGET){  ?>

<div id="nt-title-container" class="navbar-left running-text visible-lg">
    <ul class="date-top">
        <li class="entypo-calendar" style="margin-right:5px"></li>
        <li id="Date">Sat,  29 April 2017</li>


    </ul>

    <ul id="digital-clock" class="digital">
        <li class="entypo-clock" style="margin-right:5px"></li>
        <li class="hour">18</li>
        <li>:</li>
        <li class="min">46</li>
        <li>:</li>
        <li class="sec">56</li>
        <li class="meridiem">PM</li>
    </ul>
    <ul id="nt-title" style="height: 18px; overflow: hidden;">









        <li style="margin-top: 0px;"><i class="wi-day-lightning"></i>&nbsp;&nbsp;Muchen&nbsp;
            <b>85</b><i class="wi-fahrenheit"></i>&nbsp;; 15km/h
        </li><li style="margin-top: 0px;"><i class="wi-day-lightning"></i>&nbsp;&nbsp;Frankurt&nbsp;
            <b>85</b><i class="wi-fahrenheit"></i>&nbsp;; 15km/h
        </li><li style="margin-top: 0px;"><i class="wi-day-lightning"></i>&nbsp;&nbsp;Berlin&nbsp;
            <b>85</b><i class="wi-fahrenheit"></i>&nbsp;; 15km/h
        </li><li style="margin-top: 0px;"><i class="wi-day-lightning"></i>&nbsp;&nbsp;Yogyakarta&nbsp;
            <b>85</b><i class="wi-fahrenheit"></i>&nbsp;; Tonight- 72 °F (22.2 °C)
        </li><li style="margin-top: 0px;"><i class="wi-day-lightning"></i>&nbsp;&nbsp;Sttugart&nbsp;
            <b>85</b><i class="wi-fahrenheit"></i>&nbsp;; 15km/h
        </li></ul>
</div>

<?php }  ?>