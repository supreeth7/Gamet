<?php

class Cart
{
    public $db = null;

    public function __construct($db)
    {
        if (!isset($db->con)) {
            return null;
        }

        $this->db = $db;
    }

    //insert into cart
    public function insert($product_id, $user_id)
    {
        if ($this->db->con != null) {
            if ($product_id != null && $user_id != null) {
                $query = "INSERT INTO cart (user_id, product_id) VALUES ('$user_id', '$product_id')";
                $result = $this->db->con->query($query);

                return $result;
            }
        }
    }

    public function addToCart($product_id, $user_id)
    {
        if (isset($user_id) && isset($product_id)) {
            $result = $this->insert($product_id, $user_id);
        }

        if ($result) {
            header("Location:" . $_SERVER['PHP_SELF']);
        }
    }

    public function showCartQuantity()
    {
        $query = "SELECT * FROM cart";
        $result = $this->db->con->query($query);
        return mysqli_num_rows($result);
    }
}
