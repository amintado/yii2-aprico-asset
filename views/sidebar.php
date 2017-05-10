<?php
/**
 * Created by amintado
 * Email: amintado@gmail.com
 * Site:shahrmap.ir
 * Date: 04/27/2017
 * Time: 08:01 PM
 *
 * @var $name string
 * @var $version string
 * @var $SearchBox array
 *
 */

$SearchBox['name']=isset($SearchBox['name'])?$SearchBox['name']:'Apricot';
$SearchBox['value']=isset($SearchBox['value'])?$SearchBox['value']:'';
$SearchBox['class']=isset($SearchBox['class'])?$SearchBox['class']:'';
$SearchBox['placeholder']=isset($SearchBox['placeholder'])?$SearchBox['placeholder']:Yii::t('apricot','search placeholder');

?>
<div id="skin-select" style="right: 0px;">
    <div id="logo" class="text-right" style="padding-right: 10px">
        <h1>

            <span><?= $version ?></span>
            <?= $name ?>
        </h1>
    </div>

    <a id="toggle" class="">
        <span class="entypo-menu"></span>
    </a>
    <div class="dark" style="visibility: visible;">
        <form action="<?= $SearchBox['action'] ?>">
                <span>
                    <input name="<?= $SearchBox['name'] ?>" value="<?= $SearchBox['value'] ?>" class="<?= $SearchBox['class'] ?> search rounded id_search text-right" placeholder="<?= $SearchBox['placeholder'] ?>"
                           autofocus="" type="text">
                </span>
        </form>
    </div>


    <div class="skin-part" style="visibility: visible;">
        <div id="tree-wrap">
            <div class="side-bar">



