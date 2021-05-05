<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
use \Bitrix\Main\Localization\Loc;

foreach ($arResult["SECTIONS"] as $key => $section) {
    if (!empty($section["ITEMS"])) { ?>
        <h1><?= Loc::getMessage("NEWS_OF_SECTION"); ?> "<?= $section["NAME"]; ?>"</h1>
        <?php foreach ($section["ITEMS"] as $index => $item) { ?>
            <div class="border-black">
                <h4><?= $item["NAME"] ?></h4>
                <div>
                    <?= $item["PREVIEW_TEXT"] ?>
                </div>
                <div>
                    <img src="<?= CFile::GetPath($item["PREVIEW_PICTURE"]) ?>" class="resizer">
                </div>
                <div>
                    <?= $item["ACTIVE_FROM"] ?>
                </div>
            </div>
        <?php }
    }
} ?>
