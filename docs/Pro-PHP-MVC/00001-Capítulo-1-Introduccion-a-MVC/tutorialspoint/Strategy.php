<?php

class IdComparator
{

    public $matriz;
    public $resultado;

    public function __construct($p_matriz)
    {
        $this->matriz = $p_matriz;
    }

    public function getComparacion()
    {

        $this->resultado =
        "El valor del id 0 =" . $this->matriz[0]["id"] .
        "y el valor del id 1 =" . $this->matriz[1]["id"];

        return $his->resultado;
    }
}

class DateComparator
{

    public $matriz;
    public $resultado;

    public function __construct($p_matriz)
    {
        $this->matriz = $p_matriz;
    }

    public function getComparacion()
    {

        $this->resultado =
        "El valor del date 0 =" . $this->matriz[0]["id"] .
        "y el valor del date 1 =" . $this->matriz[1]["id"];

        return $his->resultado;
    }
}

class ObjectCollection
{
    public $instancia;
    public $matriz;
    public $resultado;

    public function __construct($p_matriz)
    {
        $this->matriz = $p_matriz;
    }

    public function setComparator($p_class)
    {

        $this->instancia = $p_class;

    }
    public function sort()
    {

        $this->instancia($this->matriz);
        $his->resultado = $this->instancia->getComparacion();
        return $his->resultado;
    }
}

$elements = array(
    array(
        'id'   => 2,
        'date' => '2011-01-01',
    ),
    array(
        'id'   => 1,
        'date' => '2011-02-01',
    ),
);

echo $elements[0]["id"];
echo '<br/>';
echo $elements[1]["id"];

$collection = new ObjectCollection($elements);

$collection->setComparator(new IdComparator());
$collection->sort();

echo "Sorted by ID:\n";
print_r($collection->elements);

$collection->setComparator(new DateComparator());
$collection->sort();

echo "Sorted by date:\n";
print_r($collection->elements);
