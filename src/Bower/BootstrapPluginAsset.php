<?php
/**
 * @author Maxim Tyugaev <tugmaks@yandex.ru>
 */


namespace Tugmaks\AdminLTE\Assets\Bower;

/**
 * Class BootstrapPluginAsset
 */
class BootstrapPluginAsset extends BowerAssetBundle
{
    /** @inheritDoc */
    public $js = ['bootstrap/dist/js/bootstrap.min.js'];

    /** @inheritDoc */
    public $depends = [JqueryAsset::class];
}