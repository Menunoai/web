<?php

    function insert_motasp($idloaisanpham, $tenmotasp, $idanh, $luotxem, $gia){
        $sql = "insert into motasp(idloaisanpham, tenmotasp, idanh, luotxem, gia) value ('$idloaisanpham', '$tenmotasp', '$idanh', '$luotxem', '$gia')";
        pdo_execute($sql);
    }

    function update_motasp($idmotasp, $tenmotasp, $idloaisanpham, $idanh, $luotxem, $gia){
        $sql = "update motasp set (idloaisanpham, tenmotasp, idanh, luotxem, gia) ='$idloaisanpham', '$tenmotasp', '$idanh',   '$luotxem', '$gia' where idmotasp = '$idmotasp'";
        pdo_execute($sql);
    }

    function delete_motasp($id){
        $sql = "delete motasp where idmotasp = '$id'";
        pdo_execute($sql);
    }

    function loadall_motasp(){
        $sql= "select * from motasp order by idmotasp desc";
            $listmotasp=pdo_query($sql);
            return $listmotasp;
    }
    function loadone_motasp($id){
        $sql= "select * from motasp where idmotasp=".$id;
            $motasp=pdo_query_one($sql);
            return $motasp;
    }
    // loadall sản phẩm theo id menu
    function loadall_motasp_menu($id){
        $sql= "select * 
                from motasp join loaisanpham
                    on loaisanpham.idloaisanpham = motasp.idloaisanpham
                join danhmuc
                    on danhmuc.iddanhmuc = loaisanpham.iddanhmuc
                join menu
                    on (menu.idmenu = danhmuc.idmenu
                        and menu.idmenu='$id')";

        $listmotasp=pdo_query($sql);
        return $listmotasp;
    }
    // loadall sản phẩm theo id danh mục
    function loadall_motasp_dm($id){
        $sql= "select * 
                from motasp join loaisanpham
                    on loaisanpham.idloaisanpham = motasp.idloaisanpham
                join danhmuc
                    on (danhmuc.iddanhmuc = loaisanpham.iddanhmuc
                        and loaisanpham.iddanhmuc='$id')";

        $listmotasp=pdo_query($sql);
        return $listmotasp;
    }
    // loadall sản phẩm theo id loại sản phẩm
    function loadall_motasp_lsp($id){
        $sql= "select * 
                from motasp join loaisanpham
                    on (loaisanpham.idloaisanpham = motasp.idloaisanpham
                        and loaisanpham.idloaisanpham='$id')";

        $listmotasp=pdo_query($sql);
        return $listmotasp;
    }
    
    // loadall size theo id motasp
    function loadall_size_motasp($id){
        $sql= "select * 
                from size join chitietsp
                    on (chitietsp.idsize = size.idsize
                        and chitietsp.idmotasp='$id') LIMIT 0, 6";
        $listmotasp=pdo_query($sql);
        return $listmotasp;
    }
    
    // loadall màu theo id motasp
    function loadall_mausac_motasp($id){
        $sql= "select *
                from mausac join chitietsp
                    on (chitietsp.idmausac = mausac.idmausac
                    and chitietsp.idmotasp='$id') LIMIT 0, 20";

        $listmotasp=pdo_query($sql);
        return $listmotasp;
    }
    // lấy 5 sp có lượt xem nhiều nhất theo id loại sản phảm
    function top5luotxem($id){
        $sql= "select *
                from motasp
                where idloaisanpham = '$id'
                order by luotxem desc
                limit 5
            ";
        $listmotasp=pdo_query($sql);
        return $listmotasp;
    }
    // lấy id loại sản phảm theo id motasp
    function idloaisp_motasp($id){
        $sql= "select idloaisanpham 
                from motasp 
                where idmotasp='$id'";
        $listmotasp=pdo_query($sql);
        return $listmotasp;
    }
    // lấy id màu sắc cuối cùng theo id motasp
    function idmausac_motasp($id){
        $sql= "SELECT idmausac 
                FROM chitietsp 
                WHERE idmotasp = '$id'
                ORDER BY idmausac DESC
                LIMIT 1";        
        $listmotasp=pdo_query($sql);
        return $listmotasp;
    }
    
?>