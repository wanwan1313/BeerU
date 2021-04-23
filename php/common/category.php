<!-- 產品類別 -->
<?php

$brands_SQL = "SELECT * FROM `tags` WHERE `pre_sid` = 1";
$total_brands = $pdo -> query($brands_SQL) ->fetchAll();

$countries_SQL = "SELECT * FROM `tags` WHERE `pre_sid` = 2";
$total_countries =  $pdo -> query($countries_SQL) ->fetchAll();

// echo print_r($total_countries);

$type_SQL = "SELECT * FROM `tags` WHERE `pre_sid` = 3";
$total_type =  $pdo -> query($type_SQL) ->fetchAll();

$merch_SQL = "SELECT * FROM `tags` WHERE `pre_sid` = 4";
$total_merch =  $pdo -> query($merch_SQL) ->fetchAll();


?>


<div class="product-category " style="display:none">

    <div class="trigger on"><span></span></div>

    <div class="menu-search d-block d-lg-none d-flex justify-content-center align-items-center">
        <i class="fas fa-search"></i><input type="text" name="search" class="mobile-search-bar" placeholder="找啤酒">
    </div>


    <div class="category-title">
        <p>商品分類</p>
    </div>
    <div class="category">
        <div class="category-item category-1 hot-beer">
            <a href="javascript: selectHot()" class="category-out-item" >
                <div class="category-name0 d-flex justify-content-between">
                    <p><i class="fas fa-crown"></i>熱門商品</p>
                </div>
            </a>
        </div>
        <div class="category-item category-2 beer-brand">
            <div class="category-name d-flex justify-content-between">
                <p><i class="fas fa-beer"></i>酒廠</p>
                <div><i class="fas fa-chevron-down"></i></div>
            </div>
            <ul class="category-sub-item-warp d-flex flex-wrap">
                <?php foreach( $total_brands as $tb ): ?>
                <li class="col-6 col-lg-12 category-sub-item" data-sid="<?= $tb['sid']?>">
                    <a href="javascript: changeCate(<?= $tb['sid']?>)"><?= $tb['name']?></a>
                </li>
                <?php endforeach; ?>          
            </ul>
            <!-- 算高度用 -->
            <ul class="category-sub-item-warp0 d-flex flex-wrap">
                <?php foreach( $total_brands as $tb ): ?>
                <li class="col-6 col-lg-12 category-sub-item" data-sid="<?= $tb['sid']?>">
                    <a href="javascript: "><?= $tb['name']?></a>
                </li>
                <?php endforeach; ?>          
            </ul>   
        </div>
        <div class="category-item category-3 beer-country">
            <div class="category-name d-flex justify-content-between">
                <p><i class="fas fa-globe-asia"></i>國家/產地</p>
                <div><i class="fas fa-chevron-down"></i></i></div>
            </div>
            <ul class="category-sub-item-warp d-flex flex-wrap">
                <?php foreach( $total_countries as $tc ): ?>
                <li class="col-6 col-lg-12 category-sub-item" data-sid="<?= $tc['sid']?>">
                    <a href="javascript: changeCate(<?= $tc['sid']?>)"><?= $tc['name']?></a>
                </li>
                <?php endforeach; ?>           
            </ul>
            <!-- 算高度用 -->
            <ul class="category-sub-item-warp0 d-flex flex-wrap">
                <?php foreach( $total_countries as $tc ): ?>
                <li class="col-6 col-lg-12 category-sub-item" data-sid="<?= $tc['sid']?>">
                    <a href="javascript: "><?= $tc['name']?></a>
                </li>
                <?php endforeach; ?>           
            </ul>   
        </div>
        <div class="category-item category-4 beer-type">
            <div class="category-name d-flex justify-content-between">
                <p><i class="fas fa-tint"></i>酒色/類型</p>
                <div><i class="fas fa-chevron-down"></i></div>
            </div>
            <ul class="category-sub-item-warp d-flex flex-wrap">
                <?php foreach( $total_type as $tt ): ?>
                <li class="col-6 col-lg-12 category-sub-item" data-sid="<?= $tt['sid']?>">
                    <a href="javascript: changeCate(<?= $tt['sid']?>)"><?= $tt['name']?></a>
                </li>
                <?php endforeach; ?>   
            </ul>
            <!-- 算高度用 -->
            <ul class="category-sub-item-warp0 d-flex flex-wrap">
                <?php foreach( $total_type as $tt ): ?>
                <li class="col-6 col-lg-12 category-sub-item" data-sid="<?= $tt['sid']?>">
                    <a href="javascript: "><?= $tt['name']?></a>
                </li>
                <?php endforeach; ?>   
            </ul>         
        </div>
        <div class="category-item category-5 beer-merch">
            <div class="category-name d-flex justify-content-between">
                <p><i class="fas fa-glass-cheers"></i>啤酒周邊</p>
                <div><i class="fas fa-chevron-down"></i></div>
            </div>
            <ul class="category-sub-item-warp d-flex flex-wrap justify-content-center">
                <?php foreach( $total_merch as $tm ): ?>
                <li class="col-6 col-lg-12 category-sub-item" data-sid="<?= $tm['sid']?>">
                    <a href="javascript: changeCate(<?= $tm['sid']?>)"><?= $tm['name']?></a>
                </li>
                <?php endforeach; ?>  
            </ul>
            <!-- 算高度用 -->
            <ul class="category-sub-item-warp0 d-flex flex-wrap justify-content-center">
                <?php foreach( $total_merch as $tm ): ?>
                <li class="col-6 col-lg-12 category-sub-item" data-sid="<?= $tm['sid']?>">
                    <a href="javascript: "><?= $tm['name']?></a>
                </li>
                <?php endforeach; ?>  
            </ul>
            
        </div>
        <div class="category-item category-6 all-beer">
            <a href="javascript: changeCate(0)" class="category-out-item" >
                <div class="category-name0 d-flex justify-content-between" >
                    <p><i class="fas fa-th"></i>全部商品</p>
                </div>
            </a>
        </div>
    </div>

    <div class="menu-logo"></div>
</div>