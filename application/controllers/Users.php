<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model');
    }

	public function index()
	{
        $data['users']=$this->users_model->read();
		$this->load->view('users/list_users',$data);
	}

    public function add()
    {
        if($this->input->post('submit')) {
           $this->users_model->create();
        if($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg','<p style="color:green">User successfuly added !');
        } else {
            $this->session->set_flashdata('msg','<p style="color:red">User add failed !');
        }
           redirect('users');
        }

        $this->load->view('users/form_users');
}

    public function edit($id)
    {
        if($this->input->post('submit')) {
            $this->users_model->update($id);
        if($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('msg','<p style="color:green">User successfuly updated !');
        } else {
                $this->session->set_flashdata('msg','<p style="color:red">User update failed !');
            }
            redirect('users');
         }
        $data['user']=$this->users_model->read_by($id);
        $this->load->view('users/form_users',$data);
    }
    public function delete($id)
    {
        $this->users_model->delete($id);
        if($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('msg','<p style="color:green">User successfuly deleted !');
        } else {
            $this->session->set_flashdata('msg','<p style="color:red">User delete failed !');
        }
        redirect('users');

    }

    public function reset($type)
    {
        $this->users_model->reset($type);
		if($this->db->affected_rows() > 0){
			$this->session->set_flashdata('msg','<p  style="color:green">Reset password are successed</p>');
		}else{
			$this->session->set_flashdata('msg','<p  style="color:red">Password reset failed</p>');
		}
		redirect('users');
    }
}
