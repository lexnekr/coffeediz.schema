<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>

<?if(!empty($arResult['ERRORS'])):?>
	<?foreach($arResult['ERRORS'] as $arErrors){?>
		<p><?=$arErrors?></p>
	<?}?>
<?else:?>

	<div itemscope itemtype="http://schema.org/<?if($arParams['AGGREGATE_RATING'] == "Y"):?>AggregateRating<?else:?>Rating<?endif?>" <?if($arParams['AGGREGATE_RATING'] == "Y" and $arParams['ITEMPROP'] == "Y"):?>itemprop="aggregateRating"<?elseif($arParams['AGGREGATE_RATING'] == "N" and $arParams['ITEMPROP'] == "Y"):?>itemprop="reviewRating"<?endif?> <? if($arParams['SHOW'] == "Y") { echo 'style="display: none;"'; } ?> >

	<?if(!empty($arParams['RATINGVALUE'])):?>
		<div itemprop="ratingValue"><?=$arParams['RATINGVALUE']?></div>
	<?endif?>
	<?if(!empty($arParams['BESTRATING'])):?>
		<div itemprop="bestRating"><?=$arParams['BESTRATING']?></div>
	<?endif?>
	<?if(!empty($arParams['WORSTRATING'])):?>
		<div itemprop="worstRating"><?=$arParams['WORSTRATING']?></div>
	<?endif?>
	<?if(!empty($arParams['RAITINGCOUNT'])):?>
		<div itemprop="ratingCount"><?=$arParams['RAITINGCOUNT']?></div>
	<?endif?>
	<?if(!empty($arParams['REVIEWCOUNT'])):?>
		<div itemprop="reviewCount"><?=$arParams['REVIEWCOUNT']?></div>
	<?endif?>

	<?if($arParams['ITEMREVIEWED']=="OrganizationAndPlace"):?>
		<?$APPLICATION->IncludeComponent(
			"coffeediz:schema.org.OrganizationAndPlace",
			"",
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
			),
            false,
            array('HIDE_ICONS' => 'Y')
		);?>
	<?endif?>

	</div>

<?endif?>


