<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Skpa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model(['Tbl_ded_model','Ded_m']);
        $this->load->library('form_validation');        
        $this->load->library('datatables');
        $this->load->helper('form', 'url');
        $data = array();

    }

    public function index(){
        // $this->data['MemberM'] = $this->MemberM;
        $data['Ded_m'] = $this->Ded_m;
        $data['ded'] = $this->Tbl_ded_model->get_all_ded()->result();
        $this->template->load('template','skpa/skpalist', $data);
    }

    public function post_dokumen(){
        $this->form_validation->set_rules('nama_dokumen','Nama Dokumen');
        $this->form_validation->set_rules('id_ded','ID Ded','required');
        if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('error','Data anda tidak berhasil diunggah, cek data yang Anda masukkan');
            redirect_back();  
        }else{
            $id_ded = $this->input->post('id_ded');
            if($upload = $this->Ded_m->upload()){ 
                if($upload['result'] == "success"){ 
                    if($this->Ded_m->save($upload,$id_ded)){
                        $this->session->set_flashdata('sukses','Data anda berhasil disimpan');
                        redirect_back(); 
                    }else{
                        $this->session->set_flashdata('error','Data anda tidak berhasil diunggah 1');
                        redirect_back(); 
                    }
                }else{
                    $this->session->set_flashdata('error','Data anda tidak berhasil diunggah 2');
                    redirect_back(); 
                }
            }else{
                $this->session->set_flashdata('error','Data anda tidak berhasil diunggah 3');
                redirect_back(); 
            }
        }
    }
}


