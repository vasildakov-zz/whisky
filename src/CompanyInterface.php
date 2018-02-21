<?php

interface CompanyInterface {

    /**
     * @return string
     */
    public function getName() : string;

    /**
     * @param DistilleryInterface $distillery
     */
    public function addDistillery(DistilleryInterface $distillery) : void;
    
}
