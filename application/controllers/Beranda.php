<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Beranda extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Beranda_model');
        $this->load->library('form_validation');        
    $this->load->library('datatables');
    $this->load->helper('form', 'url');

    }
    public function index()
    {
        $data = array();
        $data['ded'] = $this->Beranda_model->get_all_ded()->result();
        $data['jumlah_skpa'] = $this->Beranda_model->get_all_ded()->num_rows();
        $this->template->load('template','auth/beranda', $data);
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Beranda_model->json();
    }

    public function read($id) 
    {
        $row = $this->Beranda_model->get_by_id($id);
        if ($row) {
            $data = array(
        'id' => $row->id,
        'nama_peraturan' => $row->nama_peraturan,
        'unit' => $row->unit,
        'tupoksi' => $row->tupoksi,
        'jml_database' => $row->jml_database,
        'file_pdf' => $row->file_pdf,
        );
            $this->template->load('template','auth/beranda_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('dede'));
        }
    }

    public function lihat_file()
    {
        $file = './uploads/Timeline_2018.pdf';
        $filename = 'Timeline_2018.pdf'; /* Note: Always use .pdf at the end. */

        $this->load->helper('download');

        force_download($file, NULL);
    }


    public function create() 
    {
        $data = array(
        'button' => 'Create',
        'action' => site_url('dede/create_action'),
        'id' => set_value('id'),
        'nama_peraturan' => set_value('nama_peraturan'),
        'unit' => set_value('unit'),
        'tupoksi' => set_value('tupoksi'),
        'jml_database' => set_value('jml_database'),
        'file_pdf' => set_value('file_pdf'),
    );
        $this->template->load('template','ded/tbl_ded_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
        'nama_peraturan' => $this->input->post('nama_peraturan',TRUE),
        'unit' => $this->input->post('unit',TRUE),
        'tupoksi' => $this->input->post('tupoksi',TRUE),
        'jml_database' => $this->input->post('jml_database',TRUE),
        'file_pdf' => $this->input->post('file_pdf',TRUE),
        );

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'pdf|jpg|png';
        $config['file_name'] = url_title($this->input->post('file_pdf',TRUE));
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('file_pdf')) {
            $error = $this->upload->display_errors();
            // menampilkan pesan error
            print_r($error);
        } else {
            $data = array(
                'nama_peraturan' => $this->input->post('nama_peraturan',TRUE),
                'unit' => $this->input->post('unit',TRUE),
                'tupoksi' => $this->input->post('tupoksi',TRUE),
                'jml_database' => $this->input->post('jml_database',TRUE),
                'file_pdf'=>$this->upload->file_name,
            );
        }

            $this->Tbl_ded_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('dede'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_ded_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('dede/update_action'),
        'id' => set_value('id', $row->id),
        'nama_peraturan' => set_value('nama_peraturan', $row->nama_peraturan),
        'unit' => set_value('unit', $row->unit),
        'tupoksi' => set_value('tupoksi', $row->tupoksi),
        'jml_database' => set_value('jml_database', $row->jml_database),
        'file_pdf' => set_value('file_pdf', $row->file_pdf),
        );
            $this->template->load('template','ded/tbl_ded_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('dede'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
        'nama_peraturan' => $this->input->post('nama_peraturan',TRUE),
        'unit' => $this->input->post('unit',TRUE),
        'tupoksi' => $this->input->post('tupoksi',TRUE),
        'jml_database' => $this->input->post('jml_database',TRUE),
        'file_pdf' => $this->input->post('file_pdf',TRUE),
        );
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'pdf|jpg|png';
        $config['file_name'] = url_title($this->input->post('file_pdf',TRUE));
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('file_pdf')) {
            $error = $this->upload->display_errors();
            // menampilkan pesan error
            print_r($error);
        } else {
            $data = array(
                'nama_peraturan' => $this->input->post('nama_peraturan',TRUE),
                'unit' => $this->input->post('unit',TRUE),
                'tupoksi' => $this->input->post('tupoksi',TRUE),
                'jml_database' => $this->input->post('jml_database',TRUE),
                'file_pdf'=>$this->upload->file_name,
            );
        }

            $this->Tbl_ded_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('dede'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_ded_model->get_by_id($id);

        if ($row) {
            $this->Tbl_ded_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('dede'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('dede'));
        }
    }
}
