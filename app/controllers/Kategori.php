<?php

class Kategori extends Controller
{

    public function index()
    {
        session_start();
        $data['title'] = 'kategori';
        $data['kategori'] = $this->model('Model_kategori')->getAllKategori();

        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASEURL);
        } else {
            $this->view('template/header', $data);
            $this->view('kategori/index', $data);
            $this->view('template/footer');
        }
    }

    public function produk($id = null)
    {
        session_start();

        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASEURL);
            exit;
        }

        // jika kategori di klik
        if ($id !== null) {
            $data['title'] = 'Produk';
            $data['title'] = 'Kategori';
            $data['barang'] = $this->model('Model_barang')->getBarangByKategori($id);
            $data['kategori'] = $this->model('Model_kategori')->getKategoriById($id);

            $this->view('template/header', $data);
            $this->view('kategori/produk', $data);
            $this->view('template/footer');
        }
    }
}
