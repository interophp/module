<?php

namespace InteroPhp\Module;

use InteroPhp\Container\ContainerInterface;

abstract class BaseModule implements ModuleInterface
{
    public function getName()
    {
        $name = get_class($this);
        $pos = strrpos($name, '\\');
        $name = substr($name, $pos + 1, -6);
        return $name;
    }
    
    public function getNamespace()
    {
        $class = get_class($this);
        return substr($class, 0, strrpos($class, '\\'));
    }
    
    public function getPath()
    {
        $reflectionObject = new \ReflectionObject($this);
        return dirname($reflectionObject->getFileName());
    }
    
    public function register(ContainerInterface $container)
    {
        return;
    }
    
    public function getResourcePath()
    {
        return $this->getPath() . '/res';
    }
}
