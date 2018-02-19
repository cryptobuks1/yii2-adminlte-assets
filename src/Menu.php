<?php
/**
 * @author Maxim Tyugaev <tugmaks@yandex.ru>
 */
declare(strict_types=1);

namespace Tugmaks\AdminLTE\Assets;

use yii\helpers\{
    Html, Url
};
use yii\helpers\ArrayHelper;
use yii\widgets\Menu as YiiMenu;


/**
 * Class Menu
 */
class Menu extends YiiMenu
{
    /** @inheritDoc */
    public $labelTemplate = '<a href="#">{prefix}<span>{label}</span>{suffix}</a>';

    /** @inheritDoc */
    public $linkTemplate = '<a href="{url}">{prefix}<span>{label}</span>{suffix}</a>';

    /** @inheritDoc */
    public $submenuTemplate = '<ul class="treeview-menu">{items}</ul>';

    /** @inheritDoc */
    protected function renderItem($item)
    {
        if (isset($item['url'])) {
            $template = ArrayHelper::getValue($item, 'template', $this->linkTemplate);

            return strtr(
                $template,
                [
                    '{url}'    => Html::encode(Url::to($item['url'])),
                    '{label}'  => $item['label'],
                    '{prefix}' => $item['prefix'] ?? '',
                    '{suffix}' => $item['suffix'] ?? '',
                ]
            );
        }

        $template = ArrayHelper::getValue($item, 'template', $this->labelTemplate);

        return strtr(
            $template,
            [
                '{label}'  => $item['label'],
                '{prefix}' => $item['prefix'] ?? '',
                '{suffix}' => $item['suffix'] ?? '',
            ]
        );
    }
}