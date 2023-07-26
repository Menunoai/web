<div class="admin-content-right">
            <div class="admin-content-right-category_add">
                <h1>Thêm Danh Mục</h1>
                <form action="index.php?act=categoryadd" method="post">
                    <select name="menu_id" id="">
                        <option value="#">--Chọn menu--</option>
                        <?php 
                            foreach($listmenu as $menu){
                                extract($menu);
                                echo ' <option value="'.$menu_id.'">'.$menu_name.'</option> ';
                            }
                        ?>

                    </select>
                    <input type="text" placeholder="Nhập tên Danh Mục" require name="tendanhmuc">
                    <input type="submit" name="themmoi" value="Thêm">
                </form>
            </div>
        </div>
    </section>