<?php
/**
 * Created by PhpStorm.
 * User: Lordhexa
 * Date: 30.04.2016
 * Time: 12:57
 */

namespace Application\Entity;


/**
 * Class Aroma
 * @package Application
 */
class Aroma
{
    protected $name;
    protected $aromen;

    /**
     * Aroma constructor.
     */
    public function __construct()
    {
        $this->aromen = $this->getAll();
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return array
     */
    public function getAll()
    {
        $aromen = array(
            'Vanille Pudding',
            'Erdbeere',
            'Exotic Journey',
            'Mango',
            'Wassermelone',
            'Honig',
            'Amaretto',
            'Vanille Bourbon',
            'Kaffe',
            'Whisky',
            'Menthol',
            'Waldmeister',
            'Waldfrucht rot',
            'Maxx Blend'
        );

        return $aromen;
    }

}