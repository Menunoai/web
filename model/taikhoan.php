<?php
    function insert_taikhoan($user,$pass,$address,$hoten,$sdt){
        $sql="insert into taikhoan(username,password,diachi,hoten,sdt) value ('$user','$pass','$address','$hoten','$sdt')";
        pdo_execute(($sql));
    }
    function update_taikhoan($id,$user,$pass,$address,$hoten,$sdt){
        $sql="update from taikhoan set username='".$user."',password='".$pass."',hoten='".$hoten."',diachi='".$address."',sdt='".$sdt."' where idtaikhoan=".$id;
        pdo_execute(($sql));
    }
    function checkadmin($user,$pass){
        $sql= "select vaitro from taikhoan where username='".$user. "'AND password='".$pass."'";
        $tk=pdo_query_value($sql);
        return $tk;
    }

?>