<?php

class MyClass
{
    private $car = "skoda";
    $driver      = "SRK";

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

    private function myPrivateFunction()
    {
        return ("I'm  not visible outside!");
    }
}
