<?php

interface Company {

    /**
     * @return string
     */
    public function getName() : string;

    /**
     * @param Distillery $distillery
     */
    public function addDistillery(Distillery $distillery) : void;
    
}
