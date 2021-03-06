<?php

class Cart
{
    public $db = null;
    private $total = 0;

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
                $query = "INSERT INTO cart (user_id, product_id) VALUES (?,?)";
                $stmt = $this->db->con->prepare($query);
                $stmt->bind_param("ii", $user_id, $product_id);
                $result = $stmt->execute();
                return $result;
            }
        }
    }

    public function addToCart($product_id, $user_id)
    {
        if (isset($user_id) && isset($product_id)) {
            $this->insert($product_id, $user_id);
        }
    }

    public function buyNow($product_id, $user_id)
    {
        if (isset($user_id) && isset($product_id)) {
            $result = $this->insert($product_id, $user_id);
        }

        if ($result) {
            header("Location:". $_SERVER['SERVER_HOST'] ."/cart.php");
        }
    }

    public function showCartQuantity($user_id)
    {
        $query = "SELECT * FROM cart WHERE user_id = ?";
        $stmt = $this->db->con->prepare($query);
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = mysqli_num_rows($result);
        return $data;
    }

    public function getAll($input)
    {
        if ($this->db->con != null) {
            $query = "SELECT * FROM cart WHERE user_id = ? ORDER BY id";
            $stmt = $this->db->con->prepare($query);
            $stmt->bind_param('i', $input);
            $stmt->execute();
            $result = $stmt->get_result();
            $data = array();

            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }

            return $data;
        }
    }

    public function get($input)
    {
        if ($this->db->con != null) {
            $query = "SELECT * FROM cart WHERE user_id = ?";
            $stmt = $this->db->con->prepare($query);
            $stmt->bind_param('i', $input);
            $stmt->execute();
            $result = $stmt->get_result();
            $data = $result->fetch_assoc();
            return $data;
        }
    }

    public function remove($id)
    {
        if ($this->db->con != null) {
            $query = "DELETE FROM cart WHERE id=$id";
            $result = $this->db->con->query($query);

            if ($result) {
                header("Location: " . $_SERVER['PHP_SELF']);
            }
        }
    }

    public function calculateTotal($price)
    {
        $this->total = $this->total + $price;
    }

    public function getTotal($shipping)
    {
        if ($this->total != 0) {
            return $this->total + $shipping;
        }
        return $this->total;
    }
}
