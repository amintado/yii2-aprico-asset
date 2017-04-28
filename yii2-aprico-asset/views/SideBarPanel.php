<?php
/**
 * Created by amintado
 * Email: amintado@gmail.com
 * Date: 04/28/2017
 * Time: 10:12 AM
 */
use amintado\widgets\SideBarItems;

/**
 * @var $label string
 * @var $type  int
 * @var $href  string
 * @var $id    string
 * @var $icon  string
 */

?>
<?php if ($type == SideBarItems::WIDGET) { ?>
<ul class="topnav menu-left-nest" style="margin: 10px;">
    <li style="text-align: left;">
        <a href="#" style="border-left: 0px solid !important; display: inline-block; float: none;"
           class="title-menu-left">

            <span class="widget-side pull-right" style="display: inline-block; float: none;"><?= $label ?></span>
            <i data-toggle="tooltip" class="entypo-cog pull-left config-wrap" style="right: -5px ;left: 5px"></i>

        </a>
    </li>
    <?php } ?>


    <?php if ($type == SideBarItems::SINGEL_ITEM) { ?>

        <li style="text-align: right;">
            <a class="tooltip-tip ajax-load tooltipster-disable" id="<?= $id ?>" href="<?= $href ?>">
                <i class="<?= $icon ?> pull-right"></i>
                <span style="display: inline-block; float: none;"><?= $label ?></span>

            </a>
        </li>

    <?php } ?>

    <?php if ($type == SideBarItems::PARENT_ITEM) { ?>
    <li style="text-align: right;">
        <a class="tooltip-tip ajax-load tooltipster-disable" href="#">
            <i class="<?= $icon ?> pull-right"></i>
            <span style="display: inline-block; float: none;"><?= $label ?></span>

        </a>
        <ul style="display: none;">


            <?php } ?>
            <!--</ul>-->