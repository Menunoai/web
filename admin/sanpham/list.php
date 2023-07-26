<div class="admin-content-right">
            <div class="admin-content-right-category_list">
                <h1>Danh sách sản phẩm</h1>
                <table>
                        <tr>
                            <th>STT</th>
                            <th>ID</th>
                            <th>MENU</th>
                            <th>DANH MỤC</th>
                            <th>LOẠI SẢN PHẨM</th>
                            <th>SẢN PHẨM</th>
                            <th>GIÁ</th>
                            <th>MÀU SẮC</th>
                            <th>SIZE</th>
                            <th>SỐ LƯỢNG</th>
                            <th>TÙY BIẾN</th>
                            <th></th>
                        </tr>
                        <?php
                            $i=1;
                            foreach($listsanpham as $sanpham){
                                extract($sanpham);
                                $tendanhmuc=laytendanhmuc_lsp($brand_id);
                                $tenloaisanpham=laytenloaisanpham($brand_id);
                                $size=laysize($size_id);
                                $mausac=laytenmausac($mausac_id);
                                $tenmenu=laytenmenu_lsp($brand_id);
                                $sua="index.php?act=productedit&id=".$product_id;
                                $xoa="index.php?act=productdelete&id=".$product_id;
                                echo '<tr>
                                    <td>'.$i.'</td>
                                    <td>'.$product_id.'</td>
                                    <td>'.$tenmenu.'</td>
                                    <td>'.$tendanhmuc.'</td>
                                    <td>'.$tenloaisanpham.'</td>
                                    <td>'.$product_name.'</td>
                                    <td>'.$dongia.'</td>
                                    <td>'.$mausac.'</td>
                                    <td>'.$size.'</td>
                                    <td>'.$soluong.'</td>
                                    <td> <a href="'.$sua.'"> <input type="button" value="Sửa"> </a>
                                    <a href="'.$xoa.'"> <input type="button" value="Xóa"></td></a>
                                </tr>';
                                $i++;
                            }
                           


                        ?>
                        
                   </table>
            </div>
        </div>