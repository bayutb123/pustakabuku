<?php

class CalculatorModel extends CI_Model {
    public $fieldA, $fieldB, $result;

    public function exe($a = null, $b = null)
    {
        $this->fieldA = $a;
        $this->fieldB = $b;
        $this->result = $this->fieldA + $this->fieldB;
        return $this->result;
    }
}


?>