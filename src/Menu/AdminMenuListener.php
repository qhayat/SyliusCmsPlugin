<?php

namespace Qamar\SyliusCmsPlugin\Menu;

use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

final class AdminMenuListener
{
    public function addAdminMenuItems(MenuBuilderEvent $event): void
    {
        $menu = $event->getMenu();

        $submenu = $menu
            ->addChild('cms')
            ->setLabel('qamar_sylius_cms_plugin.ui.cms_menu_label')
        ;
        $submenu->addChild('pages', ['route' => 'qamar_sylius_cms_plugin_admin_page_index'])->setLabel('qamar_sylius_cms_plugin.ui.pages');
    }
}
