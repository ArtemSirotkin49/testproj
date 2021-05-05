<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule('iblock');
if (!empty($_POST['id'])) {
    $voteNumObj = CIBlockElement::GetPropertyValues(1, ["ID" => $_POST['id']], false, ["CODE" => "VOTE_NUMBER"]);
    if ($arVoteNum = $voteNumObj->Fetch()) {
        CIBlockElement::SetPropertyValues($_POST['id'], 1, $arVoteNum['9'] + 1, "VOTE_NUMBER");
    }
}
$result = [
    'isSuccess' => true,
    'number' => $arVoteNum['9'] + 1,
];
header("Content-type: application/json; charset=utf-8");
echo json_encode($result); ?>
