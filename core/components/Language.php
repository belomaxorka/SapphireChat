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

class Language
{
  public $defaultLang = null;
  public $currentLang = null;

  private $langDir = 'languages';
  private $langFile = 'main.php';
  private $fullPath;

  private $loadFile;

  public function __construct()
  {
    $this->defaultLang = $this->currentLang = DEFAULT_LANG;

    $this->fullPath = RESOURCES_DIR . $this->langDir . '/' . $this->currentLang . '/' . $this->langFile;

    if (!in_array($this->currentLang, LANGUAGES)) {
      Debug::errorMessage("Unknown language: {$this->defaultLang}");
    }

    if (!file_exists($this->fullPath)) {
      Debug::errorMessage("Language not found: {$this->defaultLang}");
    }

    $this->loadFile = require_once($this->fullPath);
  }

  /**
   * Return translation
   *
   * @param string $key
   * @return mixed
   */
  public function lang(string $key)
  {
    return $this->loadFile[$key];
  }

  public static function changeLang($lang)
  {
    /** TODO */
  }
}
