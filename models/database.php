<?php
class Database
{
    private $host = 'localhost';
    private $user = 'wahyu';
    private $pass = 'wahyup';
    private $db   = 'ukk_lelang';

    public function conn()
    {
        // koneksi ke database
        $mysqli = mysqli_connect($this->host,$this->user,$this->pass,$this->db);

        if (mysqli_connect_error()) {
            echo mysqli_connect_error();die;
        }
        return $mysqli;
    }
}
