<?php
/**
 * Created by PhpStorm.
 * User: amin__000
 * Date: 04/27/2017
 * Time: 01:50 PM
 */

namespace amintado\web;
use yii\web\AssetBundle as BaseGage;

class GageAsset extends BaseGage
{
    public $sourcePath = '@vendor/amintado/yii2-aprico-asset/assets';

    public $js = [

        'js/countdown/jquery.countdown.js',
        'js/speed/canvasgauge-coustom.js',
        'js/chart/realTime.js',
        'js/chart/jquery.flot.resize.js',
        'js/chart/realTime.js',
        'js/chart/jquery.flot.js',

    ];






}