<?php

namespace Gephart\Language\Configuration;

use Gephart\Configuration\Configuration;

/**
 * Language configuration
 *
 * @package Gephart\Language\Configuration
 * @author Michal Katuščák <michal@katuscak.cz>
 * @since 0.3
 */
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

    /**
     * @param Configuration $configuration
     * @throws \Exception
     */
    public function __construct(Configuration $configuration)
    {
        $language = $configuration->get("language");

        if (empty($language["fallback"])) {
            throw new \Exception("In configuration (language.json) must be specify 'fallback'");
        }

        $this->language = $language;
        $this->directory = $configuration->getDirectory();
    }

    /**
     * @param string $key
     * @return bool|mixed
     */
    public function get(string $key)
    {
        return isset($this->language[$key]) ? $this->language[$key] : false;
    }

    /**
     * @return string
     */
    public function getDirectory(): string
    {
        return $this->directory;
    }
}