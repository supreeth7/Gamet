<?php

require_once "Constants.php";


class Account
{
    private $db = null;
    private $errors = [];

    public function __construct($db)
    {
        if ($this->db != null) {
            return null;
        }
        $this->db = $db;
    }

    public function register($firstName, $lastName, $email, $password1, $password2, $username)
    {
        $this->validateFirstName($firstName);
        $this->validateLastName($lastName);
        $this->validateEmail($email);
        $this->validateUsername($username);
        $this->validatePasswords($password1, $password2);

        if (empty($this->errors)) {
            return $this->insertData($firstName, $lastName, $password1, $email, $username);
        }

        return false;
    }

    public function login($username, $password)
    {
        $query = "SELECT * FROM user WHERE username = ?";
        $stmt = $this->db->con->prepare($query);
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();

        $data = $result->fetch_assoc();

        if (password_verify($password, $data['password']) && $username = $data['username']) {
            return true;
        }

        array_push($this->errors, Constants::$InvalidCredentialsError);
        return false;
    }


    //Validators

    public function validateFirstName($input)
    {
        if (strlen($input) < 3 || strlen($input) > 25) {
            array_push($this->errors, Constants::$FirstNameError);
        }
    }

    public function validateLastName($input)
    {
        if (strlen($input) < 3 || strlen($input) > 25) {
            array_push($this->errors, Constants::$LastNameError);
        }
    }

    public function validatePasswords($input1, $input2)
    {
        if ($input1 != $input2) {
            array_push($this->errors, Constants::$PasswordMatchError);
            return;
        }

        if (strlen($input1) < 8 || strlen($input1) > 20) {
            array_push($this->errors, Constants::$PasswordLengthError);
        }
    }

    public function validateUsername($input)
    {
        if (strlen($input) < 4 || strlen($input) > 12) {
            array_push($this->errors, Constants::$UsernameError);
        }

        if ($this->db != null) {
            $query = "SELECT * FROM user WHERE username = ?";
            $stmt = $this->db->con->prepare($query);
            $stmt->bind_param('s', $input);
            $stmt->execute();
            $result = $stmt->get_result();
            
            if (mysqli_num_rows($result)) {
                array_push($this->errors, Constants::$UsernameExistError);
            }
        }
    }

    public function validateEmail($input)
    {
        if ($this->db != null) {
            $query = 'SELECT * FROM user WHERE email = ?';
            $stmt = $this->db->con->prepare($query);
            $stmt->bind_param('s', $input);
            $stmt->execute();
            $result = $stmt->get_result();

            if (mysqli_num_rows($result)) {
                array_push($this->errors, Constants::$EmailExistError);
            }
        }
    }

    //Error

    public function getError($error)
    {
        if (in_array($error, $this->errors)) {
            return $error;
        }
    }

    //get Input
    public function getInput($input)
    {
        if (isset($_POST[$input])) {
            echo $_POST[$input];
        }
    }

    //insertion

    private function insertData($firstName, $lastName, $password, $email, $username)
    {
        $hashed_pw = password_hash($password, PASSWORD_DEFAULT);

        if ($this->db != null) {
            $query = "INSERT INTO user (first_name, last_name, password, email, username) VALUES (?,?,?,?,?)";
            $stmt = $this->db->con->prepare($query);
            $stmt->bind_param("sssss", $firstName, $lastName, $hashed_pw, $email, $username);
            $result = $stmt->execute();
            return $result;
        }
    }
}
