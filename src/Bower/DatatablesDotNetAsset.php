<?php
/**
 * @author Maxim Tyugaev <tugmaks@yandex.ru>
 */


namespace Tugmaks\AdminLTE\Assets\Bower;

/**
 * Class DatatablesDotNetAsset
 * @package Tugmaks\AdminLTE\Assets\Bower
 */
class DatatablesDotNetAsset extends BowerAssetBundle
{
    /** @inheritDoc */
    public $js = ['datatables.net/js/jquery.dataTables.min.js'];

    /** @inheritDoc */
    public $depends = [JqueryAsset::class];
}