<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
CJSCore::Init(["jquery"]);
CJSCore::Init(['ajax']);

foreach ($arResult["ITEMS"] as $key => $item) { ?>
    <div class="border-black">
        <div>
            <img src="<?= CFile::GetPath($item["PREVIEW_PICTURE"]) ?>" class="resizer">
        </div>
        <div>
            <?= $item["PREVIEW_TEXT"] ?>
        </div>
        <h4><?= $item["NAME"] ?></h4>
        <div class="vote_number">
            <h3>Количество голосов: <?= $item["PROPERTY_VOTE_NUMBER_VALUE"] ?></h3>
        </div>
        <div class="inc" data-value="<?= $item["ID"] ?>">
            +
        </div>
        <div class="dec" data-value="<?= $item["ID"] ?>">
            -
        </div>
    </div>
<?php } ?>
<?php if (!empty($_GET["VALUE"])) { ?>
    <div id="value" data-value="<?= $_GET["VALUE"] ?>"></div>
<?php } ?>