<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php if (!empty($arResult)):?>
<div class="header-main-menu hidden-xs">
    <nav id="primary-menu">
        <ul class="main-menu text-right">
            <?php foreach($arResult as $arItem): ?>
                <?if($arItem["SELECTED"]):?>
                    <li>
                        <a <?php if($arItem["PARAMS"]["TEST_PROPERTY"]) :?> style="color:#5aff00" <?php else: ?> style="color:#03A9F4" <?php endif;?>href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
                    </li>
                <?php else : ?>
                    <li>
                        <a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
                    </li>
                <?php endif;?>
            <?php endforeach; ?>
        </ul>
    </nav>
</div>
<?php endif;?>

<!--
<span class="indicator"><i class="fa fa-angle-down"></i></span></a>
<ul class="dropdown">
    <li>
        <a href="services_landing.html">Лендинг</a>
    </li>
    <li>
        <a href="services_online_shop.html">Интернет-магазин</a>
    </li>
</ul>
-->
