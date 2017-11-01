<?php

class ImageModel extends CI_Model
{

    function ImageModel()
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


    function insertSong1($imgurl)
    {
        $sql = "insert into product_images(imageUrl)values('$imgurl')";
        $query = $this->db->query($sql);

        echo $query;
    }

}
?>