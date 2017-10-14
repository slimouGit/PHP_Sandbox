
<?php
class A
{
    function foo()
    {
        if (isset($this)) {
            echo '$this ist definiert (';
            echo get_class($this);
            echo ")\n";
        } else {
            echo "\$this ist nicht definiert.\n";
        }
    }
}

class B
{
    function bar()
    {
        // Hinweis: die folgende Zeile führt zu einer Warnung, wenn
        // E_STRICT aktiviert ist
        //A::foo();
    }
}

$a = new A();
$a->foo();

// Hinweis: die folgende Zeile führt zu einer Warnung, wenn E_STRICT aktiviert ist
//A::foo();
$b = new B();
$b->bar();

// Hinweis: die folgende Zeile führt zu einer Warnung, wenn E_STRICT aktiviert ist
//B::bar();
?>
