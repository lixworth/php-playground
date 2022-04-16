<?php
/**
 * Container.php
 *
 * @project php-playground
 * @author lixworth <lixworth@outlook.com>
 * @copyright PhpStorm
 * @create 2022/4/16 18:53
 */
namespace Lixworth\Container;

use Psr\Container\ContainerInterface;

class Container implements ContainerInterface
{
    private array $definitions = [];

    public function get(string $id)
    {
        return $this->definitions[$id];
    }

    public function has(string $id): bool
    {
        return isset($this->definitions[$id]);
    }
}