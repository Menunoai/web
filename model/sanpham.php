<?php

    function insert_sanpham($idloaisanpham, $tensanpham, $anh, $idmausac, $idsize, $ghichu, $luotxem, $gia, $soluong, $masp){
        $sql = "insert into sanpham(idloaisanpham, tensanpham, anh, idmausac, idsize, ghichu, luotxem, gia, soluong, masp ) value ('$idloaisanpham', '$tensanpham', '$anh', '$idmausac', '$idsize', '$ghichu', '$luotxem', '$gia', '$soluong', '$masp')";
        pdo_execute($sql);
    }

    function update_sanpham($idsanpham, $tensanpham, $anh, $idmausac, $idsize, $ghichu, $luotxem, $gia, $soluong, $masp){
        $sql = "update sanpham set (tensanpham, anh, idmausac, idsize, ghichu, luotxem, gia, soluong, masp ) ='$tensanpham', '$anh', '$idmausac', '$idsize', '$ghichu', '$luotxem', '$gia', '$soluong', '$masp' where idsanpham = '$idsanpham'";
        pdo_execute($sql);
    }

    function delete_sanpham($id){
        $sql = "delete sanpham where idsanpham = '$id'";
        pdo_execute($sql);
    }

    function loadall_sanpham(){
        $sql= "select * from sanpham order by idsanpham desc";
            $listsanpham=pdo_query($sql);
            return $listsanpham;
    }
    function loadone_sanpham($id){
        $sql= "select * from sanpham where idsanpham=".$id;
            $sanpham=pdo_query_one($sql);
            return $sanpham;
    }
    // loadall sản phẩm theo id menu
    function loadall_sanpham_menu($id){
        $sql= "select * 
                from sanpham join loaisanpham
                    on loaisanpham.idloaisanpham = sanpham.idloaisanpham
                join danhmuc
                    on danhmuc.iddanhmuc = loaisanpham.iddanhmuc
                join menu
                    on (menu.idmenu = danhmuc.idmenu
                        and menu.idmenu='$id')";

        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
    // loadall sản phẩm theo id danh mục
    function loadall_sanpham_dm($id){
        $sql= "select * 
                from sanpham join loaisanpham
                    on loaisanpham.idloaisanpham = sanpham.idloaisanpham
                join danhmuc
                    on (danhmuc.iddanhmuc = loaisanpham.iddanhmuc
                        and loaisanpham.iddanhmuc='$id')";

        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
    // loadall sản phẩm theo id loại sản phẩm
    function loadall_sanpham_lsp($id){
        $sql= "select * 
                from sanpham join loaisanpham
                    on (loaisanpham.idloaisanpham = sanpham.idloaisanpham
                        and loaisanpham.idloaisanpham='$id')";

        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
    // lấy tên sp theo mã sp
    function laytensp_masp($masp){
        $sql= "select tensanpham 
                from sanpham 
                where masp='.$masp.' ";

        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }

?>