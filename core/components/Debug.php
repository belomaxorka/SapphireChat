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

use Exception;
use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

class Debug
{
  private $whoops;

  public function __construct()
  {
    error_reporting(0);
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);

    $this->whoops = new Run;

    switch (ENV_STATUS) {
      case 'development':
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);

        $this->whoops->pushHandler(new PrettyPageHandler);
        break;
      default:
      case 'production':
        break;
    }

    $this->whoops->register();
  }

  /**
   * Return exception message
   *
   * @param string $message
   * @return mixed
   * @throws Exception
   */
  public static function errorMessage(string $message)
  {
    throw new Exception($message);
  }
}
