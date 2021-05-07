<?php

//  REferencias para la comprensión
// PHP implementación
// https://en.wikipedia.org/wiki/Singleton_pattern
/**
 * La clase de almacenamiento genérico ayuda a administrar los datos globales.
 * Aquí el error es 'global'. Ningún dato debería ser realmente global:
 * como máximo en toda la solicitud.
 *
 * @category   Zend
 * @package    Zend_Registry
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Zend_Registry extends ArrayObject
{
    /**
     * Nombre de clase del objeto de registro singleton.
     * @var string
     */
    private static $_registryClassName = 'Zend_Registry';

    /**
     * El objeto de registro proporciona almacenamiento para objetos compartidos.
     * @var Zend_Registry
     */
    private static $_registry = null;

    /**
     * Recupera la instancia de registro predeterminada.
     * Un Singleton es una receta para ocultar dependencias de una clase.
     *
     * @return Zend_Registry
     */
    public static function getInstance()
    {
        if (self::$_registry === null) {
            self::init();
        }

        return self::$_registry;
    }

    /**
     * Inicialice la instancia de registro predeterminada.     *
     * @return void
     */
    protected static function init()
    {
        self::setInstance(new self::$_registryClassName());
    }

    /**
     * método getter, básicamente igual que offsetGet ().
     *
     * Este método se puede llamar desde un objeto de tipo Zend_Registry, o
     * se puede llamar estáticamente. En el último caso, utiliza el valor predeterminado
     * instancia estática almacenada en la clase.
     *
     * @param string $index - get the value associated with $index
     * @return mixed
     * @throws Zend_Exception if no entry is registerd for $index.
     */
    public static function get($index)
    {
        $instance = self::getInstance();

        if (!$instance->offsetExists($index)) {
            require_once 'Zend/Exception.php';
            throw new Zend_Exception("No entry is registered for key '$index'");
        }

        return $instance->offsetGet($index);
    }

    /**
     * método setter, básicamente igual que offsetSet ().
     *
     * Este método se puede llamar desde un objeto de tipo Zend_Registry, o
     * se puede llamar estáticamente. En el último caso, utiliza el valor predeterminado
     * instancia estática almacenada en la clase.
     * instancia estática almacenada en la clase.
     *
     * @param string $ index La ubicación en el ArrayObject en el que almacenar
     * @param valor $ mixto El objeto que se va a almacenar en ArrayObject.
     * @return void
     */
    public static function set($index, $value)
    {
        $instance = self::getInstance();
        $instance->offsetSet($index, $value);
    }

    /**
     * devuelve verdadero si $ index es un valor con nombre en el registro,
     * o falso si $ index no fue
     *
     * @param  string $index
     * @return boolean
     */
    public static function isRegistered($index)
    {
        if (self::$_registry === null) {
            return false;
        }
        return self::$_registry->offsetExists($index);
    }

    /**
     * Construye un objeto ArrayObject padre con el valor predeterminado
     * ARRAY_AS_PROPS para permitir el acceso como objeto
     *
     * @param array $array data array
     * @param integer $flags ArrayObject flags
     */
    public function __construct($array = array(), $flags = parent::ARRAY_AS_PROPS)
    {
        parent::__construct($array, $flags);
    }
}

// $instancia = new Zend_Registry;

var_dump(Zend_Registry::isRegistered("Zend_Registry"));

$instancia = Zend_Registry::isRegistered("Zend_Registry");

var_dump($instancia);
// $instancia->getInstance();
// var_dump(Zend_Registry-);
