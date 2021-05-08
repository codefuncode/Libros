<?php

class MyClass
{
    protected $car = "skoda";
    $driver        = "SRK";

    public function __construct($par)
    {
        // Statements here run every time
        // an instance of the class
        // is created.
    }

    public function myPublicFunction()
    {
        return ("I'm visible!");
    }

    protected function myPrivateFunction()
    {
        return ("I'm  visible in child class!");
    }
}
