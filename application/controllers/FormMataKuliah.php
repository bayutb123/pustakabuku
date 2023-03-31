<?php 
class FormMataKuliah extends CI_Controller
{
    public function index()
    {
        $this->load->helper('url');
        $this->load->view('matakuliah/index');
    }

    public function save()
    {
        $this->load->helper('url');
        $data = [
            'kode' => $this->input->post('kodematkul'),
            'nama' => $this->input->post('namamatkul'),
            'sks' => $this->input->post('sks')
        ];
        $this->load->view('matakuliah/index_result', $data);
    }
}
?>