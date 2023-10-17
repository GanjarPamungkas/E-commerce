<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Category_model');
	}

	public function index()
	{
		$data['category']=$this->Category_model->read();
		$this->load->view('category/category_list',$data);
		///$this->load->view('users/register');
	}

    public function add()
	{
		if($this->input->post('submit')) {
			$this->Category_model->create();
			if($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('msg','<p style="color:blue">Category succesfuly updated !</p>');
			} else {
				$this->session->set_flashdata('msg','<p style="color:red">Category update failed !</p>');
			}
			redirect('category');
		}
		
		$this->load->view('category/category_form');
	}

	public function edit($id)
	{
		if($this->input->post('submit')) {
			$this->Category_model->update($id);
			if($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('msg','<p style="color:blue">Category succesfuly updated !</p>');
			} else {
				$this->session->set_flashdata('msg','<p style="color:red">Category update failed !</p>');
			}
			redirect('category');
		}

		$data['category']=$this->Category_model->read_by($id);
		$this->load->view('category/category_form',$data);
	}

	public function delete($id)
	{
		$this->Category_model->delete($id);
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('msg','<p style="color:purple">Category succesfuly deleted !</p>');
		} else {
			$this->session->set_flashdata('msg','<p style="color:red">Category delete failed !</p>');
		}
		redirect('category');
	}
}
