<?php
class Foo
{
    public static $my_static = 'foo';

    public function staticValue()
    {
        return self::$my_static;
    }
}

print Foo::$my_static . "\n";
$foo = new Foo();
echo "<br/>";
print $foo->staticValue() . "\n";
