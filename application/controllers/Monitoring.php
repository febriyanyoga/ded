<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Monitoring extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Masterdata_m');
        $this->load->library('form_validation');        
        $this->load->library('datatables');
        $this->load->helper('form', 'url');

        $data = array();
    }

    public function index()
    {
        $data = array();
        $data['ded'] = $this->Masterdata_m->get_all_ded()->result();
        $this->template->load('template','monitor/monitor_list', $data);
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Tbl_ded_model->json();
    }

    public function form1_bidang($id){
        $data['id_peraturan']   = $id;
        $id_table = 'id_peraturan';
        $data['nama_peraturan'] = $this->Masterdata_m->get_all_data_by_id('tbl_ded', $id, 'id')->result()[0]->nama_peraturan;
        $data['bidang'] = $this->Masterdata_m->get_all_data_by_id('tbl_bidang', $id, $id_table)->result();
        $this->template->load('template','masterdata/form1_bidang', $data);
    }

    public function post_update($id_peraturan){
        $this->form_validation->set_rules('bidang', 'nama bidang', 'required');
        $this->form_validation->set_rules('id_bidang', 'id bidang', 'required');
        if ($this->form_validation->run() == TRUE) {
            echo "error";
        }else{
            $bidang             = $_POST['nama_bidang'];  
            $id_bidang          = $_POST['id_bidang'];  
            
            $table = 'tbl_bidang';
            $data = array(
                'nama_bidang'   => $bidang,
            );

            $this->Masterdata_m->update_data($table,'id_bidang', $id_bidang, $data);
            redirect('masterdata/form1_bidang/'.$id_peraturan);
        }
    }

    public function post_delete($id, $id_peraturan){
        $this->Masterdata_m->hapus('tbl_bidang', 'id_bidang', $id);
        redirect('masterdata/form1_bidang/'.$id_peraturan);
    }

    public function skpanote() 
    {
        $this->template->load('template','monitor/skpanote', $data);
    }

    public function form2_bagian() 
    {
        $this->template->load('template','masterdata/form2_bagian', $data);
    }

    public function form3_subagian() 
    {
        $this->template->load('template','masterdata/form3_subagian', $data);
    }

    public function form4_database() 
    {
        $this->template->load('template','masterdata/form4_database', $data);
    }

    public function form5_parameter() 
    {
        $this->template->load('template','masterdata/form5_parameter', $data);
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

    public function _rules() 
    {
        $this->form_validation->set_rules('nama_peraturan', 'nama peraturan', 'trim|required');
        $this->form_validation->set_rules('unit', 'unit', 'trim|required');
        $this->form_validation->set_rules('tupoksi', 'tupoksi', 'trim|required');
        $this->form_validation->set_rules('jml_database', 'jumlah database', 'trim|required');
        $this->form_validation->set_rules('jml_database', 'jumlah database', 'trim|required');

        $this->form_validation->set_rules('id', 'id', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger" style="font-size: 12px;">', '</span>');
        $this->form_validation->set_message('nama peraturan', 'tidak boleh kosong');
    }

    
    function autocomplate(){
        autocomplate_json('tbl_ded', 'nama_peraturan');
    }

    function inputBidang($id){
        // $bidang = $this->input->post('bidang');
        $this->form_validation->set_rules('bidang', 'nama bidang', 'required');
        $this->form_validation->set_rules('id_peraturan', 'id peraturan', 'required');
        if ($this->form_validation->run() == FALSE) {
            echo "error";
        }else{
            $bidang             = $_POST['bidang'];  
            $id_peraturan       = $_POST['id_peraturan'];  
            // $id_peraturan       = $this->input->post('id_peraturan');
            // $bidang             = $this->input->post('bidang');
            
            $table = 'tbl_bidang';
            $data = array(
                'nama_bidang'   => $bidang,
                'id_peraturan'  => $id_peraturan,
            );

            $this->Masterdata_m->input($table, $data);
            redirect('masterdata/form1_bidang/'.$id);
        }
    }

}


