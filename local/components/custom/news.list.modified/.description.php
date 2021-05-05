<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$arComponentDescription = [
    "NAME" => GetMessage("Список элементов"),
    "DESCRIPTION" => GetMessage("Выводим список элементов инфоблока"),
    "SORT" => 1,
    "PATH" => [
        "ID" => "custom",
        "NAME" => "Собственные компоненты",
        "CHILD" => [
            "ID" => "elementsLists",
            "NAME" => "Списки элементов",
            "SORT" => 1,
        ]
    ],
];
?>