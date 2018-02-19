<?php
/**
 * @author Maxim Tyugaev <tugmaks@yandex.ru>
 */


namespace Tugmaks\AdminLTE\Assets\Bower;

/**
 * Class SlimscrollAsset
 */
class SlimscrollAsset extends BowerAssetBundle
{

    /** @inheritDoc */
    public $js = ['jquery-slimscroll/jquery.slimscroll.js'];

    /** @inheritDoc */
    public $depends = [JqueryAsset::class];
}