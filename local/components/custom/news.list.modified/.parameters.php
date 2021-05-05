<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$arComponentParameters = [
    "GROUPS" => [],
    "PARAMETERS" => [
        "IBLOCK_ID" => [
            "PARENT" => "BASE",
            "NAME" => "ID инфоблока",
            "TYPE" => "STRING",
            "MULTIPLE" => "N"
        ],
        "DATE_SORT" => [
            "PARENT" => "BASE",
            "NAME" => "Порядок сортировкик по дате",
            "TYPE" => "STRING",
            "MULTIPLE" => "N"
        ],
    ],
];
?>