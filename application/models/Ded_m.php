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

    // datatables
    function json() {
        $this->datatables->select('id,nama_peraturan,unit,tupoksi,jml_database,file_pdf');
        $this->datatables->from('tbl_ded');
        $this->datatables->add_column('action', anchor(site_url('dede/read/$1'),'<i class="icon-eye" aria-hidden="true"></i>', array('class' => 'btn-fab btn-fab-sm btn-success r-5'))." 
        ".anchor(site_url('dede/update/$1'),'<i class="icon-pencil" aria-hidden="true"></i>', array('class' => 'btn-fab btn-fab-sm btn-primary r-5'))." 
                ".anchor(site_url('dede/delete/$1'),'<i class="icon-trash-can" aria-hidden="true"></i>','class="btn-fab btn-fab-sm btn-danger r-5" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'), 'id');
       return $this->datatables->generate();
    }

    public function get_bidang($postData){
		$response = array();
		$this->db->select('*');
		$this->db->from('tbl_bidang');
		$this->db->where('id', $postData['id']);
		$this->db->order_by('id');
		$query = $this->db->get();
		$response = $query->result_array();
        return $response;
        return $this->datatables->generate();
	}
    function get_all_ded(){
        $this->db->select('*');
        $this->db->from('tbl_ded');
        $this->db->order_by('id', 'ASC');
        $query = $this->db->get();
        return $query;
    }
    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
	$this->db->or_like('nama_peraturan', $q);
	$this->db->or_like('unit', $q);
	$this->db->or_like('tupoksi', $q);
	$this->db->or_like('jml_database', $q);
	$this->db->or_like('file_pdf', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
	$this->db->or_like('nama_peraturan', $q);
	$this->db->or_like('unit', $q);
	$this->db->or_like('tupoksi', $q);
	$this->db->or_like('jml_database', $q);
	$this->db->or_like('file_pdf', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

    function input($table, $data){
        $this->db->insert($table, $data);
        return TRUE;
    }

    function get_all_data($table){
        return $this->db->get($table);
    }

    function get_all_data_by_id($table, $id, $id_table){
        $this->db->where($id_table, $id);
        return $this->db->get($table);
    }

    function update_data($table, $id_table, $id, $data)
    {
        $this->db->where($id_table, $id);
        $this->db->update($table, $data);
    }

    function hapus($table, $id_table, $id){
        $this->db->where($id_table, $id);
        $this->db->delete($table);
    }
}

