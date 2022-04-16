<?php
/**
 * ApplicationContext.php
 *
 * @project php-playground
 * @author lixworth <lixworth@outlook.com>
 * @copyright PhpStorm
 * @create 2022/4/16 18:59
 */

namespace Lixworth\Container;

use Psr\Container\ContainerInterface;

class ApplicationContext
{
    private static ?ContainerInterface $container = null;

    public function __construct()
    {
        self::$container = new Container();
    }

    /**
     * @return ContainerInterface
     */
    public static function getContainer(): ContainerInterface
    {
        if(self::$container === null) {
            new self();
        }
        return self::$container;
    }

    /**
     * @param ContainerInterface $container
     */
    public static function setContainer(ContainerInterface $container): void
    {
        self::$container = $container;
    }

}