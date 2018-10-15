<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
Class Auth extends CI_Controller{
    
    
    function index(){
        $this->load->view('auth/login');
    }
    
    function cheklogin(){
        $email      = $this->input->post('email');
        $password   = $this->input->post('password');
        // query chek users
        $this->db->where('email',$email);
        $this->db->where('password',  md5($password));
        $user       = $this->db->get('tbl_user');

        if ($this->session->set_userdata('login') == TRUE && $this->session->set_userdata('id_user_level') == '1' OR $this->session->set_userdata('id_user_level') == '2') {
			redirect('beranda');
        } else {
            if($user->num_rows()>0){
                // retrive user data to session
                $this->session->set_userdata($user->row_array());
                redirect('beranda');
            }else{
                $this->session->set_flashdata('status_login','email atau password yang anda input salah');
                redirect('auth');
            }
        }
        
        
    }
    
    function logout(){
        $this->session->sess_destroy();
        $this->session->set_flashdata('status_login','Anda sudah berhasil keluar dari aplikasi');
        redirect('auth');
    }
}
