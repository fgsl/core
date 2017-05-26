<?php
/**
 * Fgsl Core
 *
 * @package     Fgsl
 * @subpackage  Test
 * @license     http://www.gnu.org/licenses/agpl.html AGPL Version 3
 * @copyright   Copyright (c) 2017 Flávio Gomes da Silva Lisboa (http://www.fgsl.eti.br)
 * @author      Flávio Gomes da Silva Lisboa <flavio.lisboa@fgsl.eti.br>
 */
namespace Fgsl\Test;

/**
 * 
 * @package    Fgsl
 * @subpackage Test
 */
class TestSuite
{
    /**
     * run all tests
     */
    public static function main()
    {
        PHPUnit_TextUI_TestRunner::run(self::suite());
    }

    /**
     * 
     * @return \PHPUnit_Framework_TestSuite
     */
    public static function suite()
    {
        $suite = new \PHPUnit_Framework_TestSuite('Fgsl\Test\Core\ApplicationTest');
        \PHPUnit_TextUI_TestRunner::run($suite);

        return $suite;
    }   
}