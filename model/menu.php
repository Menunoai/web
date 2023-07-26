<?php

    function insert_menu($ten){
        $sql = "insert into menu(tenmenu) value ('$ten')";
        pdo_execute($sql);
    }

    function update_menu($id, $ten){
        $sql = "update menu set tenmenu='$ten' where idmenu = '$id'";
        pdo_execute($sql);
    }

    function delete_menu($id){
        $sql = "delete from menu where idmenu = '$id'";
        pdo_execute($sql);
    }

    function loadall_menu(){
        $sql= "select * from menu order by idmenu desc";
            $listmenu=pdo_query($sql);
            return $listmenu;
    }
    function loadone_menu($id){
        $sql= "select * from menu where idmenu=".$id;
            $menu=pdo_query_one($sql);
            return $menu;
    }

    function laytenmenu($id){
        $sql= "select tenmenu from menu where idmenu=".$id;
            $tenmenu=pdo_query_value($sql);
            return $tenmenu;
    }

    // hàm lấy tên menu theo id danh mục
    function laytenmenu_dm($id){
        $sql= "select tenmenu
                from menu
                join danhmuc 
                on danhmuc.idmenu = menu.idmenu 
                where iddanhmuc=".$id;
            $tenmenu=pdo_query_value($sql);
            return $tenmenu;
    }

    // hàm lấy tên menu theo id loại sản phẩm
    function laytenmenu_lsp($id){
        $sql= "select tenmenu 
                from menu
                join danhmuc 
                on danhmuc.idmenu = menu.idmenu 
                join loaisanpham
                on danhmuc.iddanhmuc = loaisanpham.iddanhmuc
                where idloaisanpham=".$id;
            $tenmenu=pdo_query_value($sql);
            return $tenmenu;
    }

?>