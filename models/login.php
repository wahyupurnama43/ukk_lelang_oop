<?php
class Login extends Database{
    private $db;
    public function __construct(){
        session_start();
        $this->db = $this->conn();
    }
    public function login(){
        $us = $this->db->real_escape_string($_POST['username']);
        $pw = $this->db->real_escape_string($_POST['password']);

        // cek di database
        $sql = "SELECT * FROM tb_user WHERE username='$us'";
        $return = $this->db->query($sql);

        $sqlP = "SELECT * FROM tb_petugas WHERE username='$us'";
        $returnP = $this->db->query($sqlP);

        if($return->num_rows > 0){
            $data = $return->fetch_assoc();
            if (password_verify($pw,$data['password'])) {
                if ($data['is_admin'] == 1) {
                    $_SESSION['user'] = $data['username'];
                    $_SESSION['id'] = $data['id'];
                    $_SESSION['level'] = $data['is_admin'];
                    $_SESSION['login'] = 1;
                    header('Location: http://ukk-lelang.test/views/dashboard_user.php');
                }

            }else{
                return false;
                header('Location: http://ukk-lelang.test/views/login.php');
            }
        }else if($returnP->num_rows > 0){
            $dataP = $returnP->fetch_assoc();
            if (password_verify($pw,$dataP['password'])) {
                if ($dataP['level'] == 'admin' || $dataP['level'] == 'petugas' ) {
                    $_SESSION['user'] = $dataP['username'];
                    $_SESSION['id'] = $dataP['id'];
                    $_SESSION['level'] = $dataP['level'];
                    $_SESSION['login'] = 1;
                    header('Location: http://ukk-lelang.test/views/dashboard.php');
                }

            }else{
                return false;
                header('Location: http://ukk-lelang.test/views/login.php');
            }
        }
        else{
            return false;
            header('Location: http://ukk-lelang.test/views/login.php');
        }
    }

    public function isLogin(){
        if ($_SESSION['login'] === 1) {
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function logout()
    {
        session_destroy();
        unset($_SESSION['user']);
        unset($_SESSION['level']);
        unset($_SESSION['login']);
        header('Location: login.php');
    }

    public function register()
    {
        $nama = $this->db->real_escape_string($_POST['nama_lengkap']);
        $email = $this->db->real_escape_string($_POST['email']);
        $us = $this->db->real_escape_string($_POST['username']);
        $pw =  password_hash($this->db->real_escape_string($_POST['password']),PASSWORD_DEFAULT);
        $telpon = $this->db->real_escape_string($_POST['telpon']);
        $alamat = $this->db->real_escape_string($_POST['alamat']);
        $tgl = $this->db->real_escape_string($_POST['tgl_lahir']);

        $sql = "INSERT INTO tb_user VALUES (null,'$nama','$email','$us','$pw','$telpon','$alamat',0,'$tgl',null)";
        $return = $this->db->query($sql);

        if ($return > 0) {
            header('Location: login.php');
        }else{
            header('Location: register.php');
        }
    }


}

?>
