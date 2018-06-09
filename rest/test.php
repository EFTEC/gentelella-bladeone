<?php

class Test {
    var $sensor1=0;
    var $sensor2=0;
    var $sensor3=0;

    /**
     * Test constructor.
     * @param int $sensor1
     * @param int $sensor2
     * @param int $sensor3
     */
    public function __construct($sensor1=0, $sensor2=0, $sensor3=0)
    {
        $this->sensor1 = $sensor1;
        $this->sensor2 = $sensor2;
        $this->sensor3 = $sensor3;
    }
}

$values=[];
$values[]=new Test(" 01.1"," 05.1"," 05.1");
$values[]=new Test(" 01.1"," 05.1"," 05.1");
$values[]=new Test(" 01.1"," 05.1"," 05.1");
echo json_encode($values);