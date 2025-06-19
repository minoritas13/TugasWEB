<?php

class Transaksi extends Controller
{
    public function index()
    {
        session_start();
        $username = $_SESSION['user']['username'];
        $data['user'] = $username;
        $data['title'] = 'kategori';
        $data['kategori'] = $this->model('Model_kategori')->getAllKategori();

        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASEURL);
        } else {
            if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin') {
                header('Location: ' . BASEURL . '/main');
                exit;
            }
            $data['title'] = 'Riwayat Transaksi';
            $data['transaksi'] = $this->model('Model_transaksi')->getAllTransaksi();

            $this->view('transaksi/index', $data);
            $this->view('template/footer');
        }
    }
}
