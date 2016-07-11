<?php

namespace InteroPhp\Module;

use InteroPhp\Container\ContainerInterface;

interface ModuleInterface
{
    public function getName();
    public function getNamespace();
    public function getPath();
    public function getServices(ContainerInterface $container);
    public function getResourcePath();
}
