<?php

require_once __DIR__ . '/../vendor/autoload.php';

class LanguageTest extends \PHPUnit\Framework\TestCase
{

    /**
     * @var \Gephart\Language\Language
     */
    private $language;

    public function setUp()
    {
        $container = new \Gephart\DependencyInjection\Container();

        /** @var \Gephart\Configuration\Configuration $configuration */
        $configuration = $container->get(\Gephart\Configuration\Configuration::class);
        $configuration->setDirectory(__DIR__ . "/config");

        $this->language = $container->get(\Gephart\Language\Language::class);
    }

    public function testFallback()
    {
        $language = $this->language->get();
        $this->assertEquals($language, "cs");
    }

    public function testGetSet()
    {
        $this->language->set("en");
        $language = $this->language->get();

        $this->assertEquals($language, "en");
    }
}
