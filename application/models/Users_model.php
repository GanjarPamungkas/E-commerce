<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {
	public function create()
	{
		$data = array (
            'username' => $this->input->post('username'),
            'usertype' => $this->input->post('usertype'),
            'fullname' => $this->input->post('fullname'),
            'password' => password_hash($this->input->post('usertype'), PASSWORD_DEFAULT)
        );
        $this->db->insert('users',$data);
	}

    public function read()
    {
        $query=$this->db->get('users');
        return $query->result();
    }

    public function read_by($id)
    {
        $this->db->where('user_id',$id);
        $query=$this->db->get('users');
        return $query->row();
    }
    public function update($id)
    {
        $data = array (
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'usertype' => $this->input->post('usertype'),
            'fullname' => $this->input->post('fullname')
        );
        $this->db->where('user_id');
        $this->db->update('users',$data);
    }
    public function delete($id)
    {
        $this->db->where('user_id',$id);
        $this->db->delete('users');
    }

    public function reset($type)
	{
		$this->db->set('password', password_hash($type, PASSWORD_DEFAULT));
		$this->db->where('usertype',$type);
		$this->db->update('users');
	}
}
