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
            return $stmt->execute();
        }
    }
    
    public function getAll($user_id)
    {
        $query = "SELECT * FROM wishlist WHERE user_id = ?";
        $stmt = $this->db->con->prepare($query);
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = array();

        while ($row = $result->fetch_assoc()) {
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

    public function showWishlistQuantity($user_id)
    {
        $query = "SELECT * FROM wishlist WHERE user_id = ?";
        $stmt = $this->db->con->prepare($query);
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = mysqli_num_rows($result);
        return $data;
    }
}
