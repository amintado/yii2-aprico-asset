<?php
/**
 * Created by PhpStorm.
 * User: amin__000
 * Date: 04/27/2017
 * Time: 06:45 PM
 */

namespace amintado\Chart;

use yii\web\AssetBundle;
class ChartAsset extends AssetBundle
{
    public $sourcePath='@vandor/amintado/Chart/assets';

    public $js=[
      'base/chart.js',
//      'base/chart-float-stacking.js',
//      'base/chartjs-option.js',
//      'base/jquery.flot.js',
//      'base/jquery.flot.resize.js',
//      'base/jquery.flot2.js',
//      'base/jquery.sparkline.js',
    ];
}