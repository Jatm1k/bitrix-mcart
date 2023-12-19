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

<div class="review-block">
	<div class="review-text">
		<div class="review-text-cont">
			<?= $arResult["DETAIL_TEXT"] ?>
		</div>
		<div class="review-autor">
			<?= $arResult["NAME"] ?>, <?= $arResult["DISPLAY_ACTIVE_FROM"] ?>, <?= $arResult['DISPLAY_PROPERTIES']['POSITION']['VALUE'] ?>, <?= $arResult['DISPLAY_PROPERTIES']['COMPANY']['VALUE'] ?>.
		</div>
	</div>
	<div style="clear: both;" class="review-img-wrap"><img src="<?= is_array($arResult['DETAIL_PICTURE']) ? $arResult['DETAIL_PICTURE']["SRC"] : SITE_TEMPLATE_PATH . '/img/no_photo.jpg' ?>" alt="img"></div>
</div>
<?if(is_array($arResult['DISPLAY_PROPERTIES']['DOCUMENTS'])):?>
<div class="exam-review-doc">
<p>Документы:</p>
<?if(count($arResult['DISPLAY_PROPERTIES']['DOCUMENTS']['VALUE']) > 1):?>
	<?foreach($arResult['DISPLAY_PROPERTIES']['DOCUMENTS']['FILE_VALUE'] as $file):?>
		<div class="exam-review-item-doc"><img class="rew-doc-ico" src="<?= SITE_TEMPLATE_PATH ?>/img/icons/pdf_ico_40.png"><a href="<?= $file['SRC'] ?>"><?= $file['ORIGINAL_NAME'] ?></a></div>
	<?endforeach;?>
<?else:?>
<div class="exam-review-item-doc"><img class="rew-doc-ico" src="<?= SITE_TEMPLATE_PATH ?>/img/icons/pdf_ico_40.png"><a download href="<?= $arResult['DISPLAY_PROPERTIES']['DOCUMENTS']['FILE_VALUE']['SRC'] ?>"><?= $arResult['DISPLAY_PROPERTIES']['DOCUMENTS']['FILE_VALUE']['ORIGINAL_NAME'] ?></a></div>
<?endif;?>
</div>
<?endif;?>
<hr>
