<?php
use Fgsl\Test\Core\ApplicationTest;
/**
 * Fgsl Core
 *
 * @package     Fgsl
 * @subpackage  Core
 * @license     http://www.gnu.org/licenses/agpl.html AGPL Version 3
 * @copyright   Copyright (c) 2017 Flávio Gomes da Silva Lisboa (http://www.fgsl.eti.br)
 * @author      Flávio Gomes da Silva Lisboa <flavio.lisboa@fgsl.eti.br>
 */
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/Psr4AutoloaderClass.php';
$psr4 = new \Psr4AutoloaderClass();
$psr4->addNamespace('Fgsl', __DIR__ . '/Fgsl');
$psr4->addNamespace('Fgsl', __DIR__ . '/../src/Fgsl');
$psr4->register();

ApplicationTest::setBasePath(__DIR__);