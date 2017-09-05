<?php

namespace Gephart\Language;

use Gephart\Language\Configuration\LanguageConfiguration;

/**
 * Language
 *
 * @package Gephart\Language
 * @author Michal Katuščák <michal@katuscak.cz>
 * @since 0.3
 */
final class Language
{

    /**
     * @var string
     */
    private $language;

    /**
     * @param LanguageConfiguration $language_configuration
     */
    public function __construct(LanguageConfiguration $language_configuration)
    {
        $this->language = $language_configuration->get("fallback");
    }

    /**
     * @return string
     */
    public function get()
    {
        return $this->language;
    }

    /**
     * @param string $language
     */
    public function set(string $language)
    {
        $this->language = $language;
    }

}
