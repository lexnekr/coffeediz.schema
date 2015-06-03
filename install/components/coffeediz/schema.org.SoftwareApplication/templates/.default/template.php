<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if(!empty($arResult['ERRORS'])):?>
	<?foreach($arResult['ERRORS'] as $arErrors){?>
		<p><?=$arErrors?></p>
	<?}?>
<?else:?>

    <div itemscope itemtype="http://schema.org/<?if(!empty($arParams['TYPE'])):?><?=$arParams['TYPE']?><?else:?>SoftwareApplication<?endif?>" <? if($arParams['SHOW'] == "Y") { echo 'style="display: none;"'; } ?> >



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
    <?if(!empty($arParams['PRICE'])):?>
        <p itemprop="offers"  itemscope itemtype="http://schema.org/Offer">
            <span itemprop="price"><?=$arParams['PRICE']?></span>
            <meta itemprop="priceCurrency" content="<?=$arParams['PRICECURRENCY']?>" />
        </p>
    <?endif?>






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

    <?if(!empty($arParams['CARRIERREQUIREMENTS']) and $arParams['TYPE'] == "MobileApplication"):?>
        <p itemprop="carrierRequirements"><?=$arParams['CARRIERREQUIREMENTS']?></p>
    <?endif?>

    <?if(!empty($arParams['BROWSERREQUIREMENTS']) and $arParams['TYPE'] == "WebApplication"):?>
        <p itemprop="browserRequirements"><?=$arParams['BROWSERREQUIREMENTS']?></p>
    <?endif?>

</div>

<?endif?>


