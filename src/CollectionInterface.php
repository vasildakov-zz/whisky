<?php
/**
 * Created by PhpStorm.
 * User: vasil.dakov
 * Date: 21/02/2018
 * Time: 12:47
 */

interface CollectionInterface
{
    /**
     * @return UserInterface
     */
    public function getUser() : UserInterface;

    /**
     * @return string The name of the collection e.g. Ardbeg Collection
     */
    public function name() : string;

    /**
     * @param BottleInterface $bottle
     */
    public function addBottle(BottleInterface $bottle) : void;

    /**
     * @return BottleInterface[]
     */
    public function getBottles() : array;
}
