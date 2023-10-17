<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penemuan_model extends CI_Model {

    public function create()
    {
        $data = array (
            'nama_penemu'          => $this->input->post('nama_penemu'),
            'nama_barang'           => $this->input->post('nama_barang'),
            'jenis_barang'          => $this->input->post('jenis_barang'),
            'tempat_menemukan'     => $this->input->post('tempat_menemukan'), 
            'waktu_menemukan'      => $this->input->post('waktu_menemukan'),
            'tanggal_menemukan'    => $this->input->post('tanggal_menemukan')
        );
        $this->db->insert('barang_temuan',$data); 
    }

    public function read($limit,$start)
    {
        $this->db->limit($limit,$start);
        $query=$this->db->get('barang_temuan');
        return $query->result();
    }

    public function read_by($id)
	{
        $this->db->where('id_barang',$id);
		$query=$this->db->get('barang_temuan');
        return $query->row();
	}

    public function update($id)
    {
        $data = array (
            'nama_penemu'          => $this->input->post('nama_penemu'),
            'nama_barang'           => $this->input->post('nama_barang'),
            'jenis_barang'          => $this->input->post('jenis_barang'),
            'tempat_menemukan'     => $this->input->post('tempat_menemukan'), 
            'waktu_menemukan'      => $this->input->post('waktu_menemukan'),
            'tanggal_menemukan'    => $this->input->post('tanggal_menemukan')
        );
        $this->db->where('id_barang',$id);
        $this->db->update('barang_temuan',$data);
    }

    public function delete($id)
    {
        $this->db->where('id_barang',$id);
        $this->db->delete('barang_temuan');
    }

    public function take($id)
    {
    $data = array (
        'nama_pemilik'        => $this->input->post('nama_pemilik'),
        'phone'               => $this->input->post('phone'),
        'barang_id'           => $id  
    );
    $this->db->insert('pengambilan_barang', $data);

    $this->db->set('taken','1');
    $this->db->where('id_barang',$id);
    $this->db->update('barang_temuan');
    }

    public function taken()
	{
        $this->db->join('barang_temuan','id_barang = barang_id');   
		$query=$this->db->get('pengambilan_barang');
        return $query->result();
	}

    public function changephoto($phototemu,$id_barang)
    {
        //if($photobrg !== 'default.png')
        //unlink('./uploads/penemuan/'.$phototemu);

        $this->db->set('phototemu', $phototemu);
        $this->db->where('id_barang',$id_barang);
        return $this->db->update('barang_temuan');
    }
}