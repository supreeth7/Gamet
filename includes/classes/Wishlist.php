<?php

class Wishlist
{
    public $db = null;

    public function __construct($db)
    {
        if ($this->db != null) {
            return null;
        }

        $this->db = $db;
    }

    public function addToWishlist($user_id, $product_id)
    {
        if ($user_id != null && $product_id != null) {
            $query = "INSERT INTO wishlist (user_id, product_id) VALUES (?,?)";
            $stmt = $this->db->con->prepare($query);
            $stmt->bind_param("ii", $user_id, $product_id);
            $stmt->execute();
        }
    }

    public function getAll()
    {
        $query = "SELECT * FROM wishlist";
        $result = $this->db->con->query($query);
        $data = array();

        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $data[] = $row;
        }

        return $data;
    }

    public function remove($id)
    {
        if ($this->db->con != null) {
            $query = "DELETE FROM wishlist WHERE id=$id";
            $result = $this->db->con->query($query);

            if ($result) {
                header("Location: " . $_SERVER['PHP_SELF']);
            }
        }
    }

    public function showWishlistQuantity()
    {
        $query = "SELECT * FROM wishlist";
        $result = $this->db->con->query($query);
        return mysqli_num_rows($result);
    }
}
