<?php

interface DistilleryInterface
{
    const STATUS_OPERATIONAL = 1;

    /**
     * @return string e.g. The Macallan distillery
     */
    public function getName() : string;

    /**
     * @return CompanyInterface e.g. Edrington Group
     */
    public function getOwner() : CompanyInterface;

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
     * @param BottleInterface $bottle
     * @return mixed
     */
    public function addBottle(BottleInterface $bottle);

    /**
     * @return array
     */
    public function getBottles() : array;
}
