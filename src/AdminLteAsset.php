<?php
/**
 * @author Maxim Tyugaev <tugmaks@yandex.ru>
 */

namespace Tugmaks\AdminLTE\Assets;

use Tugmaks\AdminLTE\Assets\Bower\{
    BootstrapAsset, BootstrapPluginAsset, FontAwesomeAsset, IoniconsAsset, JqueryAsset, RespondAsset, ShimAsset, SlimscrollAsset, FastclickAsset
};
use Tugmaks\AdminLTE\Assets\Skins\AllSkinAsset;
use yii\web\AssetBundle;

class AdminLteAsset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/dist';

    /** @inheritDoc */
    public $css = ['css/AdminLTE.min.css'];

    /** @inheritDoc */
    public $js = ['js/adminlte.min.js'];

    /** @inheritDoc */
    public $depends = [
        JqueryAsset::class,
        BootstrapAsset::class,
        BootstrapPluginAsset::class,
        FontAwesomeAsset::class,
        IoniconsAsset::class,
        AllSkinAsset::class,
        SlimscrollAsset::class,
        FastclickAsset::class,
        ShimAsset::class,
        RespondAsset::class,
    ];
}