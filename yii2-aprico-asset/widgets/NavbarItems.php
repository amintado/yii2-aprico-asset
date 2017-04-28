<?php
/**
 * Created by PhpStorm.
 * User: amin__000
 * Date: 04/28/2017
 * Time: 03:43 PM
 */

namespace amintado\widgets;

use amintado\web\ApricotAsset;
use Yii;
use yii\base\Widget;
class NavbarItems extends Widget
{

    public $left;
    public $right;
    const USER_WIDGET=0;
    const WEATHER_WIDGET=1;
    protected $ViewFile = '@vendor/amintado/yii2-aprico-asset/views/NavBarItems';
    public function init()
    {
        if ($this->left){
            $this->renderLeft();
        }
        if ($this->right){
            $this->renderRight();
        }

    }


    protected function renderLeft(){

        echo '<ul style="margin-left:0;" class="nav navbar-nav navbar-left">';
        foreach ($this->left as $key => $item){

            if (isset($item['user'])){

                $username=isset($item['user']['name'])?$item['user']['name']:'amintado';
                $image=isset($item['user']['image'])?$item['user']['image']:'data:image/jpg;base64,'.base64_encode(file_get_contents(Yii::getAlias('@vendor'.'/amintado/yii2-aprico-asset/assets/img/me.jpg')));

                echo $this->render($this->ViewFile,[
                    'name'=>$username,
                    'image'=>$image,


                    'type'=> self::USER_WIDGET
                ]);
                if (isset($item['user']['menu'])){

                }
            }
            if (isset($item['weather'])){
                $city=isset($item['weather']['city'])?$item['weather']['city']:'';
            }
        }
        echo $this->EndRLBlock();
        return;
    }
    protected function renderRight(){
        echo '<ul style="margin-right:0;" class="nav navbar-nav navbar-right">';
        foreach ($this->right as $key => $item){

            if (isset($item['user'])){

                $username=isset($item['user']['name'])?$item['user']['name']:'amintado';
                $image=isset($item['user']['image'])?$item['user']['image']:'data:image/jpg;base64,'.base64_encode(file_get_contents(Yii::getAlias('@vendor'.'/amintado/yii2-aprico-asset/assets/img/me.jpg')));

                echo $this->render($this->ViewFile,[
                    'name'=>$username,
                    'image'=>$image,


                    'type'=> self::USER_WIDGET
                ]);
                if (isset($item['user']['menu'])){

                }
            }
        }
        echo $this->EndRLBlock();
        return;
    }


    protected function EndRLBlock(){
        return '</ul>';
    }
}