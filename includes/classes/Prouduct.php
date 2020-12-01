<?php


class Product
{
    public $db = null;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    //Fetch products
    public function getAll()
    {
        $query = "SELECT * FROM products ORDER BY rand()";
        $result = $this->db->con->query($query);
        $data = array();

        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $data[] = $row;
        }

        return $data;
    }

    //Fetch Product
    public function get($id)
    {
        $query = "SELECT * FROM products WHERE id=$id";
        $result = $this->db->con->query($query);
        $data = mysqli_fetch_array($result, MYSQLI_ASSOC);

        return $data;
    }
}
