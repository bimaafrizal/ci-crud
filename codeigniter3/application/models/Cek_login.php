<?php
class Cek_login extends CI_Model
{
    public $table = 'user';
    public $id = 'id_user';

    function cek_user($email, $password)
    {
        $this->db->where('user', $email);
        $this->db->where('password', $password);
        return $this->db->get($this->table)->row();
    }
}
