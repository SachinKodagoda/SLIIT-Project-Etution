<?php
class UsersModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function register($data)
    {
        $this->db->query('INSERT INTO users (name, email, password , country,gender,img_name,userType) VALUES(:name, :email, :password , :country , :gender, :img_name,:userType)');
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':country', $data['country']);
        $this->db->bind(':gender', $data['gender']);
        $this->db->bind(':userType', $data['userType']);
        if ($data['gender'] == 'male') {
            $this->db->bind(':img_name', 'dummy1.jpg');
        } else {
            $this->db->bind(':img_name', 'dummy2.jpg');
        }

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function login($email, $password)
    {
        $this->db->query('SELECT * FROM users WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        $hashed_password = $row->password;
        if (password_verify($password, $hashed_password)) {
            return $row;
        } else {
            return false;
        }
    }

    public function findUserByEmail($email)
    {
        $this->db->query('SELECT * FROM users WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
