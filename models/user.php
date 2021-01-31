<?php

class User extends Database{
    private $db;
    public function __construct()
    {
        $this->db =  $this->conn();
    }

    public function getUser(){
        $sql = "SELECT * FROM tb_user WHERE is_admin = 0";
        $return = $this->db->query($sql);

        if ($return->num_rows > 0) {
            while ($data = $return->fetch_assoc()) {
                $hasil[] = $data;
            }
            return $hasil;
        }else{
            echo " <script> alert('Data Kosong'); </script> ";
        }
    }

    public function addData(){
        $nama = $this->db->real_escape_string($_POST['nama_lengkap']);
        $email = $this->db->real_escape_string($_POST['email']);
        $username = $this->db->real_escape_string($_POST['username']);
        $pass = password_hash($this->db->real_escape_string($_POST['password']),PASSWORD_DEFAULT);
        $telpon = $this->db->real_escape_string($_POST['telpon']);
        $alamat = $this->db->real_escape_string($_POST['alamat']);
        $tgl = $this->db->real_escape_string($_POST['tgl_lahir']);

        $sql = "INSERT INTO tb_user VALUES (null,'$nama','$email','$username','$pass','$telpon','$alamat',0,'$tgl',null)";
        $return = $this->db->query($sql);

        return $return;
    }

    public function getId($id){
        $sql = "SELECT * FROM tb_user WHERE id=$id";
        $return = $this->db->query($sql);

        $data = $return->fetch_assoc();
        return $data;
    }

    public function update(){
        $id = $this->db->real_escape_string($_POST['id']);
        $nama = $this->db->real_escape_string($_POST['nama_lengkap']);
        $email = $this->db->real_escape_string($_POST['email']);
        $username = $this->db->real_escape_string($_POST['username']);
        $telpon = $this->db->real_escape_string($_POST['telpon']);
        $alamat = $this->db->real_escape_string($_POST['alamat']);
        $tgl = $this->db->real_escape_string($_POST['tgl_lahir']);


        $sql = "UPDATE tb_user SET nama_lengkap='$nama',email='$email',username='$username',telpon='$telpon',alamat='$alamat',tgl_lahir='$tgl' WHERE id='$id'";
        $return = $this->db->query($sql);

        return $return;
    }

    public function delete($id){
        $sql = "DELETE FROM tb_user WHERE id='$id'";
        $return = $this->db->query($sql);
        return $return;
    }
}
