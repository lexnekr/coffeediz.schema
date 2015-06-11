<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>

<?if(!empty($arResult['ERRORS'])):?>
	<?foreach($arResult['ERRORS'] as $arErrors){?>
		<p><?=$arErrors?></p>
	<?}?>
<?else:?>

	<div itemscope itemtype="http://schema.org/Product" <?if($arParams['SHOW'] == "Y"):?>style="display: none;" <?endif?>>

        <?if(!empty($arParams['NAME'])):?>
            <p itemprop="name"><?=$arParams['NAME']?></p>
        <?endif?>
        <?if(!empty($arParams['DESCRIPTION'])):?>
            <p itemprop="description"><?=$arParams['DESCRIPTION']?></p>
        <?endif?>

        <?$APPLICATION->IncludeComponent(
            "coffeediz:schema.org.Offer",
            ".default",
            array(
                "PRICE" => $arParams['PRICE'],
                "PRICECURRENCY" => $arParams['PRICECURRENCY'],
                "ITEMAVAILABILITY" => $arParams['ITEMAVAILABILITY'],
                "ITEMCONDITION" => $arParams['ITEMCONDITION'],
                "PAYMENTMETHOD" => $arParams['PAYMENTMETHOD'],
                "ITEMPROP" => "offers"
            ),
            false,
            array('HIDE_ICONS' => 'Y')
        );?>


        <?if(!empty($arParams['RATINGVALUE']) and $arParams['PARAM_RATING_SHOW'] == "Y"):?>
            <?$APPLICATION->IncludeComponent(
                "coffeediz:schema.org.AggregateRating",
                ".default",
                Array(
                    "SHOW" => $arParams['RATING_SHOW'],
                    "RATINGVALUE" => $arParams['RATINGVALUE'],
                    "RAITINGCOUNT" => $arParams['RAITINGCOUNT'],
                    "REVIEWCOUNT" => $arParams['REVIEWCOUNT'],
                    "BESTRATING" => $arParams['BESTRATING'],
                    "WORSTRATING" => $arParams['WORSTRATING'],
                    "ITEMPROP" => "Y"
                ),
                false,
                array('HIDE_ICONS' => 'Y')
            );?>
        <?endif?>

	</div>

<?endif?>


