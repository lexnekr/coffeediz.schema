<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>

<?if(!empty($arResult['ERRORS'])):?>
	<?foreach($arResult['ERRORS'] as $arErrors){?>
		<p><?=$arErrors?></p>
	<?}?>
<?else:?>

    <div itemscope itemtype="http://schema.org/<?if(!empty($arParams['TYPE'])):?><?=$arParams['TYPE']?><?else:?>SoftwareApplication<?endif?>" <? if($arParams['SHOW'] == "Y") { echo 'style="display: none;"'; } ?> >


    <?if(!empty($arParams['ADDITIONAL_TYPE'])):?>
        <link itemprop="additionalType" href="https://schema.org/<?=$arParams['ADDITIONAL_TYPE']?>"/>
    <?endif?>
    <?if(!empty($arParams['NAME'])):?>
    <p itemprop="name"><?=$arParams['NAME']?></p>
    <?endif?>
    <?if(!empty($arParams['DESCRIPTION'])):?>
    <p itemprop="description"><?=$arParams['DESCRIPTION']?></p>
    <?endif?>
    <?if(!empty($arParams['CATEGORY'])):?>
        <p itemprop="applicationCategory"><?=$arParams['CATEGORY']?></p>
    <?endif?>
    <?if(!empty($arParams['SUBCATEGORY'])):?>
        <p itemprop="applicationSubCategory"><?=$arParams['SUBCATEGORY']?></p>
    <?endif?>

    <?if(!empty($arParams['FILESIZE'])):?>
        <p itemprop="fileSize"><?=$arParams['FILESIZE']?><?=$arParams['FILESIZE_TYPE']?></p>
    <?endif?>
    <?if(!empty($arParams['INTERACTIONCOUNT'])):?>
        <meta itemprop="interactionCount" content="UserDownloads:<?=$arParams['INTERACTIONCOUNT']?>" />
    <?endif?>
    <?if(!empty($arParams['OPERATINGSYSTEM'])):?>
        <p itemprop="operatingSystem"><?=$arParams['OPERATINGSYSTEM']?></p>
    <?endif?>
    <?if(!empty($arParams['PRICE']) or !empty($arParams['AGGREGATEOFFER_PRICE']) or !empty($arParams['LOWPRICE']) or !empty($arParams['HIGHPRICE'])):?>
        <?$APPLICATION->IncludeComponent(
            "coffeediz:schema.org.Offer",
            ".default",
            array(
                "AGGREGATEOFFER" => $arParams['AGGREGATEOFFER'],
                "PRICE" => $arParams['PRICE'],
                "PRICECURRENCY" => $arParams['PRICECURRENCY'],
                "ITEMAVAILABILITY" => $arParams['ITEMAVAILABILITY'],
                "ITEMCONDITION" => $arParams['ITEMCONDITION'],
                "PAYMENTMETHOD" => $arParams['PAYMENTMETHOD'],
                "ITEMPROP" => "offers",
                "AGGREGATEOFFER_PRICE" => $arParams['AGGREGATEOFFER_PRICE'],
                "AGGREGATEOFFER_PRICECURRENCY" => $arParams['AGGREGATEOFFER_PRICECURRENCY'],
                "LOWPRICE" => $arParams['LOWPRICE'],
                "HIGHPRICE" => $arParams['HIGHPRICE'],
                "OFFERCOUNT" => $arParams['OFFERCOUNT']
            ),
            false,
            array('HIDE_ICONS' => 'Y')
        );?>
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

    <?if(!empty($arParams['CARRIERREQUIREMENTS']) and $arParams['TYPE'] == "MobileApplication"):?>
        <p itemprop="carrierRequirements"><?=$arParams['CARRIERREQUIREMENTS']?></p>
    <?endif?>

    <?if(!empty($arParams['BROWSERREQUIREMENTS']) and $arParams['TYPE'] == "WebApplication"):?>
        <p itemprop="browserRequirements"><?=$arParams['BROWSERREQUIREMENTS']?></p>
    <?endif?>

</div>

<?endif?>


