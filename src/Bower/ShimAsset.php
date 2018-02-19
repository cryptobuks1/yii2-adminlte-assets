<?php
/**
 * @author Maxim Tyugaev <tugmaks@yandex.ru>
 */


namespace Tugmaks\AdminLTE\Assets\Bower;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class ShimAsset
 */
class ShimAsset extends AssetBundle
{
    /** @inheritDoc */
    public $js = ['https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js'];

    /** @inheritDoc */
    public $jsOptions = ['position' => View::POS_HEAD, 'condition' => 'lt IE 9'];

}