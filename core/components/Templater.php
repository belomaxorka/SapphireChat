<?php
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

class Templater extends \Smarty
{
  public $compileDir = ROOT . '/resources/storage/cache/templates_compiled/';

  public function __construct()
  {
    parent::__construct();

    $this->template_dir = TPL_DIR;
    $this->compile_dir = $this->compileDir;
  }
}
