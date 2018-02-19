<?php
/**
 * @author Maxim Tyugaev <tugmaks@yandex.ru>
 */


namespace Tugmaks\AdminLTE\Assets\Bower;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class RespondAsset
 */
class RespondAsset extends AssetBundle
{
    /** @inheritDoc */
    public $js = ['https://oss.maxcdn.com/respond/1.4.2/respond.min.js'];

    /** @inheritDoc */
    public $jsOptions = ['position' => View::POS_HEAD, 'condition' => 'lt IE 9'];

}