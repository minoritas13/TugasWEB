<?php

class Model_user
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUser($username)
    {
        $this->db->query("SELECT * FROM users WHERE username = :username");
        $this->db->bind(':username', $username);
        return $this->db->result(); // hanya ambil satu user
    }

    public function registerUser($data)
    {
        $this->db->query("INSERT INTO users (username, password, role) VALUES (:username, :password, :role)");
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':role', $data['role']);
        return $this->db->execute();
    }
}
