<?php
/**
 * @author Maxim Tyugaev <tugmaks@yandex.ru>
 */


namespace Tugmaks\AdminLTE\Assets\Bower;

/**
 * Class BootstrapColorPickerAsset
 * @package Tugmaks\AdminLTE\Assets\Bower
 */
class BootstrapColorPickerAsset extends BowerAssetBundle
{
    /** @inheritDoc */
    public $css = ['bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css'];

    /** @inheritDoc */
    public $js = ['bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js'];

    /** @inheritDoc */
    public $depends = [BootstrapAsset::class];
}