<?php

class songModel extends CI_Model
{

    function songModel()
    {
        $this->load->database();
    }

    function getSong()
    {
        $sql = 'SELECT * from song';
        // 查询数据库
        $query = $this->db->query($sql);
        // $query=$this->db->get('song');
        // 以数组形式返回查询结果
        return $query->result_array();
    }


    function insertSong()
    {
        $sql = "insert into song(name,introduce)values('king','123')";
        $query = $this->db->query($sql);

        echo $query;
    }

    function insertSong2()
    {
        $data = array(
            'name' => "wwesdd",
            'introduce' => "33535y4erth"
        );

        $query = $this->db->insert('song', $data);

        echo $query;
    }

    function updataSong1($name, $id)
    {
        $sql = "update songr set name = $name where id=$id";
        $query = $this->db->query($sql);
        echo $query;
    }

    function updataSong2()
    {
        $this->db->set('name', 'field+1');

        $this->db->where('id', 30);

        $query=$this->db->update('song');

        echo $query;
    }

    function deleteSong1(){
        $sql = "delete from song where id =30 ";
        $query = $this->db->query($sql);
        echo $query;
    }


    function deleteSong2(){
        $this->db->where('id', 31);
        $query =$this->db->delete('song');
        echo $query;
    }
}
?>