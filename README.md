Gephart Language
===

[![Build Status](https://travis-ci.org/gephart/language.svg?branch=master)](https://travis-ci.org/gephart/language)

Dependencies
---
 - PHP >= 7.1
 - gephart/configuration = 0.4.*
 - gephart/dependency-injection = 0.4.*

Instalation
---

```bash
composer require gephart/language
```

Using
---

config/language.json
```json
{
  "fallback": "cs"
}
```

```php
$container = new \Gephart\DependencyInjection\Container();

/** @var \Gephart\Configuration\Configuration $configuration */
$configuration = $container->get(\Gephart\Configuration\Configuration::class);
$configuration->setDirectory(__DIR__ . "/config");

$language = $container->get(\Gephart\Language\Language::class);

echo $language->get(); // cs (fallback)

$language->set("en");
echo $language->get(); // en
```