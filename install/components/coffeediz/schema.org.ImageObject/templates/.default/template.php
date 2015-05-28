<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if(!empty($arResult['ERRORS'])):?>
	<?foreach($arResult['ERRORS'] as $arErrors){?>
		<p><?=$arErrors?></p>
	<?}?>
<?else:?>

	<div itemscope itemtype="http://schema.org/ImageObject" <? if($arParams['ITEMPROP'] == "Y") { echo 'itemprop="aggregateRating"'; } ?> <? if($arParams['SHOW'] == "Y") { echo 'style="display: none;"'; } ?> >

	<?if(!empty($arParams['RATINGVALUE'])):?>
		<div itemprop="ratingValue"><?=$arParams['RATINGVALUE']?></div>
	<?endif?>

	</div>

<?endif?>


