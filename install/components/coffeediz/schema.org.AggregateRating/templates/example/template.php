<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if(!empty($arResult['ERRORS'])):?>
	<?foreach($arResult['ERRORS'] as $arErrors){?>
		<p><?=$arErrors?></p>
	<?}?>
<?else:?>

	<div itemscope itemtype="http://schema.org/AggregateRating" <? if($arParams['ITEMPROP'] == "Y") { echo 'itemprop="aggregateRating"'; } ?> <? if($arParams['SHOW'] == "Y") { echo 'style="display: none;"'; } ?> >
	<p>
	<?if(!empty($arParams['RATINGVALUE'])):?>
		<span itemprop="ratingValue"><?=$arParams['RATINGVALUE']?></span>
	<?endif?>
	<?if(!empty($arParams['WORSTRATING']) or !empty($arParams['BESTRATING'])):?>
		<?=GetMessage('SCALE_1')?>
		<?if(!empty($arParams['WORSTRATING'])):?>
			<span itemprop="worstRating"><?=$arParams['WORSTRATING']?></span>
		<?endif?>
		<?=GetMessage('SCALE_2')?>
		<?if(!empty($arParams['BESTRATING'])):?>
			<span itemprop="bestRating"><?=$arParams['BESTRATING']?></span>
		<?endif?>
		<?=GetMessage('SCALE_3')?>
	<?endif?>
	</p>
	<?if(!empty($arParams['RAITINGCOUNT'])):?>
		<span itemprop="ratingCount"><?=$arParams['RAITINGCOUNT']?></span><?=GetMessage('RAITINGCOUNT')?>
	<?endif?>
	<?if(!empty($arParams['REVIEWCOUNT'])):?>
		<span itemprop="reviewCount"><?=$arParams['REVIEWCOUNT']?></span><?=GetMessage('REVIEWCOUNT')?>
	<?endif?>

	<?if($arParams['ITEMREVIEWED']=="OrganizationAndPlace"):?>
		<?$APPLICATION->IncludeComponent(
			"coffeediz:schema.org.OrganizationAndPlace",
			"example",
			Array(
				"TYPE" => $arParams['ITEMREVIEWED_TYPE'],
				"NAME" => $arParams['ITEMREVIEWED_NAME'],
				"POST_CODE" => $arParams['ITEMREVIEWED_POST_CODE'],
				"COUNTRY" => $arParams['ITEMREVIEWED_COUNTRY'],
				"REGION" => $arParams['ITEMREVIEWED_REGION'],
				"LOCALITY" => $arParams['ITEMREVIEWED_LOCALITY'],
				"ADDRESS" => $arParams['ITEMREVIEWED_ADDRESS'],
				"PHONE" => $arParams['ITEMREVIEWED_PHONE'],
				"FAX" => $arParams['ITEMREVIEWED_FAX'],
				"SITE" => $arParams['ITEMREVIEWED_SITE'],
				"LOGO" => $arParams['ITEMREVIEWED_LOGO'],
				"ITEMPROP" => "itemReviewed",
			)
		);?>
	<?endif?>

	</div>

<?endif?>


