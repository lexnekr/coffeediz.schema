<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if(!empty($arResult['ERRORS'])):?>
	<?foreach($arResult['ERRORS'] as $arErrors){?>
		<p><?=$arErrors?></p>
	<?}?>
<?else:?>

	<div itemscope itemtype="http://schema.org/Offer" <?if(!empty($arParams['ITEMPROP'])):?>itemprop="<?=$arParams['ITEMPROP']?>" <?endif?><?if($arParams['SHOW'] == "Y"):?>style="display: none;" <?endif?>>

	<?if(!empty($arParams['PRICE'])):?>
		<span itemprop="price"><?=$arParams['PRICE']?></span>
	<?endif?>
    <?if(!empty($arParams['PRICECURRENCY'])):?>
        <meta itemprop="priceCurrency" content="<?=$arParams['PRICECURRENCY']?>"/>
    <?endif?>
    <?if(!empty($arParams['ITEMAVAILABILITY'])):?>
        <meta itemprop="availability" content="http://schema.org/<?=$arParams['ITEMAVAILABILITY']?>" />
    <?endif?>
    <?if(!empty($arParams['ITEMCONDITION'])):?>
        <meta itemprop="itemCondition" itemtype="http://schema.org/OfferItemCondition" content="http://schema.org/<?=$arParams['ITEMCONDITION']?>"/>
    <?endif?>
    <?if(!empty($arParams['PAYMENTMETHOD'])) { ?>
        <div>
            <?foreach($arParams['PAYMENTMETHOD'] as $key => $acceptedPaymentMethod):?>
                <link itemprop="acceptedPaymentMethod" href="http://purl.org/goodrelations/v1#<?=$acceptedPaymentMethod?>">
            <?endforeach;?>
        </div>
    <? } ?>



	</div>

<?endif?>


