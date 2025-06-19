<?php

class DashboardAdmin extends Controller
{

    public function index()
    {
        session_start();

        $data['title'] = 'Dashboard';
        $data['kategori'] = $this->model('Model_kategori')->getAllKategori();
        $data['barang'] = $this->model('Model_barang')->getAllBarang(); // semua barang default

        $data['kategori_terpilih'] = $_POST['kategori_id'] ?? '';
        // Kalau pakai sort/filter kategori
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $kategori_id = $_POST['kategori_id'];

            if (!empty($kategori_id)) {
                $data['barang'] = $this->model('Model_barang')->getBarangByKategori($kategori_id);
                $data['kategori_terpilih'] = $kategori_id;
            } else {
                // Jika kosong (semua kategori), tampilkan semua barang
                $data['barang'] = $this->model('Model_barang')->getAllBarang();
                $data['kategori_terpilih'] = '';
            }
        } else {
            // Saat pertama kali halaman dibuka
            $data['barang'] = $this->model('Model_barang')->getAllBarang();
            $data['kategori_terpilih'] = '';
        }


        if (!isset($_SESSION['user'])) {
            header('Location: ' . BASEURL);
        } else {
            if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin') {
                header('Location: ' . BASEURL . '/main');
                exit;
            }
            $this->view('dashboardAdmin/index', $data);
            $this->view('template/footer');
        }
    }

    public function tambah()
    {
        session_start();

        // Cek apakah user admin
        if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin') {
            header('Location: ' . BASEURL);
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nama  = $_POST['nama'];
            $harga = $_POST['harga'];
            $stok  = $_POST['stok'];
            $kategori_id = $_POST['kategori_id'];

            // Cek apakah file gambar diupload
            if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === 0) {
                $gambar = $_FILES['gambar'];
                $namaFile = time() . '_' . basename($gambar['name']);
                $lokasi = 'img/' . $namaFile;

                // Pindahkan file ke folder img/
                if (move_uploaded_file($gambar['tmp_name'], $lokasi)) {
                    $sukses = $this->model('Model_barang')->tambahBarang([
                        'nama' => $nama,
                        'harga' => $harga,
                        'stok' => $stok,
                        'kategori_id' => $kategori_id,
                        'gambar' => $lokasi
                    ]);

                    if ($sukses) {
                        header('Location: ' . BASEURL . '/dashboardAdmin');
                        exit;
                    } else {
                        echo "Gagal menyimpan ke database.";
                    }
                } else {
                    echo "Gagal upload gambar.";
                }
            } else {
                echo "Tidak ada gambar yang diupload atau terjadi error upload.";
            }
        }

        // Jika bukan POST, tampilkan form tambah
        $data['kategori'] = $this->model('Model_kategori')->getAllKategori();
        $data['title'] = 'Tambah Barang';
        $this->view('dashboardAdmin/tambah', $data);
        $this->view('template/footer');
    }


    public function edit($id = null)
    {
        session_start();
        $barangModel = $this->model('Model_barang');

        if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin') {
            header('Location: ' . BASEURL);
            exit;
        }

        // Hapus barang jika tombol hapus diklik
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['hapus'])) {
            $barangModel->hapusBarang($_POST['id']);
            header('Location: ' . BASEURL . '/dashboardAdmin');
            exit;
        }

        // Update data barang
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nama  = $_POST['nama'];
            $harga = $_POST['harga'];
            $stok  = $_POST['stok'];
            $id    = $_POST['id'];
            $kategori_id = $_POST['kategori_id'];
            $gambarLama = $_POST['gambar_lama'];

            $gambarPath = $gambarLama;

            // Jika upload gambar baru
            if (isset($_FILES['gambar']) && $_FILES['gambar']['error'] === 0) {
                $gambar = $_FILES['gambar'];
                $namaFile = time() . '_' . basename($gambar['name']);
                $lokasi = 'img/' . $namaFile;

                if (move_uploaded_file($gambar['tmp_name'], $lokasi)) {
                    $gambarPath = $lokasi;

                    // Hapus gambar lama dari server jika ada
                    if (file_exists($gambarLama)) {
                        unlink($gambarLama);
                    }
                } else {
                    echo "Gagal upload gambar.";
                    exit;
                }
            }

            // Update ke database
            $berhasil = $barangModel->updateBarang([
                'id'    => $id,
                'nama'  => $nama,
                'harga' => $harga,
                'stok'  => $stok,
                'kategori_id' => $kategori_id,
                'gambar' => $gambarPath
            ]);

            if ($berhasil) {
                header('Location: ' . BASEURL . '/dashboardAdmin');
                exit;
            } else {
                echo "Gagal menyimpan ke database.";
            }
        }

        // Tampilkan form edit
        if ($id !== null) {
            $data['title'] = 'Edit Barang';
            $data['barang'] = $barangModel->getBarangById($id);
            $this->view('dashboardAdmin/edit', $data);
            $this->view('template/footer');
        }
    }
}
