<?php
defined('BASEPATH') or exit('No direct script access allowed');

class wilayah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Wilayah_model', 'wilayah');
    }
    public function index()
    {
        $data['wilayah'] = $this->wilayah->get_all();
        $this->load->view('wilayah/index', $data);
    }
    public function add()
    {
        $data = array(
            'button'        => 'Tambah',
            'judul'         => 'Wilayah',
            'action'        => site_url('wilayah/addsave'),
            'idwilayah'     => set_value('idwilayah'),
            'nama'          => set_value('nama'),
            'wilayah'       => set_value('wilayah'),
            'datawilayah'   => set_value('datawilayah'),
            'keterangan'    => set_value('keterangan'),
        );
        $this->load->view('wilayah/form', $data);
    }
    public function addsave()
    {
        // $this->_rules();
        // if ($this->form_validation->run() == FALSE) {
        // 	$this->add();
        // }else {
        $data = array(
            'idwilayah'      => $this->input->post('idwilayah'),
            'nama'           => $this->input->post('nama'),
            'wilayah'        => $this->input->post('wilayah'),
            'datawilayah'    => $this->input->post('datawilayah'),
            'keterangan'     => $this->input->post('keterangan'),

        );
        //print_r($data);
        $insert = $this->wilayah->insert($data);
        redirect(site_url('wilayah'));
    }

    public function update($id)
    {
        $row = $this->wilayah->getById($id);
        if ($row) {
            $data = array(
                'button'    => 'ubah',
                'action'    => site_url('wilayah/updatesave'),
                'idwilayah' => set_value('idwilayah', $row->idwilayah),
                'nama'      => set_value('nama', $row->nama),
                'wilayah'   => set_value('wilayah', $row->wilayah),
                'datawilayah'  => set_value('datawilayah', $row->datawilayah),
                'keterangan'    => set_value('keterangan', $row->keterangan)
            );
            $this->load->view('wilayah/form', $data);
        }       
    }
    public function updatesave()
    {
        $data = array(
            'nama' => $this->input->post('nama', true),
            'wilayah' => $this->input->post('wilayah', true),
            'datawilayah' => $this->input->post('datawilayah', true),
            'keterangan'    => $this->input->post('keterangan', true)
        );
        //print_r($data);
        $insert = $this->wilayah->update($this->input->post('idwilayah', TRUE), $data);
        redirect(site_url('wilayah'));
    }
    public function delete($id)
    {
        $this->wilayah->delete($id);
        redirect("wilayah");
    }
    public function tampilan()
    {
        $this->load->view('tampilanutama');
    }
}
