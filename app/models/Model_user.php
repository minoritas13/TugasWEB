<?php

class Model_user{
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getUser($username) {
        $this->db->query("SELECT * FROM users WHERE username = :username");
        $this->db->bind(':username', $username);
        return $this->db->result(); // hanya ambil satu user
    }
}
