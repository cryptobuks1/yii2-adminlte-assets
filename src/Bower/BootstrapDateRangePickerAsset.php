<?php
/**
 * @author Maxim Tyugaev <tugmaks@yandex.ru>
 */


namespace Tugmaks\AdminLTE\Assets\Bower;

/**
 * Class BootstrapDatePickerAsset
 * @package Tugmaks\AdminLTE\Assets\Bower
 */
class BootstrapDateRangePickerAsset extends BowerAssetBundle
{
    /** @inheritDoc */
    public $css = ['bootstrap-daterangepicker/dist/css/bootstrap-daterangepicker.min.css'];

    /** @inheritDoc */
    public $js = ['bootstrap-daterangepicker/dist/js/bootstrap-daterangepicker.min.js'];

    /** @inheritDoc */
    public $depends = [BootstrapAsset::class];
}