<?php declare(strict_types=1);
/**
 * SapphireChat
 * --------------------------------------------------------
 * This content is released under the MIT License (MIT)
 * --------------------------------------------------------
 * @package SapphireChat
 * @license https://opensource.org/licenses/MIT	(MIT License)
 * @filesource
 */

namespace SapphireComponents;

class Localization
{
  public const LANGUAGES_DIR = RESOURCES_DIR . 'languages/';

  private $_locales = null;
  private $_curLocale = null;

  public function __construct(string $lang = DEFAULT_LANG) {
    if (is_null($this->_locales))
    {
      $this->_locales = [];
      foreach (scandir(self::LANGUAGES_DIR) as $filename)
      {
        if ($filename[0] == '.') continue;
        $path = self::LANGUAGES_DIR . $filename;
        $language = pathinfo($filename, PATHINFO_FILENAME);
        $this->_locales[$language] = require_once($path);
      }
    }
    if (!array_key_exists($lang, $this->_locales))
      Debug::errorMessage("Unknown language $lang");
    $this->_curLocale = $this->_locales[$lang];
  }

  public function t(string $key): string
  {
    if (!array_key_exists($key, $this->_curLocale))
      Debug::errorMessage("Unknown t key $key");
    return $this->_curLocale[$key];
  }
}
