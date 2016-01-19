# Usage


## Require as dependency


## Register the extension


### PHP

```php
$filer = new \alaczi\Twig\Extension\CountryExtension();
$twig = new Twig_Environment($loader);
$twig->addFilter($filter);
```

### Symfony 2

```yaml
services:
    alaczi.twig.country_extension:
        class: alaczi\Twig\Extension\CountryExtension
        tags:
            - { name: twig.extension }
```

### Silex

```php
$app['twig'] = $app->share($app->extend('twig', function ($twig, $app) {
    /** @var \Twig_Environment $twig */
    $twig->addExtension(new \alaczi\Twig\Extension\CountryExtension())
    return $twig;
}));
```

## Usage in twig

```twig
    {{ countryCode|country }}
```
