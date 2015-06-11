<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>

<div class="bx_breadcrumbs" <?if ($arParams["SHOW"] == "Y"):?>style="display: none;"<?endif?>>

<?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	"coffeediz.data-vocabulary.org", 
	array(
		"START_FROM" => $arParams['START_FROM'],
		"PATH" => $arParams['PATH'],
		"SITE_ID" => $arParams['SITE_ID'],
		"LAST_ELEMENT" => $arParams['LAST_ELEMENT'],
	),
	false,
    array('HIDE_ICONS' => 'Y')
);?>

</div>