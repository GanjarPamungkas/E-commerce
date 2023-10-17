<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
    }

    public function login()
    {
        if($this->input->post('login') && $this->validation('login')) {
            $login=$this->Auth_model->getuser($this->input->post('username'));
            if($login != NULL){
                if(password_verify($this->input->post('password'), $login->password)){
                    $data = array (
                        'username' => $login->username,
                        'usertype' => $login->usertype,
                        'fullname' => $login->fullname,
                        'photo'    => $login->photo,
                    );
                    $this->session->set_userdata($data);
                    redirect('welcome');
                }
            }
                    $this->session->set_flashdata('msg','<p style="color:red">invalid password or username !');
        }
            $this->load->view('auth/form_login');
        }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }

    public function changepass()
    {
        if(! $this->session->userdata('username')) redirect('auth/login'); //filter login
        if($this->input->post('change') && $this->validation('change')) {
            $change=$this->Auth_model->getuser($this->session->userdata('username'));
            if(password_verify($this->input->post('oldpassword'), $change->password)){
                if($this->Auth_model->changepass())
                $this->session->set_flashdata('msg','<p style="color:green">Password seccessfuly changed !</p>');
                else
                $this->session->set_flashdata('msg','<p style="color:red">Change password failed !</p>');
            } else {
                $this->session->set_flashdata('msg','<p style="color:red">Wrong old password !</p>');
            }
        }
        $this->load->view('auth/form_password');
    }

    public function changephoto()
    {
        if(! $this->session->userdata('username')) redirect('auth/login'); 
        $data['error']='';
        if($this->input->post('upload')) {
            if($this->upload()) {
                $this->Auth_model->changephoto($this->upload->data('file_name'));
                $this->session->set_userdata('photo',$this->upload->data('file_name'));
                $this->session->set_flashdata('msg','<p style="color:green">Photo successfuly changed !</p>');
            } else $data['error'] = $this->upload->display_errors();
        }
        $this->load->view('auth/form_photo', $data);
    }

    public function upload()
    {
        $config['upload_path']      ='./uploads/users/';
        $config['allowed_types']    ='gif|jpg|png|jpeg|webp';
        $config['max_size']         = 4000;
        $config['max_width']        = 1280;
        $config['max_height']       = 1280;

        $this->load->library('upload', $config);
        return $this->upload->do_upload('photo');
    }

    public function validation($type)
    {
        $this->load->library('form_validation');
        
        if($type=='login') {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        } else {
        $this->form_validation->set_rules('oldpassword', 'Old Password', 'required');
        $this->form_validation->set_rules('newpassword', 'New Password', 'required');
        }

        if($this->form_validation->run())
        return TRUE;
        else
        return FALSE;
    }
}