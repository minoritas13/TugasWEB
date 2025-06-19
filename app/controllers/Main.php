<?php

class Main extends Controller
{

    public function index()
    {
        session_start();
        $data['title'] = 'Main';
        $data['kategori'] = $this->model('Model_kategori')->getAllKategori();
        $data['barang'] = $this->model('Model_barang')->getAllBarang();


        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASEURL);
        } else {
            if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'kasir') {
                header('Location: ' . BASEURL . '/dashboardAdmin');
                exit;
            }

            $this->view('template/header', $data);
            $this->view('main/index', $data);
            $this->view('template/footer');
        }
    }
}
