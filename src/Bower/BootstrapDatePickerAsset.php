<?php
/**
 * @author Maxim Tyugaev <tugmaks@yandex.ru>
 */


namespace Tugmaks\AdminLTE\Assets\Bower;

/**
 * Class BootstrapDatePickerAsset
 * @package Tugmaks\AdminLTE\Assets\Bower
 */
class BootstrapDatePickerAsset extends BowerAssetBundle
{
    /** @inheritDoc */
    public $css = ['bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'];

    /** @inheritDoc */
    public $js = ['bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'];

    /** @inheritDoc */
    public $depends = [BootstrapAsset::class];
}