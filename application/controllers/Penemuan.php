<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penemuan extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		//if(! $this->session->userdata('username')) redirect('auth/login');
		$this->load->model('Penemuan_model');
		$this->load->model('Category_model');
	}

    public function index()
	{
		$this->load->library('pagination');

        $config['base_url'] = site_url('penemuan/index');
        $config['total_rows'] = $this->db->count_all('barang_temuan');
        $config['per_page'] = 5;

        $this->pagination->initialize($config);

        $limit=$config['per_page'];
        $start=$this->uri->segment(3)?$this->uri->segment(3):0;

        $data['i']=$start+1;
        $data['found']=$this->Penemuan_model->read($limit,$start);
		$this->load->view('penemuan/list_penemuan',$data);
	}

    public function add()
    {
		if(! $this->session->userdata('username')) redirect('auth/login');
        if($this->input->post('submit')) {
			$this->Penemuan_model->create();
			if($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('msg','<p style="color:green">succesfuly added !</p>');
			} else {
				$this->session->set_flashdata('msg','<p style="color:red">add failed !</p>');
			}
			redirect('Penemuan');
		}
		$data['category']=$this->Category_model->read();
		$this->load->view('penemuan/form_penemuan');
    }

    public function edit($id)
	{
		if(! $this->session->userdata('username')) redirect('auth/login');
		if($this->input->post('submit')) {
			$this->Penemuan_model->update($id);
			if($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('msg','<p style="color:blue">succesfuly updated !</p>');
			} else {
				$this->session->set_flashdata('msg','<p style="color:red">update failed !</p>');
			}
			redirect('Penemuan');
		}
		$data['category']=$this->Category_model->read();
		$data['found']=$this->Penemuan_model->read_by($id);
		$this->load->view('Penemuan/form_penemuan',$data);
	}

	public function delete($id)
	{
		if(! $this->session->userdata('username')) redirect('auth/login');
		$this->Penemuan_model->delete($id);
		if($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('msg','<p style="color:purple">succesfuly deleted !</p>');
		} else {
			$this->session->set_flashdata('msg','<p style="color:red">delete failed !</p>');
		}
		redirect('penemuan');
	}

	public function changephoto($id)
    {
        $data['error']='';
        if($this->input->post('upload')) {
            if($this->upload()) {
                $this->Penemuan_model->changephoto($this->upload->data('file_name'),$id);
                $this->session->set_flashdata('msg','<p style="color:green">Photo successfuly changed !</p>');
            } else $data['error'] = $this->upload->display_errors();
        }
		$data['found']=$this->Penemuan_model->read_by($id);
        $this->load->view('penemuan/form_phototemu', $data);
    }

    public function upload()
    {
        $config['upload_path']      ='./uploads/penemuan/';
        $config['allowed_types']    ='gif|jpg|png|jpeg|webp';
        $config['max_size']         = 4000;
        $config['max_width']        = 1280;
        $config['max_height']       = 1280;

        $this->load->library('upload', $config);
        return $this->upload->do_upload('phototemu');
    }
	
	public function take($id)
	{
		if($this->input->post('submit')) {
			$this->Penemuan_model->take($id);
			if($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('msg','<p style="color:purple">Items has been founded !</p>');
			} else {
				$this->session->set_flashdata('msg','<p style="color:blue">Failed to found item !</p>');
			}
			redirect('penemuan');
		}

		$data['fon']=$this->Penemuan_model->read_by($id);
		$this->load->view('penemuan/form_pengambilan',$data);
	}

	public function taken()
	{
		$data['take']=$this->Penemuan_model->taken();
		$this->load->view('penemuan/pengambilan_barang',$data);
	}

}