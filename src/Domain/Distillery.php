<?php

/**
 * Interface Distillery
 */
interface Distillery
{
    /**
     * @var int
     */
    const STATUS_OPERATIONAL = 1;

    /**
     * @var int
     */
    const STATUS_CLOSED      = 2;

    /**
     * @return string e.g. The Macallan distillery
     */
    public function getName() : string;

    /**
     * @return Company e.g. Edrington Group
     */
    public function getOwner() : Company;

    /**
     * @return int  e.g. 1824
     */
    public function founded() : int;

    /**
     * @return int
     */
    public function status() : int;

    /**
     * @return int  e.g. 1,250,000 litres
     */
    public function capacity() : int;

    /**
     * @param Bottle $bottle
     * @return mixed
     */
    public function addBottle(Bottle $bottle);

    /**
     * @return array
     */
    public function getBottles() : array;
}
