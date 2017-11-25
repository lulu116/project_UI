<?php

class RegistModel extends CI_Model
{

    function RegistModel()
    {
        $this->load->database();
    }

    function insertUser($table,$login_name,$passwd,$userImg,$tel,$loginaddress){
        $sql = "insert into $table(login_name,passwd,userImg,tel,loginaddress) values('$login_name','$passwd','$userImg','$tel','$loginaddress')";
        $query = $this->db->query($sql);
        echo $query;
    }
    function getFirstProject(){
        $sql="select parent_cate_id,cate_name from cate where  parent_cate_id = 2 or  parent_cate_id = 3 or  parent_cate_id = 4";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    function getFirstProject2($table){
        $sql="select parent_cate_id,cate_name,status from $table where  status = 2 or  status = 3 or  status = 4";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
?>