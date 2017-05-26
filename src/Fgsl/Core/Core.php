<?php
namespace Fgsl\Core;

use Zend\Config\Config;
use Zend\Log\Logger;
/**
 * Fgsl Core
 *
 * @package     Fgsl
 * @subpackage  Core
 * @license     http://www.gnu.org/licenses/agpl.html AGPL Version 3
 * @copyright   Copyright (c) 2017 Flávio Gomes da Silva Lisboa (http://www.fgsl.eti.br)
 * @author      Flávio Gomes da Silva Lisboa <flavio.lisboa@fgsl.eti.br>
 */
class Core
{
    /**
     * 
     * @var Config
     */
    private static $config; 
    
    /**
     * 
     * @var Logger
     */
    private static $logger = null;

    /**
     * 
     * @return \Zend\Config\Config
     */
    public static function getConfig()
    {
    	return self::$config;
    }    
    
    /** 
     * @param Config $config
     */
    public static function setConfig(Config $config)
    {
        self::$config = $config;
    }
    
    /** 
     * @return \Zend\Log\Logger
     */
    public static function getLogger()
    {
        if (null == self::$logger){
    		$writer = self::$config->logger->writer;
    		$writer = new $writer();
    		$logger = new Logger();
    		$logger->addWriter($writer);
    		Logger::registerErrorHandler($logger);
    		self::$logger = $logger;
        }    	
    	return self::$logger;
    }
}