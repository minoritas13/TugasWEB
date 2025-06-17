<?php

class Model_kategori
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllKategori()
    {
        $this->db->query("SELECT * FROM kategori ORDER BY nama_kategori ASC");
        return $this->db->resultSet();
    }

    public function getKategoriById($id)
    {
        $this->db->query("SELECT * FROM kategori WHERE id = :id");
        $this->db->bind('id', $id);
        return $this->db->result();
    }
}
