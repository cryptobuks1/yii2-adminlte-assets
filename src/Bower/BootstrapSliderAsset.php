<?php
/**
 * @author Maxim Tyugaev <tugmaks@yandex.ru>
 */


namespace Tugmaks\AdminLTE\Assets\Bower;

/**
 * Class BootstrapSliderAsset
 * @package Tugmaks\AdminLTE\Assets\Bower
 */
class BootstrapSliderAsset extends BowerAssetBundle
{
    /** @inheritDoc */
    public $js = ['bootstrap-daterangepicker/bootstrap-slider.js'];

    /** @inheritDoc */
    public $depends = [JqueryAsset::class];
}