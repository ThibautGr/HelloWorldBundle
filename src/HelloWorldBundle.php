<?php

namespace TGN\HelloWorldBundle;

use Symfony\Component\HttpKernel\Bundle\AbstractBundle;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use TGN\HelloWorldBundle\DependencyInjection\HelloWorldExtension;

class HelloWorldBundle extends AbstractBundle
{
    public function getPath(): string
    {
        return dirname(__DIR__);
    }

    public function getContainerExtension(): ?ExtensionInterface
    {
        return new HelloWorldExtension();
    }
}