<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_model extends CI_Model {

    function check() {
        $data['email'] = $this -> input -> post('email');
        $password = $this -> input -> post('password');
        $sql = "SELECT * FROM user WHERE email = ? ";
        $salt = 'sqrocz';
        $password = substr(md5(md5($password) . $salt), 0, 30);
        $query = $this -> db -> query($sql, $data);
        foreach ($query->result() as $row) {
            if ($row -> password != $password) {
                return FALSE;
            } else {
                $data['username'] = $row -> username;
                $data['uid'] = $row -> uid;
                $data['user'] = "login_ok";
                $this -> session -> set_userdata($data);
                return TRUE;
            }
        }
    }

}
?>