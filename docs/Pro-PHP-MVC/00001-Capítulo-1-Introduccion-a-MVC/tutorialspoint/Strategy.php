<?php
// ========================================================
//  Dos clases que se pasaran por parámetro a la clase principal
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
// ========================================================

//  No hay herencia la obtiene la instancia por medio del parámetro
class ObjectCollection
{
    //  Variables para trabajar
    public $instancia;
    public $matriz;
    public $resultado;

    public function __construct($p_matriz)
    {
        //  recoger matriz
        $this->matriz = $p_matriz;
    }

    public function setComparator($p_class)
    {
        // Establecer la instancia de la clase recibida por parámetro
        $this->instancia = $p_class;

    }
    public function sort()
    {

        //  Retornara lo que retornara case reciba de la case de turno

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

// -
//  creando la instancia
$collection = new ObjectCollection($elements);
// -

//  Usando metodo de la instancia
$collection->setComparator(new IdComparator());
$collection->sort();

//  salida
echo "Sorted by ID:\n";
print_r($collection->elements);

//  Usando metodo de la instancia
$collection->setComparator(new DateComparator());
$collection->sort();

//  salida
echo "Sorted by date:\n";
print_r($collection->elements);

// ===================================================================
// ===================================================================
//  Ejemplo origuinal en https://www.tutorialspoint.com/php/php_design_patterns.htm

// $elements = array(
//      array(
//         'id' => 2,
//         'date' => '2011-01-01',
//      ),
//      array(
//         'id' => 1,
//         'date' => '2011-02-01'
//      )
//   );

//   $collection = new ObjectCollection($elements);

//   $collection->setComparator(new IdComparator());
//   $collection->sort();

//   echo "Sorted by ID:\n";
//   print_r($collection->elements);

//   $collection->setComparator(new DateComparator());
//   $collection->sort();

//   echo "Sorted by date:\n";
//   print_r($collection->elements);
// ===================================================================
// ===================================================================
