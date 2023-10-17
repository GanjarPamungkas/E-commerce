<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kehilangan extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		if(! $this->session->userdata('username')) redirect('auth/login');
		$this->load->model('Kehilangan_model');
		$this->load->model('Category_model');
	}

    public function index()
	{
		$this->load->library('pagination');

        $config['base_url'] = site_url('kehilangan/index');
        $config['total_rows'] = $this->db->count_all('Barang_hilang');
        $config['per_page'] = 5;

        $this->pagination->initialize($config);

        $limit=$config['per_page'];
        $start=$this->uri->segment(3)?$this->uri->segment(3):0;

        $data['i']=$start+1;
        $data['lost']=$this->Kehilangan_model->read($limit,$start);
		$this->load->view('kehilangan1/list_barang',$data);
	}
	

    public function add()
    {
		if($this->input->post('submit')) {
			$this->Kehilangan_model->create();
			if($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('msg','<p style="color:green">succesfuly added !</p>');
			} else {
				$this->session->set_flashdata('msg','<p style="color:red">add failed !</p>');
			}
			redirect('Kehilangan');
		}
		$data['category']=$this->Category_model->read();
		$this->load->view('kehilangan1/form_barang');
    }

    public function edit($id)
	{
		if($this->input->post('submit')) {
			$this->Kehilangan_model->update($id);
			if($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('msg','<p style="color:blue">succesfuly updated !</p>');
			} else {
				$this->session->set_flashdata('msg','<p style="color:red">update failed !</p>');
			}
			redirect('kehilangan');
		}
		$data['category']=$this->Category_model->read();
		$data['lost']=$this->Kehilangan_model->read_by($id);
		$this->load->view('kehilangan1/form_barang',$data);
	}

	public function delete($id)
	{
		$this->Kehilangan_model->delete($id);
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('msg','<p style="color:purple">succesfuly deleted !</p>');
		} else {
			$this->session->set_flashdata('msg','<p style="color:red">delete failed !</p>');
		}
		redirect('kehilangan');
	}
	
	public function changephoto($id)
    {
        $data['error']='';
        if($this->input->post('upload')) {
            if($this->upload()) {
                $this->Kehilangan_model->changephoto($this->upload->data('file_name'),$id);
                $this->session->set_flashdata('msg','<p style="color:green">Photo successfuly changed !</p>');
            } else $data['error'] = $this->upload->display_errors();
        }
		$data['lost']=$this->Kehilangan_model->read_by($id);
        $this->load->view('kehilangan1/form_photobrg', $data);
    }

    public function upload()
    {
        $config['upload_path']      ='./uploads/kehilangan1/';
        $config['allowed_types']    ='gif|jpg|png|jpeg|webp';
        $config['max_size']         = 4000;
        $config['max_width']        = 1280;
        $config['max_height']       = 1280;

        $this->load->library('upload', $config);
        return $this->upload->do_upload('photobrg');
    }

	public function found($id)
	{
		if($this->input->post('submit')) {
			$this->Kehilangan_model->found($id);
			if($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('msg','<p style="color:purple">Items has been founded !</p>');
			} else {
				$this->session->set_flashdata('msg','<p style="color:blue">Failed to found item !</p>');
			}
			redirect('kehilangan');
		}

		$data['los']=$this->Kehilangan_model->read_by($id);
		$this->load->view('kehilangan1/form_found',$data);
	}

	public function founded()
	{
		$data['found']=$this->Kehilangan_model->founded();
		$this->load->view('kehilangan1/discovery_report',$data);
	}
}