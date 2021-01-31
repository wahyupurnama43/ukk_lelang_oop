<?php

class Petugas extends Database{
    private $db;
    public function __construct(){
        $this->db = $this->conn();
    }

    public function getPetugas(){
        $sql = "SELECT * FROM tb_petugas";
        $return = $this->db->query($sql);
        if ($return->num_rows > 0 ) {
            while ($data = $return->fetch_assoc()) {
                $hasil[] = $data;
            }
            return $hasil;
        }else{
            var_dump('data kosong');die;
        }
    }

    public function addData()
    {
        $us = $this->db->real_escape_string($_POST['nama_lengkap']);
        $email = $this->db->real_escape_string($_POST['email']);
        $username = $this->db->real_escape_string($_POST['username']);
        $pass = password_hash($this->db->real_escape_string($_POST['password']),PASSWORD_DEFAULT);
        $telpon = $this->db->real_escape_string($_POST['telpon']);
        $alamat = $this->db->real_escape_string($_POST['alamat']);
        $level = $this->db->real_escape_string($_POST['level']);
        $tgl = $this->db->real_escape_string($_POST['tgl_lahir']);

        $sql = "INSERT INTO tb_petugas VALUES(null,'$us','$email','$username','$pass','$telpon','$alamat','$tgl','$level',null)";
        $return = $this->db->query($sql);

        return $return;

    }

    public function getId($id){
        $sql = "SELECT * FROM tb_petugas WHERE id=$id";
        $return = $this->db->query($sql);

        return $return->fetch_assoc();
    }

    public function update()
    {
        $id = $this->db->real_escape_string($_POST['id']);
        $us = $this->db->real_escape_string($_POST['nama_lengkap']);
        $email = $this->db->real_escape_string($_POST['email']);
        $username = $this->db->real_escape_string($_POST['username']);
        $telpon = $this->db->real_escape_string($_POST['telpon']);
        $alamat = $this->db->real_escape_string($_POST['alamat']);
        $level = $this->db->real_escape_string($_POST['level']);
        $tgl = $this->db->real_escape_string($_POST['tgl_lahir']);

        $sql ="UPDATE tb_petugas SET nama_lengkap='$us',email='$email',username='$username',telpon='$telpon',tgl_lahir='$tgl',level='$level' WHERE id='$id'";
        $return = $this->db->query($sql);

        return $return;
    }

    public function delete($id){
        $sql = "DELETE FROM tb_petugas WHERE id='$id'";
        $return = $this->db->query($sql);
        return $return;
    }

}
