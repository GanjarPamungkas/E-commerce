<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {
    
    public function create()
    {
        $data = array(
            'category_name'         => $this->input->post('category_name'),
            'description'           => $this->input->post('description'),
        );

        $this->db->insert('category',$data);
    }

    public function read()
    {
        $query=$this->db->get('category');
        return $query->result();
    }
    
    public function read_by($id)
	{
        $this->db->where('category_id',$id);
		$query=$this->db->get('category');
        return $query->row();
	}

    public function update($id)
    {
        $data = array (
            'category_name'         => $this->input->post('category_name'),
            'description'           => $this->input->post('description')   
        );
        $this->db->where('category_id',$id);
        $this->db->update('category',$data);
    }

    public function delete($id)
    {
        $this->db->where('category_id',$id);
        $this->db->delete('category');
    }
}
