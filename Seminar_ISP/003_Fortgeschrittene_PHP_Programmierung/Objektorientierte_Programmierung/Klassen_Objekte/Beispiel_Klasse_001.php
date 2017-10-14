
<?php
class SimpleClass
{
    // Deklaration einer Eigenschaft
    public $var = 'ein Standardwert';

    // Deklaration einer Methode
    public function displayVar() {
        echo $this->var;
    }
}

echo "Objekt aus Klasse:<br/>";
$obj = new SimpleClass();
$obj->displayVar();
?>
