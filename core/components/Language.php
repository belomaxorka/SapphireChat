<?php

namespace SapphireComponents;

use SapphireComponents\Debug;

class Language
{
  const LANGUAGES_DIR = RESOURCES_DIR . "languages/";

  public static function getLangFunction($lang = null): \Closure
  {
    if ($lang === null)
    {
      $lang = DEFAULT_LANG;
    }

    $values = require_once(self::LANGUAGES_DIR . $lang . '.php');

    return function(string $key) use ($values)
    {
      if (!in_array($key, $values))
        Debug::errorMessage("Unknown key '{$key}'");
      return $values[$key];
    };
  }

  public static function lang($lang, $key) {
    return self::getLangFunction($lang)($key);
  }
}
