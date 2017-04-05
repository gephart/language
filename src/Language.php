<?php

namespace Gephart\Language;

use Gephart\Language\Configuration\LanguageConfiguration;

final class Language
{

    /** @var string */
    private $language;

    public function __construct(LanguageConfiguration $language_configuration)
    {
        $this->language = $language_configuration->get("fallback");
    }

    public function get()
    {
        return $this->language;
    }

    public function set(string $language)
    {
        $this->language = $language;
    }

}
