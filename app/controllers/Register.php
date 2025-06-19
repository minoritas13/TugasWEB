<?php
class Register extends Controller
{

    public function index()
{
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];

        if ($password !== $password2) {
            echo "Password tidak cocok!";
            return;
        }

        $hashed = password_hash($password, PASSWORD_DEFAULT);

        $result = $this->model('Model_user')->registerUser([
            'username' => $username,
            'password' => $hashed,
            'role' => 'user'
        ]);

        if ($result) {
            header('Location: ' . BASEURL);
            exit;
        } else {
            echo "Gagal mendaftar";
        }
    } else {
        $data['title'] = 'Register';
        $this->view('template/header_guest', $data);
        $this->view('register/index', $data);
        $this->view('template/footer');
    }
}

}
