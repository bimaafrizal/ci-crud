<?php
class Berita_model extends CI_Model
{
    public $table = 'news2';
    public $id = 'id';

    function data_berita()
    {
        return $this->db->get($this->table)->result();

        //return $this->db->query('select * from news')->result();
    }

    function tambah_berita($data)
    {
        return $this->db->insert($this->table, $data);
    }

    function ambil_data_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    function edit_berita($data)
    {
        $id = array('id' => $this->input->post('id'));
        return $this->db->update($this->table, $data, $id);
    }

    function delete($id)
    {
        return $this->db->delete($this->table, array('id' => $id));
    }
}
