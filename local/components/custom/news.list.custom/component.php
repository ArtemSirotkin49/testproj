<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
CModule::IncludeModule('iblock');
if (!empty($_POST['id'])) {
    $APPLICATION->RestartBuffer();
    $voteNumObj = CIBlockElement::GetPropertyValues(1, ["ID" => $_POST['id']], false, ["CODE" => "VOTE_NUMBER"]);
    if ($arVoteNum = $voteNumObj->Fetch()) {
        CIBlockElement::SetPropertyValues($_POST['id'], 1, $arVoteNum['9'] - 1, "VOTE_NUMBER");
    }
    $arResult["ANSWER"] = [
        'isSuccess' => true,
        'number' => $arVoteNum['9'] - 1,
    ];
    header("Content-type: application/json; charset=utf-8");
    echo json_encode($arResult["ANSWER"]);
    exit();
} else {
    $objElements = CIBlockElement::GetList(
        ["SORT" => "ASC"],
        ["IBLOCK_ID" => $arParams["IBLOCK_ID"]],
        false,
        ["nPageSize" => 1, "iNumPage" => 6],
        ["ID", "IBLOCK_ID", "PREVIEW_PICTURE", "PREVIEW_TEXT", "NAME", "PROPERTY_VOTE_NUMBER"]
    );
    while ($arElements = $objElements->Fetch()) {
        $arResult["ITEMS"][] = $arElements;
    }
    $this->IncludeComponentTemplate();
} ?>