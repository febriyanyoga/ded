<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Monitoring extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Ded_m');
        $this->load->library('form_validation');        
        $this->load->library('datatables');
        $this->load->helper('form', 'url');

        $data = array();
    }

    public function index()
    {
        $data = array();
        $data['ded'] = $this->Ded_m->get_all_ded_()->result();
        $this->template->load('template','monitor/monitor_list', $data);
    } 
    
    