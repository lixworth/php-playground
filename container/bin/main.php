<?php
/**
 * main.php
 *
 * @project php-playground
 * @author lixworth <lixworth@outlook.com>
 * @copyright PhpStorm
 * @create 2022/4/16 19:04
 */

use Lixworth\Container\ApplicationContext;
use Lixworth\Container\Container;

require_once __DIR__ . '/../vendor/autoload.php';

$container = new Container();
ApplicationContext::setContainer($container);