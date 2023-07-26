<?php

    function insert_danhmuc($idmenu, $tendanhmuc){
        $sql="insert into danhmuc(idmenu, tendanhmuc) value ('$idmenu', '$tendanhmuc')";
        pdo_execute(($sql));
    }
    function delete_danhmuc($id){
        $sql= "delete from danhmuc where iddanhmuc=".$id;
        pdo_execute($sql);
    }
    function loadall_danhmuc(){
        $sql= "select * from danhmuc order by iddanhmuc desc";
            $listdanhmuc=pdo_query($sql);
            return $listdanhmuc;
    }
    function loadone_danhmuc($id){
        $sql= "select * from danhmuc where iddanhmuc=".$id;
            $dm=pdo_query_one($sql);
            return $dm;
    }
    function update_danhmuc($id, $tendanhmuc){
        $sql="update danhmuc set tendanhmuc='".$tendanhmuc."' where iddanhmuc=".$id;
        pdo_execute(($sql));
    }
    // hàm lấy tên danh mục theo id danh mục
    function laytendanhmuc($id){
        $sql= "select tendanhmuc from danhmuc where iddanhmuc=".$id;
            $tenlsp=pdo_query_value($sql);
            return $tenlsp;
    }

?>