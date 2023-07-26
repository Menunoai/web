<?php 
    extract($lsp);
?>

<div class="admin-content-right">
            <div class="admin-content-right-brand_add">
                <h1>Sửa Thông Tin Loại Sản Phẩm</h1>
                <form action="index.php?act=brandupdate" method="post">
                    <input name="tenloaisanpham" type="text" placeholder="Nhập tên danh mục" require value="<?php echo $brand_name ?>">
                    <input name="idloaisanpham" type="hidden"value="<?php echo $brand_id ?>">
                    <input type="submit" name="sua" value="Sửa">
                </form>
            </div>
        </div>
    </section>