<?php

/**
 * Interface Price
 */
interface Price
{
    public function currency() : Currency;

    public function amount() : float;
}
