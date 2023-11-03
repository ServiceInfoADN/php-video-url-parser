<?php
namespace Adn\PhpVideoUrlParser\Container\Factory;

use Adn\PhpVideoUrlParser\Container\ServicesContainer;

class ServicesContainerFactory
{
    public function __invoke()
    {
        $configFile = require __DIR__.'/../../../config/config.php';
        return new ServicesContainer($configFile);
    }

    public static function createNewServiceMatcher()
    {
        $factory = new self();

        return $factory();
    }
}
