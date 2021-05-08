<?php

class BaseClass
{
    public function test()
    {
        echo "BaseClass::test() called<br>";
    }

    final public function moreTesting()
    {
        echo "BaseClass::moreTesting() called<br>";
    }
}

class ChildClass extends BaseClass
{
    public function moreTesting()
    {
        echo "ChildClass::moreTesting() called<br>";
    }
}
