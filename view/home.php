<div class="home">
    <!-- top -->
    <div class="top">
        <?php $i=0; ?>
        <div class="left">
            <?php extract($dssale[$i]); echo '<a href="">'.$tensale.'</a>'; $i++;?>
        </div>
        <div class="between">
            <?php extract($dssale[$i]); echo '<a href="">'.$tensale.'</a>'; $i++;?>
        </div>
        <div class="right">
            <?php extract($dssale[$i]); echo '<a href="">'.$tensale.'</a>'; $i++;?>
        </div>
    </div>

    <!-- slide -->
    <div class="slide">
        <h2>Đây là slide</h2>
    </div>
</div>

<?php 
    include "../view/main.php";
?>