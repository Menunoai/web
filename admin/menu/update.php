<?php 
    extract($menu);
?>

<div class="admin-content-right">
    <div class="admin-content-right-category_add">
        <h1>Sửa Thông Tin Menu</h1>
        <form action="index.php?act=menuupdate" method="post">
            <input name="tenmenu" type="text" placeholder="Nhập tên menu" require value="<?php echo $tenmenu ?>">
            <input name="idmenu" type="hidden"value="<?php echo $idmenu ?>">
            <input type="submit" name="sua" value="Sửa">
        </form>
    </div>
</div>