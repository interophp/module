<?php

namespace InteroPhp\Module;

use InteroPhp\Container\ContainerInterface;

abstract class BaseModule implements ModuleInterface
{
    public function getName()
    {
        // return classname excluding "Module" postfix
    }
    
    public function getNamespace()
    {
        // this appears to not work. use late binding or reflection?
        return __NAMESPACE__;
    }
    
    public function getPath()
    {
        // this appears to not work. use late binding or reflection?
        return __DIR__;
    }
    
    public function register(ContainerInterface $container)
    {
        return;
    }
    
    public function getResourcePath()
    {
        return $this->getPath() . '/Resources';
    }
}
