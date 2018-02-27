<?php

interface Collection
{
    /**
     * @return User
     */
    public function user() : User;

    /**
     * @return string The name of the collection e.g. Ardbeg Collection
     */
    public function name() : string;

    /**
     * @param Bottle $bottle
     */
    public function addBottle(Bottle $bottle) : void;

    /**
     * @return Bottle[]
     */
    public function getBottles() : array;
}
