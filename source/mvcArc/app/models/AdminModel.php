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
}
