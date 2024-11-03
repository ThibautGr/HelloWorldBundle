<?php

namespace TGN\HelloWorldBundle;

use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class HelloWorldBundle extends AbstractBundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }


}