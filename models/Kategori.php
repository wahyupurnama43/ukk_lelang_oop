<?php

class Kategori extends Database
{
    private $db;
    public function __construct()
    {
        $this->db = $this->conn();
    }

    public function getKategori()
    {
        $sql = "SELECT * FROM tb_kategori";
        $return = $this->db->query($sql);
        if ($return->num_rows > 0) {
            while ($data = $return->fetch_assoc()) {
                $hasil[] =$data;
            }
            return $hasil;
        }else{
            return $hasil = [];
        }
    }

    public function addData()
    {
        $kategori = $this->db->real_escape_string($_POST['kategori']);
        $sql = "INSERT INTO tb_kategori VALUES (null,'$kategori')";
        $return = $this->db->query($sql);
        return $return;
    }

    public function getId($id)
    {
        $sql = "SELECT * FROM tb_kategori WHERE id=$id";
        $return = $this->db->query($sql);

        return $return->fetch_assoc();
    }

    public function update()
    {
        $id = $this->db->real_escape_string($_POST['id']);
        $kategori = $this->db->real_escape_string($_POST['kategori']);

        $sql = "UPDATE tb_kategori SET name_kategori='$kategori' WHERE id='$id'";
        $return = $this->db->query($sql);

        return $return;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM tb_kategori WHERE id=$id";
        $return = $this->db->query($sql);

        return $return;
    }
}
