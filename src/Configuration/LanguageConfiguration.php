<?php

namespace Gephart\Language\Configuration;

use Gephart\Configuration\Configuration;

class LanguageConfiguration
{
    /**
     * @var array
     */
    private $language;

    /**
     * @var string
     */
    private $directory;

    public function __construct(Configuration $configuration)
    {
        $language = $configuration->get("language");

        if (empty($language["fallback"])) {
            throw new \Exception("In configuration (language.json) must be specify 'fallback'");
        }

        $this->language = $language;
        $this->directory = $configuration->getDirectory();
    }

    public function get(string $key)
    {
        return isset($this->language[$key]) ? $this->language[$key] : false;
    }

    public function getDirectory(): string
    {
        return $this->directory;
    }
}