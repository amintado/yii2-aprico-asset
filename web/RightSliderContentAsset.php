<?php
/**
 * Created by PhpStorm.
 * User: amin__000
 * Date: 04/27/2017
 * Time: 01:50 PM
 */

namespace amintado\web;
use yii\web\AssetBundle as BaseRightSliderContentAsset;

class RightSliderContentAsset extends BaseRightSliderContentAsset
{
    public $sourcePath = '@vendor/amintado/yii2-aprico-asset/assets';

    public $js = [

        'js/progress-bar/src/jquery.velocity.min.js',
        'js/progress-bar/number-pb.js',
        'js/progress-bar/progress-app.js',
    ];
}