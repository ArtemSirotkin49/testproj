<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$objElements = CIBlockSection::GetTreeList(["IBLOCK_ID" => $arParams["IBLOCK_ID"]], ["ID", "NAME", "CODE"]);
while ($arElements = $objElements->Fetch()) {
    $arResult["SECTIONS"][] = $arElements;
}
$objElements = CIBlockElement::GetList(["ACTIVE_FROM" => $arParams["DATE_SORT"]], ["IBLOCK_ID" => $arParams["IBLOCK_ID"]], false, false, ["ID", "IBLOCK_ID", "IBLOCK_SECTION_ID", "NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE"]);
while ($arElements = $objElements->Fetch()) {
    $arResult["ITEMS"][] = $arElements;
}
foreach ($arResult["SECTIONS"] as $key => $section) {
    foreach ($arResult["ITEMS"] as $index => $item) {
        if ($section["ID"] == $item["IBLOCK_SECTION_ID"]) {
            $arResult["SECTIONS"][$key]["ITEMS"][] = $item;
            unset($arResult["ITEMS"][$index]);
        }
    }
}
unset($arResult["ITEMS"]);
$this->IncludeComponentTemplate(); ?>