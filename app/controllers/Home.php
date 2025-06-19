<?php

class Home extends Controller {

    public function index() {
        session_start();
        $data['title'] = 'Login';

    if (isset($_SESSION['user'])) {
        header('Location: ' . BASEURL . '/dashboardAdmin');
        exit();
    }else{
        $this->view('template/header_guest', $data);
        $this->view('home/index');
        $this->view('template/footer');
    }
        
    }
}
