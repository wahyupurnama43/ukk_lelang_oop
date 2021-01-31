<?php

class Dashboard extends Database
{
    private $db;
    function __construct()
    {
        $this->db = $this->conn();
    }

    public function count($tb)
    {
        $sql = "SELECT count(*) as jumlah FROM $tb";
        $return = $this->db->query($sql);

        return $return->fetch_assoc(    );
    }
}
