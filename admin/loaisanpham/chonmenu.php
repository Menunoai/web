<div class="admin-content-right">
            <div class="admin-content-right-product_add">
                <h1>Thêm Loại Sản phẩm</h1>
                <form action="index.php?act=brandadd" method="post">
                    <select name="menu_id" id="">
                        <option value="#">--Chọn menu--</option>
                        <?php 
                            foreach($listmenu as $menu){
                                extract($menu);
                                echo ' <option value="'.$menu_id.'">'.$menu_name.'</option> ';
                            }
                        ?>
                    </select>
                            
                    <input type="submit" name="tieptuc" value="Tiếp tục">
                </form>
            </div>
        </div>
    </section>

    