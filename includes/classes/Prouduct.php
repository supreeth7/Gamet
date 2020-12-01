<?php


class Product
{
    public $db = null;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }
}