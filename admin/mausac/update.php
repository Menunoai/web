<?php 
    extract($dm);
?>

<div class="admin-content-right">
            <div class="admin-content-right-color_add">
                <h1>Sửa Thông Tin Màu Sắc</h1>
                <form action="index.php?act=colorupdate" method="post">
                    <input name="tenmausac" type="text" placeholder="Nhập tên màu sắc" require value="<?php echo $color_name ?>">
                    <input name="idmausac" type="hidden"value="<?php echo $color_id ?>">
                    <input type="submit" name="sua" value="Sửa">
                </form>
            </div>
        </div>
    </section>