<?php

    function insert_sale($ten, $giasale){
        $sql = "insert into sale(tensale, giasale) value ('$ten', '$giasale')";
        pdo_execute($sql);
    }

    function update_sale($id, $ten, $gia){
        $sql = "update sale set (tensale, giasale)='$ten', '$gia' where idsale = '$id'";
        pdo_execute($sql);
    }

    function delete_sale($id){
        $sql = "delete sale where idsale = '$id'";
        pdo_execute($sql);
    }

    function loadall_sale(){
        $sql= "select * from sale order by idsale desc";
            $listsale=pdo_query($sql);
            return $listsale;
    }
    function loadone_sale($id){
        $sql= "select * from sale where idsale=".$id;
            $sale=pdo_query_one($sql);
            return $sale;
    }

?>