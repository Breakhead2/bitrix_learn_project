<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?php if(!empty($arResult["ITEMS"])): ?>
<section class="slider-area">
    <div class="slider-active">
        <?php foreach ($arResult["ITEMS"] as $arItem): ?>
        <?php
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="single-slider" id="<?=$this->GetEditAreaId($arItem['ID']); ?>>
            <?php if ($arItem["PREVIEW_PICTURE"]["SRC"]): ?>
                <div class="slider-img parallax-bg bg-opacity-black-60" style="background:url(<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>)"></div>
            <?php endif; ?>
            <div class="slider-content slider-style-2 slider-style-4 text-center z-index-5">
                <span><?= $arItem["PROPERTIES"]["span"]["VALUE"] ?></span>
                <h2><?= $arItem["PREVIEW_TEXT"] ?></h2>
                <?php if(($arItem["PROPERTIES"]["button_link"]["VALUE"]) !== ""): ?>
                <a class="my-button" href="/<?php echo $arItem["PROPERTIES"]["button_link"]["VALUE"] ?>">Подробнее</a>
                <?php endif; ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>