<?php

namespace HelloWorldBundle;

class SayHelloService
{

    private string $greetingMessage;

    public function __construct(string $greetingMessage)
    {
        $this->greetingMessage = $greetingMessage;
    }

    public function hello(): string
    {
        return $this->greetingMessage;
    }

}