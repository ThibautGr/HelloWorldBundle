<?php

namespace HelloWorldBundle;

use Symfony\Component\HttpKernel\Bundle\AbstractBundle;
class HelloWorldBundle extends AbstractBundle
{


    public function getPath()
    {
        return \dirname(__DIR__);
    }


}