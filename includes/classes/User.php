<?php


class User
{
    public $db = null;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    //Fetch user details
    public function get($username)
    {
        if ($this->db->con != null) {
            $query = "SELECT * FROM user WHERE username= ?";
            $stmt = $this->db->con->prepare($query);
            $stmt->bind_param('s', $username);
            $stmt->execute();
            $result = $stmt->get_result();
            $data = $result->fetch_assoc();
            return $data;
        }
    }
}
