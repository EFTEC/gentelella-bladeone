<?php


class Actor
{
    /** @var  int */
    var $idCustomer;
    /** @var   string */
    var $name;
    /** @var  string */
    var $lastName;

    /**
     * Customer constructor.
     * @param $idCustomer
     * @param $name
     * @param $lastName
     */
    public function __construct($idCustomer, $name, $lastName)
    {
        $this->idCustomer = $idCustomer;
        $this->name = $name;
        $this->lastName = $lastName;
    }
}