<?php

interface AwardInterface
{
    /**
     * @return string  e.g. San Francisco World Spirits Competition
     */
    public function getName() : string;

    /**
     * @return int  e.g. 2018
     */
    public function getYear() : int;
}
