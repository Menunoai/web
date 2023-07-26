<?php 
    function loadall_size(){
        $sql= "select * from size order by idsize desc";
            $listsize=pdo_query($sql);
            return $listsize;
    }
    function loadone_size($id){
        $sql= "select * from size where idsize=".$id;
            $dm=pdo_query_one($sql);
            return $dm;
    }
    // lấy tên size theo id size
    function tensize($id){
        $sql="select tensize from size where idsize=".$id;
        $ten=pdo_query_value($sql);
        return $ten;
    }
?>