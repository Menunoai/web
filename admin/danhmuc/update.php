<?php 
    extract($lsp);
?>

<div class="admin-content-right">
            <div class="admin-content-right-category_add">
                <h1>Sửa Thông Tin Danh Mục</h1>
                <form action="index.php?act=categoryupdate" method="post">
                    <input name="tendanhmuc" type="text" placeholder="Nhập tên danh mục" require value="<?php echo $category_name ?>">
                    <input name="iddanhmuc" type="hidden"value="<?php echo $category_id ?>">
                    <input type="submit" name="sua" value="Sửa">
                </form>
            </div>
        </div>
    </section>