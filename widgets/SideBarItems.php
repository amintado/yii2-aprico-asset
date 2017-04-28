<?php
/**
 * Created by PhpStorm.
 * User: amin__000
 * Date: 04/28/2017
 * Time: 01:21 AM
 */

namespace amintado\widgets;

use const false;
use function iterator_to_array;
use function session_cache_limiter;
use function tempnam;
use const true;
use function var_export;
use Yii;
use yii\base\InvalidConfigException;
use yii\base\InvalidParamException;
use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\i18n\I18N;

class SideBarItems extends Widget
{
    const WIDGET = 0;
    const SINGEL_ITEM = 1;
    const PARENT_ITEM = 2;
    public $items;
    protected $ViewFile = '@vendor/amintado/yii2-aprico-asset/views/SideBarPanel';

    public function init()
    {

        foreach ($this->items as $key => $item) {
            //---------------- render panel -------------------
            if (isset($item['panel'])) {
                if ($key > 0) {
                    $this->EndPanel();
                }
                echo $this->renderPanel($item['panel']['label']);
            }

            //---------------- render items -------------------
            if (isset($item['panel']['items'])) {
                foreach ($item['panel']['items'] as $ItemKey => $ItemValue) {
                    //---------------- render single menu -------------------
                    if ($ItemValue['type'] == 'single') {
                        echo $this->renderItem($ItemValue);
                    }
                    //---------------- render multiple menu -------------------
                    if ($ItemValue['type'] == 'multiple') {
                        $this->panentItem($ItemValue);
                        foreach ($ItemValue['items'] as $nestKey => $nestValue) {
                            echo $this->renderItem($nestValue);
                        }
                        $this->EndMulti();
                    }


                }
            }


            //echo $this->render('@vendor/amintado/yii2-aprico-asset/views/item', ['items' => $this->items]);


        }

    }

    protected function panentItem($data)
    {
        $icon = isset($data['icon']) ? $data['icon'] : '';
        $label = isset($data['label']) ? $data['label'] : '';
        $id = isset($data['id']) ? $data['id'] : '';
        echo $this->render($this->ViewFile,
            [
                'type' => self::PARENT_ITEM,
                'icon' => $icon,
                'id' => $id,
                'label' => $label

            ]);
        return;
    }

    protected function EndMulti()
    {
        echo '</ul></li>';
        return;
    }

    protected function renderPanel($label)
    {


        if (!isset($label)) {
            $label = 'widget';
        }

        echo $this->render($this->ViewFile, ['label' => $label, 'type' => self::WIDGET]);
        return;
    }

    protected function EndPanel()
    {
        echo '</ul>';
    }

    protected function renderItem($data)
    {

        $id = isset($data['id']) ? $data['id'] : '';
        $label = isset($data['label']) ? $data['label'] : '';
        $icon = isset($data['icon']) ? $data['icon'] : '';
        $href = isset($data['href']) ? $data['href'] : '';


        return $this->render($this->ViewFile,
            [
                'type' => self::SINGEL_ITEM,
                'icon' => $icon,
                'label' => $label,
                'href' => $href,
                'id' => $id
            ]);

    }


}