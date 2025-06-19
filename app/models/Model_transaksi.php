<?php

class Model_transaksi
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function simpanTransaksi($data)
    {
        // menyimpan transaksi utama
        $this->db->query("INSERT INTO transaksi (total, kasir_id, pelanggan) VALUES (:total, :kasir_id, :pelanggan)");
        $this->db->bind('total', $data['total']);
        $this->db->bind('kasir_id', $data['kasir_id']);
        $this->db->bind('pelanggan', $data['pelanggan']);
        $this->db->execute();

        $transaksi_id = $this->db->lastInsertId(); // dapatkan ID transaksi terbaru

        // menyimpan detail barang
        foreach ($data['items'] as $item) {
            $this->db->query("INSERT INTO transaksi_detail (transaksi_id, barang_id, jumlah, harga, subtotal) VALUES (:transaksi_id, :barang_id, :jumlah, :harga, :subtotal)");
            $this->db->bind('transaksi_id', $transaksi_id);
            $this->db->bind('barang_id', $item['id']);
            $this->db->bind('jumlah', $item['jumlah']);
            $this->db->bind('harga', $item['harga']);
            $this->db->bind('subtotal', $item['harga'] * $item['jumlah']);
            $this->db->execute();
        }

        return $transaksi_id;
    }

    public function getAllTransaksi()
    {
        $this->db->query("
        SELECT 
            t.id,
            t.tanggal,
            t.pelanggan,
            u.username AS pembeli,
            t.total
        FROM transaksi t
        JOIN users u ON t.user_id = u.id
        ORDER BY t.tanggal DESC
    ");
        return $this->db->resultSet();
    }
}
