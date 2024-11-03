<?php

namespace HelloWorldBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class HelloWorldBundle extends Bundle
{


    public function getPath()
    {
        return \dirname(__DIR__);
    }


}