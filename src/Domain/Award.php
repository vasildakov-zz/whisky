<?php

/**
 * Interface Award
 */
interface Award
{
    /**
     * @return string  e.g. San Francisco World Spirits Competition
     */
    public function name() : string;

    /**
     * @return int  e.g. 2018
     */
    public function year() : int;
}
