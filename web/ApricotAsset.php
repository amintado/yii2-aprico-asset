<?php
namespace amintado\web;

use yii\base\Exception;
use yii\web\AssetBundle as BaseApricotAsset;

/**
 * AdminLte AssetBundle
 * @since 0.1
 */
class ApricotAsset extends BaseApricotAsset
{
    public $sourcePath = '@vendor/amintado/yii2-aprico-asset/assets';
    public $js = [

//        'js/app.js',
        'js/preloader.js',
//        'js/load.js',
//        'js/main.js',
//        'js/jhere-custom.js',
//        'js/countdown/jquery.countdown.js',
//        'js/speed/canvasgauge-coustom.js',
//        'js/chart/realTime.js',
//        'js/skin-select/skin-select.js',
//        'js/skin-select/jquery.cookie.js',
//        'js/skin-select/skin-select-edit.js',
    ];
    public $css = [
        'css/skin-select/skin-select.css',
        'css/animation.css',
        'css/bootstrap.css',
        'css/bootstrap-theme.min.css',
        'css/docs.css',
        'css/dripicon.css',
        'css/entypo-icon.css',
        'css/extra-pages.css',
        'css/flat.css',
        'css/flat-ui.css',
        'css/font-awesome.css',
        'css/hint.css',
        'css/icons-style.css',
        'css/loader-style.css',
        'css/login.css',
        'css/mail.css',
        'css/maki-icons.css',
        'css/media.css',
        'css/open-sans.css',
        'css/profile.css',
        'css/signin.css',
        'css/social.css',
        'css/style.css',
//        'css/rtl.css',
//        'css/typicons.css',
//        'css/typicons-codes.css',
//        'css/typicons-embedded.css',
//        'css/typicons-ie7.css',
//        'css/typicons-ie7-codes.css',
        'css/weather-icons.min.css',
        'js/progress-bar/number-pb.css',
    ];
    public $depends = [
        'rmrevin\yii\fontawesome\AssetBundle',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
//        'amintado\web\GageAsset',
        'amintado\web\RightSliderContentAsset',
    ];

    /**
     * @var string|bool Choose skin color, eg. `'skin-blue'` or set `false` to disable skin loading
     * @see https://almsaeedstudio.com/themes/AdminLTE/documentation/index.html#layout
     */
    public $skin = '_all-skins';

    /**
     * @inheritdoc
     */
    public function init()
    {
        // Append skin color file if specified
        if ($this->skin) {
            if (('_all-skins' !== $this->skin) && (strpos($this->skin, 'skin-') !== 0)) {
                throw new Exception('Invalid skin specified');
            }

            $this->css[] = sprintf('css/skins/%s.min.css', $this->skin);
        }

        parent::init();
    }
}
