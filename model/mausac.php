<?php

    function insert_mausac($tenmausac){
        $sql="insert into mausac(tenmausac) value ('$tenmausac')";
        pdo_execute(($sql));
    }
    function delete_mausac($id){
        $sql= "delete from mausac where idmausac=".$id;
        pdo_execute($sql);
    }
    function loadall_mausac(){
        $sql= "select * from mausac order by idmausac desc";
            $listmausac=pdo_query($sql);
            return $listmausac;
    }
    function loadone_mausac($id){
        $sql= "select * from mausac where idmausac=".$id;
            $dm=pdo_query_one($sql);
            return $dm;
    }
    function update_mausac($id, $tenmausac){
        $sql="update mausac set tenmausac='".$tenmausac."' where idmausac=".$id;
        pdo_execute(($sql));
    }
    // lấy tên màu sắc theo id màu sắc
    function tenmausac($id){
        $sql="select tenmausac from mausac where idmausac=".$id;
        $ten=pdo_query_value($sql);
        return $ten;
    }
?>