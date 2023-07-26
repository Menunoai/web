<?php

    function insert_chitietsp($idmotasp, $mausac, $soluong, $ghichu){
        $sql = "insert into chitietsp(idmotasp, mausac, soluong, ghichu) value ('$idmotasp', '$mausac', '$soluong', '$ghichu')";
        pdo_execute($sql);
    }

    function update_chitietsp($idchitietsp, $idmotasp, $mausac, $soluong, $ghichu){
        $sql = "update chitietsp set (idmotasp, mausac, soluong, ghichu) ='$idmotasp', '$mausac', '$soluong', '$ghichu' where idchitietsp = '$idchitietsp'";
        pdo_execute($sql);
    }

    function delete_chitietsp($id){
        $sql = "delete chitietsp where idchitietsp = '$id'";
        pdo_execute($sql);
    }

    function loadall_chitietsp(){
        $sql= "select * from chitietsp order by idchitietsp desc";
            $listchitietsp=pdo_query($sql);
            return $listchitietsp;
    }
    function loadone_chitietsp($id){
        $sql= "select * from chitietsp where idchitietsp=".$id;
            $chitietsp=pdo_query_one($sql);
            return $chitietsp;
    }
    // loadall sản phẩm theo id menu
    function loadall_chitietsp_menu($id){
        $sql= "select * 
                from chitietsp join motasp
                    on chitietsp.idmotasp = motasp.idmotasp
                join loaisanpham
                    on loaisanpham.idloaisanpham = motasp.idloaisanpham
                join danhmuc
                    on danhmuc.iddanhmuc = loaisanpham.iddanhmuc
                join menu
                    on (menu.idmenu = danhmuc.idmenu
                        and menu.idmenu='$id')";

        $listchitietsp=pdo_query($sql);
        return $listchitietsp;
    }

    // loadall sản phẩm theo id mô tả sp
    function loadall_chitietsp_motasp($id){
        $sql= "select * 
                from chitietsp join motasp
                    on (chitietsp.idmotasp = motasp.idmotasp
                        and chitietsp.idmotasp='$id')";

        $listchitietsp=pdo_query($sql);
        return $listchitietsp;
    }
    // loadall size theo id mausac
    function loadall_size_mausac($id){
        $sql= "select * 
                from size join chitietsp
                    on (chitietsp.idsize = size.idsize
                        and chitietsp.idmausac='$id') LIMIT 0, 6";
        $listmotasp=pdo_query($sql);
        return $listmotasp;
    }
?>