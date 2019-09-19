<?php
class AdminModel
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUserDetails()
    {
        $this->db->query("SELECT *
                        FROM users WHERE userType='member' ORDER BY id");
        return $this->db->resultset();
    }

    public function deletePost($id)
    {
        $this->db->query('DELETE FROM users WHERE id = :id');
        $this->db->bind(':id', $id);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getAuser($id)
    {
        $this->db->query("SELECT *
                        FROM users WHERE userType='member' && id= :id ORDER BY id");
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function updateAuser($data)
    {
        if(empty($data['password'])){
            $this->db->query("UPDATE users SET name =:name, email=:email , userType =:userType WHERE id = :id");
            $this->db->bind(':name', $data['name']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':userType', $data['type']);
            $this->db->bind(':id', $data['member_id']);
        }else{
            $this->db->query("UPDATE users SET name =:name, email=:email , userType =:userType , password=:password WHERE id = :id");
            $this->db->bind(':name', $data['name']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':userType', $data['type']);
            $this->db->bind(':password', $data['password']);
            $this->db->bind(':id', $data['member_id']);
        }


        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
