<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kehilangan_model extends CI_Model {

    public function create()
    {
        $data = array (
            'nama_pemilik'          => $this->input->post('nama_pemilik'),
            'nama_barang'           => $this->input->post('nama_barang'),
            'jenis_barang'          => $this->input->post('jenis_barang'),
            'tempat_kehilangan'     => $this->input->post('tempat_kehilangan'), 
            'waktu_kehilangan'      => $this->input->post('waktu_kehilangan'),
            'tanggal_kehilangan'    => $this->input->post('tanggal_kehilangan'),
        );
        $this->db->insert('barang_hilang',$data); 
    }

    public function read($limit,$start)
    {
        $this->db->limit($limit,$start);
       // $this->db->where('founded', '0');
        $query=$this->db->get('barang_hilang');
        return $query->result();
    }

    public function read_by($id)
	{
        $this->db->where('id_barang',$id);
		$query=$this->db->get('barang_hilang');
        return $query->row();
	}

    public function update($id)
    {
        $data = array (
            'nama_pemilik'          => $this->input->post('nama_pemilik'),
            'nama_barang'           => $this->input->post('nama_barang'),
            'jenis_barang'          => $this->input->post('jenis_barang'),
            'tempat_kehilangan'     => $this->input->post('tempat_kehilangan'), 
            'waktu_kehilangan'      => $this->input->post('waktu_kehilangan'),
            'tanggal_kehilangan'    => $this->input->post('tanggal_kehilangan')
        );
        $this->db->where('id_barang',$id);
        $this->db->update('barang_hilang',$data);
    }

    public function delete($id)
    {
        $this->db->where('id_barang',$id);
        $this->db->delete('barang_hilang');
    }

    public function found($id)
    {
    $data = array (
        'nama_penemu'         => $this->input->post('nama_penemu'),
        'tempat_penemuan'     => $this->input->post('tempat_penemuan'),
        'phone'               => $this->input->post('phone'),
        'barang_id'           => $id  
    );
    $this->db->insert('discovery_report', $data);

    $this->db->set('founded','1');
    $this->db->where('id_barang',$id);
    $this->db->update('barang_hilang');
    }

    public function founded()
	{
        $this->db->join('barang_hilang','id_barang = barang_id');   
		$query=$this->db->get('discovery_report');
        return $query->result();
	}

    public function take()
	{
        $this->db->join('barang_hilang','id_barang = barang_id');   
		$query=$this->db->get('pengambilan_barang');
        return $query->result();
	}

    public function changephoto($photobrg,$id_barang)
    {
        //if($photobrg !== 'default.png')
        //unlink('./uploads/kehilangan1/'.$photobrg);

        $this->db->set('photobrg', $photobrg);
        $this->db->where('id_barang',$id_barang);
        return $this->db->update('barang_hilang');
    }

}