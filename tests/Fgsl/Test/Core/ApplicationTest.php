<?php
namespace Fgsl\Test\Core;

use Fgsl\Core\Core;
use Zend\Config\Config;
/**
 * Fgsl Core
 *
 * @package     Fgsl
 * @subpackage  Core
 * @license     http://www.gnu.org/licenses/agpl.html AGPL Version 3
 * @copyright   Copyright (c) 2017 Flávio Gomes da Silva Lisboa (http://www.fgsl.eti.br)
 * @author      Flávio Gomes da Silva Lisboa <flavio.lisboa@fgsl.eti.br>
 */
class ApplicationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Base path of application
     * 
     * @var string
     */
    private static $basePath = NULL;

    /**
     * 
     * @param string $basePath
     */
    public static function setBasePath($basePath)
    {
        self::$basePath = $basePath;
    } 
    
    /**
     * checks configuration management
     */
    public function testConfig()
    {
        $settings = ['name' => 'Bond', 'number' => 42];
        $config = new Config($settings);
        Core::setConfig($config);        
        $this->assertEquals('Bond',Core::getConfig()->name);
        $this->assertEquals(42,Core::getConfig()->number);
    }
    
    /**
     * checks logging
     */
    public function testLogger()
    {
    	$settings = ['logger' => ['writer'=>'Zend\Log\Writer\Noop']];
    	$config = new Config($settings);
    	Core::setConfig($config);    	;         
        $this->assertEquals('Zend\Log\Logger',get_class(Core::getLogger()));
    }
}