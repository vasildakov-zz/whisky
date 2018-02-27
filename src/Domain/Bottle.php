<?php

interface Bottle
{
    /**
     * The bottle name e.g. Ardbeg Very Young
     *
     * @return string
     */
    public function name() : string;

    /**
     * @return string
     */
    public function description() : string;

    /**
     * The total number of released bottles
     *
     * @return int
     */
    public function quantity() : ? int;

    /**
     * @return float  e.g. 52.6
     */
    public function strength() : float ;

    /**
     * @return string  e.g. 'L4 258'
     */
    public function code() : string;

    /**
     * @return int  e.g. 700 ml
     */
    public function size() : int;

    /**
     * @return DateTime  e.g. 2016-01-01
     */
    public function bottled() : DateTime;

    /**
     * @return Distillery
     */
    public function distillery() : Distillery;

    /**
     * @return int e.g. 14
     */
    public function age() : ? int;

    /**
     * @return int  e.g. 2006
     */
    public function vintage() : int;

    /**
     * @return mixed
     */
    public function addPrice(Price $price);

    /**
     * @param Award $award
     */
    public function addAward(Award $award) : void;

    /**
     * @return Award[]
     */
    public function getAwards() : array;
}
