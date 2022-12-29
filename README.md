# SyliusCmsPlugin

A simple plugin to manage pages on sylius


## Import the configuration

in config/packages/_sylius.yaml
```
imports:
    - { resource: "@QamarSyliusCmsPlugin/config/config.yaml" }
```

## Import routes

in config/routes.yaml
- Add at the end of the file
```
qamar_sylius_cms_plugin_admin:
    resource: '@QamarSyliusCmsPlugin/config/admin_routing.yml'

qamar_sylius_cms_plugin_shop:
    resource: '@QamarSyliusCmsPlugin/config/shop_routing.yml'
```

## Install the asset
```
php bin/console asset:install
```

## Override the page template (shop)
You can overide the template of your pages by creating the following file:
```
/templates/bundles/QamarSyliusCmsPlugin/shop/page/show.html.twig
```

## Links to pages
For your links to your created pages you can use the path() method by specifying the slug of your page
```
{{ path('qamar_sylius_cms_plugin_shop_page', {slug: YOUT_PAGE_SLUG, _local: sylius.channel.defaultLocale.code}) }}
```
