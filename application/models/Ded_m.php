<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ded_m extends CI_Model
{

    public $table = 'tbl_ded';
    public $id = 'id';
    public $order = 'DESC';
    function __construct()
    {
        parent::__construct();

    }

    public function get_all_ded_(){
        $this->db->select('*');
        $this->db->from('tbl_ded');
        return $this->db->get();
    }

    public function get_all_ded_by_id($id){
        $this->db->select('*');
        $this->db->from('tbl_ded');
        $this->db->where('id', $id);
        return $this->db->get();
    }

    // datatables
    public function get_all_ded($id){
        $this->db->select('*');
        $this->db->from('tbl_detail T');
        $this->db->join('tbl_ded D','T.id_ded = D.id');
        $this->db->where('T.id_ded',$id);
        $this->db->order_by('T.id_detail', 'ASC');
        return $this->db->get();
    }

    public function post_data_ded($data){
        $this->db->insert('tbl_detail',$data);
        return TRUE;
    }

    public function hapus_detail($id_detail){
        $this->db->where('id_detail', $id_detail);
        $this->db->delete('tbl_detail');
        return TRUE;
    }

    public function post_update_ded($id_detail, $data){
        $this->db->where('id_detail', $id_detail);
        $this->db->update('tbl_detail', $data);
        return TRUE;
    }

    public function post_data_skpa($data){
        $this->db->insert('tbl_ded',$data);
        return TRUE;
    }

    public function post_data_update_skpa($id, $data){
        $this->db->where('id', $id);
        $this->db->update('tbl_ded', $data);
        return TRUE;
    }

    public function hapus_ded($id){
        $this->db->where('id', $id);
        $this->db->delete('tbl_ded');
        return TRUE;
    }

    public function get_dokumen_by_id_ded($id_ded){
        $this->db->select('*');
        $this->db->from('tbl_dokumen');
        $this->db->where('id_ded', $id_ded);
        return $this->db->get();
    }


    public function upload(){ // Fungsi untuk upload file ke folder
        $config['upload_path']      = './uploads';
        $config['allowed_types']    = 'pdf|doc|docx|zip|xlx|xlsx';
        $config['max_size']         = '50048';
        $config['remove_space']     = TRUE;
        $config['encrypt_name']     = TRUE;
        $config['overwrite']        = TRUE;
        // $new_name = md5($kode_kegiatan);
        // $config['file_name'] = $new_name;

        $this->load->library('upload', $config);
        if($this->upload->do_upload('file')){ 
            // Jika berhasil :
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        }else{
            // Jika gagal :
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }

    public function save($upload,$id_ded){
        $data = array(
            'id_ded'           => $id_ded,
            'nama_dokumen'     => $upload['file']['file_name'],
        );
        
        $this->db->insert('tbl_dokumen', $data);
    }
}

