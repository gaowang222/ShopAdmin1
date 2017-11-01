<?php

class ProductModel extends CI_Model
{

    function ProductModel()
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


    function insertProduct($title,$price,$stock,$Color,$Size,$introduce,$isSlider)
    {
        $sql = "insert into product(title,	price,stock,Color,Size,introduce,isSlider)values('$title','$price','$stock','$Color','$Size','$introduce','$isSlider')";
        $query = $this->db->query($sql);

        echo $query;
    }


}
?>