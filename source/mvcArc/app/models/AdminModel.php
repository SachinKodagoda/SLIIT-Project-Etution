<?php
class AdminModel
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    // GET USERS -----------------------------------------------
    public function get_users($usertype)
    {
        $this->db->query("SELECT * FROM users WHERE userType=:usertype ORDER BY id");
        $this->db->bind(':usertype', $usertype);
        return $this->db->resultset();
    }

    // GET A USER -----------------------------------------------
    public function get_a_user($id, $usertype)
    {
        $this->db->query("SELECT * FROM users WHERE userType=:usertype && id= :id ORDER BY id");
        $this->db->bind(':id', $id);
        $this->db->bind(':usertype', $usertype);
        return $this->db->single();
    }

    // DELETE A USER -----------------------------------------------
    public function delete_a_user($id)
    {
        $this->db->query('DELETE FROM users WHERE id = :id');
        $this->db->bind(':id', $id);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // ACTIVATE A USER -----------------------------------------------
    public function activate_a_user($id, $status)
    {
        $this->db->query("UPDATE users SET status =:status WHERE id = :id");
        $this->db->bind(':status', $status);
        $this->db->bind(':id', $id);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // UPDATE A USER -----------------------------------------------
    public function update_a_user($data)
    {
        if (empty($data['password'])) {
            $this->db->query("UPDATE users SET name =:name, email=:email , userType =:userType WHERE id = :id");
            $this->db->bind(':name', $data['name']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':userType', $data['type']);
            $this->db->bind(':id', $data['member_id']);
        } else {
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
