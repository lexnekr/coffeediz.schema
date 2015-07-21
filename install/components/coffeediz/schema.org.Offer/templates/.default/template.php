<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>

<?if(!empty($arResult['ERRORS'])):?>
	<?foreach($arResult['ERRORS'] as $arErrors){?>
		<p><?=$arErrors?></p>
	<?}?>
<?else:?>

	<div itemscope itemtype="http://schema.org/<?if($arParams['AGGREGATEOFFER']=='Y'):?>AggregateOffer<?else:?>Offer<?endif?>" <?if(!empty($arParams['ITEMPROP'])):?>itemprop="<?=$arParams['ITEMPROP']?>" <?endif?><?if($arParams['SHOW'] == "Y"):?>style="display: none;" <?endif?>>

        <?if($arParams['AGGREGATEOFFER']=='Y'):?>
            <div itemprop="lowPrice"><?=$arParams['LOWPRICE']?></div>
            <?if(!empty($arParams['HIGHPRICE'])):?>
                <div itemprop="highPrice"><?=$arParams['HIGHPRICE']?></div>
            <?endif?>
            <?if(!empty($arParams['AGGREGATEOFFER_PRICE'])):?>
                <?foreach($arParams['AGGREGATEOFFER_PRICE'] as $key => $AggregateOfferPrice){
                    if(empty($AggregateOfferPrice))
                        continue;
                    ?>
                        <?if($key != 0) {}?>
                        <?$APPLICATION->IncludeComponent(
                            "coffeediz:schema.org.Offer",
                            ".default",
                            array(
                                "PRICE" => $AggregateOfferPrice,
                                "PRICECURRENCY" => $arParams['AGGREGATEOFFER_PRICECURRENCY'][$key],
                                "ITEMAVAILABILITY" => $arParams['AGGREGATEOFFER_ITEMAVAILABILITY'],
                                "ITEMCONDITION" => $arParams['AGGREGATEOFFER_ITEMCONDITION'],
                                "PAYMENTMETHOD" => $arParams['PAYMENTMETHOD'],
                                "ITEMPROP" => "offers"
                            ),
                            false,
                            array('HIDE_ICONS' => 'Y')
                        );?>
                <? } ?>
            <?endif?>

        <?else:?>

            <span itemprop="price"><?=$arParams['PRICE']?></span>

        <?endif?>

        <?if(!empty($arParams['PRICECURRENCY'])):?>
            <meta itemprop="priceCurrency" content="<?=$arParams['PRICECURRENCY']?>"/>
        <?endif?>
        <?if(!empty($arParams['ITEMAVAILABILITY'])):?>
            <meta itemprop="availability" content="http://schema.org/<?=$arParams['ITEMAVAILABILITY']?>" />
        <?endif?>
        <?if(!empty($arParams['ITEMCONDITION'])):?>
            <meta itemprop="itemCondition" content="http://schema.org/<?=$arParams['ITEMCONDITION']?>"/>
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


