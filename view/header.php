<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Noai</title>
    <link rel="stylesheet" href="../view/css/style.css">
    <!-- Nhúng Font Awesome vào trang web -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</head>

<body>
    <div class="header">
        <!-- ========== left ========== -->
        <div class="left">
            <?php 
                $sotrang = 1;
            ?>
            
            <?php
                foreach ($dsmenu as $menu) {
                    extract($menu);
                    $idmenuofmenu = $idmenu;
                    echo '<li>
                            <a href="">' . $tenmenu . '</a>
                            <ul class="sub_menu">';
                                foreach ($dsdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    $idmenuofdanhmuc = $idmenu;
                                    $iddanhmucofdanhmuc = $iddanhmuc;
                                    if($idmenuofmenu == $idmenuofdanhmuc){
                                        echo '<li>
                                                <a href="index.php?act=trangsanpham&iddanhmuc='.$iddanhmuc.'&sotrang='.$sotrang.'">' . $tendanhmuc . '</a>
                                                <ul class="sub_menu_con">';
                                                    foreach ($dsloaisanpham as $loaisanpham) {
                                                        extract($loaisanpham);
                                                        $iddanhmucofloaisanpham = $iddanhmuc;
                                                        if($iddanhmucofdanhmuc == $iddanhmucofloaisanpham){
                                                            echo '<li>
                                                                <a href="index.php?act=trangsanpham&iddanhmuc='.$iddanhmuc.'&idloaisanpham='.$idloaisanpham.'&sotrang='.$sotrang.'">' . $tenloaisanpham . '</a>
                                                            </li>';
                                                        }
                                                    }
                                                echo '</ul>
                                            </li>';
                                    }
                                }
                        echo '</ul> 
                        </li>';
                }
            ?>
        </div>

        <!-- =========================================================================== -->
        
<!-- ===================================================================================== -->

        <!-- ========== between ========== -->
        <div class="between">
            <a href="index.php"><img src="../view/images/logo.png" alt="logo"></a>
        </div>

        <!-- ========== right ========== -->
        <div class="right">
            <!-- tìm kiếm -->
            <form action="" method="post">
                <div class="timkiem">
                    <input type="text" name="keyword" placeholder="Tìm kiếm sản phẩm" >
                </div>
                <div class="search">
                    <input type="submit" name="timkiemsp" value="Tìm kiếm">
                    <!-- <a href="" type="submit"><i class="fas fa-search"></i></a> -->
                </div>
            </form>
            <a href="?act=user" type="submit"><i class="fas fa-user"></i></a>
            <a href="?act=them" type="submit"><i class="fas fa-cart-shopping"></i></a>
        </div>
    </div>