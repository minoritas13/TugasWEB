<?php

class Keranjang extends Controller
{

    public function index()
    {
        session_start();
        $data['title'] = 'Keranjang';
        $data['cart'] = $_SESSION['cart'] ?? [];
        $data['barang'] = $this->model('Model_barang')->getAllBarang();

        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $nama = $_POST['nama'];
            $harga = $_POST['harga'];

            if (isset($_SESSION['cart'][$id])) {
                $_SESSION['cart'][$id]['jumlah'] += 1;
            } else {
                $_SESSION['cart'][$id] = [
                    'id' => $id,
                    'nama' => $nama,
                    'harga' => $harga,
                    'jumlah' => 1
                ];
            }

            header("Location: " . BASEURL . "/main");
            exit;
        }

        if (!isset($_SESSION['user'])) {
            header("Location: " . BASEURL);
            exit;
        } else {
            $this->view('template/header', $data);
            $this->view('keranjang/index', $data);
            $this->view('template/footer');
        }
    }

    public function hapusKeranjang()
    {
        session_start();
        $id = $_POST['id'];
        unset($_SESSION['cart'][$id]);
        header("Location: " . BASEURL . "/keranjang");
        exit;
    }

    public function transaksi()
    {
        session_start();
        $cart = $_SESSION['cart'] ?? [];

        $total = 0;
        $pelanggan = $_POST['pelanggan'] ?? 'Umum'; // default jika kosong
        $kasir_id  = $_SESSION['user']['id']; // asumsi sudah login dan punya session user

        // isi cart
        $total = 0;

        
        foreach ($cart as $item) {
            $total += $item['harga'] * $item['jumlah'];
        }

        // Siapkan data transaksi
        $data = [
            'total'     => $total,
            'kasir_id'  => $kasir_id,
            'pelanggan' => $pelanggan,
            'items'     => $cart
        ];

        $this->model('Model_transaksi')->simpanTransaksi($data);

        // Kosongkan keranjang setelah disimpan
        unset($_SESSION['cart']);
        header('Location: ' . BASEURL . '/main');
        exit;
    }
}
