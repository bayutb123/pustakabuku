<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Latihan1 extends CI_Controller {

    public function index()
    {
        echo "Selamat Datang..";
    }

    public function calculate($a, $b)
    {
        $this->load->model('CalculatorModel');

        $data['fieldA'] = $a;
        $data['fieldB'] = $b;
        $data['result'] = $this->CalculatorModel->exe($a, $b);
        $this->load->view('calculator', $data);
    }
	
}
