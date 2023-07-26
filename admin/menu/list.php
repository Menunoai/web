<div class="admin-content-right">
    <div class="admin-content-right-category_list">
        <h1>Danh sách menu</h1>
        <table>
            <tr>
                <th>STT</th>
                <th>MENU</th>
                <th>TÙY BIẾN</th>
                <th></th>
            </tr>
            <?php
                $i=1;
                foreach($listmenu as $menu){
                    extract($menu);
                    $sua="index.php?act=menuedit&id=".$idmenu;
                    $xoa="index.php?act=menudelete&id=".$idmenu;
                    echo '<tr>
                        <td>'.$i.'</td>
                        <td>'.$tenmenu.'</td>
                        <td> 
                            <a href="'.$sua.'"> <input type="button" value="Sửa"> </a>
                            <a href="'.$xoa.'"> <input type="button" value="Xóa"></a>
                        </td>
                    </tr>';
                $i++;
                }
            ?>
            
        </table>
    </div>
</div>