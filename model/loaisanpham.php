<?php

    function insert_loaisanpham($iddanhmuc, $tenloaisanpham){
        $sql="insert into loaisanpham(iddanhmuc, tenloaisanpham) value ('$iddanhmuc', '$tenloaisanpham')";
        pdo_execute(($sql));
    }
    function delete_loaisanpham($id){
        $sql= "delete from loaisanpham where idloaisanpham=".$id;
        pdo_execute($sql);
    }
    function loadall_loaisanpham(){
        $sql= "select * from loaisanpham order by idloaisanpham desc";
            $listloaisanpham=pdo_query($sql);
            return $listloaisanpham;
    }
    function loadone_loaisanpham($id){
        $sql= "select * from loaisanpham where idloaisanpham=".$id;
            $dm=pdo_query_one($sql);
            return $dm;
    }
    function update_loaisanpham($id, $tenloaisanpham){
        $sql="update loaisanpham set tenloaisanpham='".$tenloaisanpham."' where idloaisanpham=".$id;
        pdo_execute(($sql));
    }
    function loadall_lsp_id($id){
        $sql= "select * from loaisanpham where iddanhmuc=".$id;
            $lsp=pdo_query($sql);
            return $lsp;
    }
    // hàm lấy tên loại sp theo id loại sp
    function laytenloaisanpham($id){
        $sql= "select tenloaisanpham from loaisanpham where idloaisanpham=".$id;
            $tenlsp=pdo_query_value($sql);
            return $tenlsp;
    }
    // hàm lấy tên danh mục theo id loại sp
    function laytendanhmuc_lsp($id){
        $sql= "select category_name 
                from danhmuc
                join loaisanpham 
                on danhmuc.iddanhmuc = loaisanpham.iddanhmuc 
                where idloaisanpham=".$id;
            $tendm=pdo_query_value($sql);
            return $tendm;
    }
?>