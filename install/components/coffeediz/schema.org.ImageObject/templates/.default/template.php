<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>

<?if(!empty($arResult['ERRORS'])):?>
	<?foreach($arResult['ERRORS'] as $arErrors){?>
		<p><?=$arErrors?></p>
	<?}?>
<?else:?>

<div itemscope itemtype="http://schema.org/ImageObject" <?if(!empty($arParams['ITEMPROP'])):?>itemprop="<?=$arParams['ITEMPROP']?>" <?endif?><?if($arParams['SHOW'] == "Y"):?>style="display: none;" <?endif?>>

	<?if(!empty($arParams['CONTENTURL'])):?>
		<img src="<?=$arParams['CONTENTURL']?>" itemprop="contentUrl" alt="<?if(!empty($arParams['NAME'])):?><?=$arParams['NAME']?><?endif?>" />
	<?endif?>

	<div <?if($arParams['SHOW'] == 'IMG'):?> style="display: none;"<?endif?>>

        <?if(!empty($arParams['URL'])):?>
            <meta itemprop="url" content="<?=$arParams['URL']?>">
        <?endif?>
		<?if(!empty($arParams['NAME'])):?>
		<p itemprop="name"><?=$arParams['NAME']?></p>
		<?endif?>
		<?if(!empty($arParams['CAPTION'])):?>
		<p itemprop="caption"><?=$arParams['CAPTION']?></p>
		<?endif?>
		<?if(!empty($arParams['DESCRIPTION'])):?>
		<p itemprop="description"><?=$arParams['DESCRIPTION']?></p>
		<?endif?>

		<?if(!empty($arParams['HEIGHT'])):?>
		<meta itemprop="height" content="<?=$arParams['HEIGHT']?>px">
		<?endif?>
		<?if(!empty($arParams['WIDTH'])):?>
		<meta itemprop="width" content="<?=$arParams['WIDTH']?>px">
		<?endif?>

		<?if(!empty($arParams['TRUMBNAIL_CONTENTURL'])):?>
			<div itemscope itemtype="http://schema.org/ImageObject" itemprop="thumbnail">
				<img src="<?=$arParams['TRUMBNAIL_CONTENTURL']?>" itemprop="contentUrl" alt="<?if(!empty($arParams['NAME'])):?><?=$arParams['NAME']?><?endif?>" />
			</div>
		<?endif?>

		<?if(!empty($arParams['REPRESENTATIVEOFPAGE'])):?>
		<meta itemprop="representativeOfPage" content="<?=$arParams['REPRESENTATIVEOFPAGE']?>">
		<?endif?>

		<?if(!empty($arParams['RATINGVALUE']) and $arParams['PARAM_RATING_SHOW'] == "Y"):?>
		<?$APPLICATION->IncludeComponent(
			"coffeediz:schema.org.Rating",
			".default",
			Array(
				"SHOW" => $arParams['RATING_SHOW'],
				"RATINGVALUE" => $arParams['RATINGVALUE'],
				"RAITINGCOUNT" => $arParams['RAITINGCOUNT'],
				"REVIEWCOUNT" => $arParams['REVIEWCOUNT'],
				"BESTRATING" => $arParams['BESTRATING'],
				"WORSTRATING" => $arParams['WORSTRATING'],
                "AGGREGATE_RATING" => "Y",
				"ITEMPROP" => "Y"
			),
            false,
            array('HIDE_ICONS' => 'Y')
		);?>
		<?endif?>


	</div>

</div>

<?endif?>


