<?php


/**
 * Class Bottle
 *
 * @author     Vasil Dakov <vasil.dakov@dunelm.com>
 * @copyright  2018 Vasil Dakov
 */
class Bottle
{
    /**
     * @var
     */
    private $id;

    /**
     * @var
     */
    private $name;

    /**
     * Bottle constructor.
     *
     * @param $id
     * @param $name
     */
    public function __construct($id, $name)
    {
        $this->setId($id);
        $this->setName($name);
    }

    private function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    private function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

}