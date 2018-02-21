<?php
/**
 * Created by PhpStorm.
 * User: vasil.dakov
 * Date: 21/02/2018
 * Time: 12:31
 */

interface BottleInterface
{
    /**
     * @return string
     */
    public function name() : string;

    /**
     * @return string
     */
    public function description() : string;

    /**
     * @return int  The total number of released bottles
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
     * @return DistilleryInterface
     */
    public function getDistillery() : DistilleryInterface;

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
    public function addPrice(PriceInterface $price);

    /**
     * @param AwardInterface $award
     */
    public function addAward(AwardInterface $award) : void;

    /**
     * @return AwardInterface[]
     */
    public function getAwards() : array;
}
