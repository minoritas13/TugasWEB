<?php

class Model_barang
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // mengambil semua barang
    public function getAllBarang()
    {
        $this->db->query("SELECT * FROM barang");
        return $this->db->resultSet();
    }

    // Ambil satu barang berdasarkan ID
    public function getBarangById($id)
    {
        $this->db->query("SELECT * FROM barang WHERE id = :id");
        $this->db->bind(':id', $id);
        return $this->db->result();
    }

    // Tambah data barang
    public function tambahBarang($data)
    {
        $query = "INSERT INTO barang (nama, harga, stok, kategori_id, gambar) VALUES (:nama, :harga, :stok, :kategori_id, :gambar)";
        $this->db->query($query);
        $this->db->bind(':nama', $data['nama']);
        $this->db->bind(':harga', $data['harga']);
        $this->db->bind(':stok', $data['stok']);
        $this->db->bind(':kategori_id',$data['kategori_id']);
        $this->db->bind(':gambar', $data['gambar']);
        return $this->db->execute();
    }



    // Update data barang
    public function updateBarang($data)
    {
        $query = "UPDATE barang SET nama = :nama, harga = :harga, stok = :stok, gambar = :gambar WHERE id = :id";
        $this->db->query($query);
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':nama', $data['nama']);
        $this->db->bind(':harga', $data['harga']);
        $this->db->bind(':stok', $data['stok']);
        $this->db->bind(':gambar', $data['gambar']);
        return $this->db->execute();
    }


    // Hapus data barang
    public function hapusBarang($id)
    {
        $this->db->query("DELETE FROM barang WHERE id = :id");
        $this->db->bind(':id', $id);
        return $this->db->execute();
    }

    public function getBarangByKategori($kategori_id)
    {
        $this->db->query("SELECT * FROM barang WHERE kategori_id = :id");
        $this->db->bind(':id', $kategori_id);
        return $this->db->resultSet();
    }
}
