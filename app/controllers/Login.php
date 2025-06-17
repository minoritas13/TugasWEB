<?php
class Login extends Controller {

    public function index() {
        $username = $_POST['username'];
        $password = $_POST['password']; 

        $user = $this->model('Model_user')->getUser($username);

        if ($user && password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user'] = [
                'id' => $user['id'],
                'username' => $user['username'],
                'role' => $user['role']
            ];
            
            if ($user['role'] === "admin") {
                header('Location: ' . BASEURL . '/dashboardAdmin');
            } else {
                header('Location: ' . BASEURL . '/main');
            }
            exit(); // Selalu tambahkan exit setelah header
        } else {
            $data['error'] = "Username atau password salah!";
            $data['title'] = "Login";

            header('Location: ' . BASEURL);
            $this->view('template/header',$data);
            $this->view('home/index', $data);
            $this->view('template/footer');
        }
    }
}
