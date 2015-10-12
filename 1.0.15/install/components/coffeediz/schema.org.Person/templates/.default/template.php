<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>

<?if(!empty($arResult['ERRORS'])):?>
	<?foreach($arResult['ERRORS'] as $arErrors){?>
		<p><?=$arErrors?></p>
	<?}?>
<?else:?>

<div itemscope itemtype="http://schema.org/Person" <?if(!empty($arParams['ITEMPROP'])):?>itemprop="<?=$arParams['ITEMPROP']?>" <?endif?><?if($arParams['SHOW'] == "Y"):?>style="display: none;" <?endif?>>

    <?if(!empty($arParams['NAME'])):?>
        <p itemprop="name"><?=$arParams['NAME']?></p>
    <?endif?>
    <?if(!empty($arParams['ADDITIONALNAME'])):?>
        <p itemprop="additionalName"> <?=$arParams['ADDITIONALNAME']?></p>
    <?endif?>
    <?if(!empty($arParams['FAMILYNAME'])):?>
        <p itemprop="familyName"> <?=$arParams['FAMILYNAME']?></p>
    <?endif?>
    <?if(!empty($arParams['JOBTITLE'])):?>
        <p itemprop="jobTitle"><?=$arParams['JOBTITLE']?></p>
    <?endif?>

    <?if(!empty($arParams['WORKSFORNAME'])):?>
        <?$APPLICATION->IncludeComponent(
            "coffeediz:schema.org.OrganizationAndPlace",
            "",
            Array(
                "TYPE" => "Organization",
                "TYPE_2" => $arParams['WORKSFOR_TYPE_2'],
                "TYPE_3" => $arParams['WORKSFOR_TYPE_3'],
                "TYPE_4" => $arParams['WORKSFOR_TYPE_4'],
                "NAME" => $arParams['WORKSFORNAME'],
                "DESCRIPTION" => $arParams['WORKSFOR_DESCRIPTION'],
                "POST_CODE" => $arParams['WORKSFOR_POST_CODE'],
                "COUNTRY" => $arParams['WORKSFOR_COUNTRY'],
                "REGION" => $arParams['WORKSFOR_REGION'],
                "LOCALITY" => $arParams['WORKSFOR_LOCALITY'],
                "ADDRESS" => $arParams['WORKSFOR_ADDRESS'],
                "PHONE" => $arParams['WORKSFOR_PHONE'],
                "FAX" => $arParams[''],
                "SITE" => $arParams['WORKSFOR_SITE'],
                "LOGO" => $arParams[''],
                "ITEMPROP" => "worksFor",
            ),
            false,
            array('HIDE_ICONS' => 'Y')
        );?>
    <?endif?>

    <?if(!empty($arParams['IMAGEURL'])):?>
        <?$APPLICATION->IncludeComponent(
            "coffeediz:schema.org.ImageObject",
            "",
            Array(
                "CONTENTURL" => $arParams['IMAGEURL'],
                "NAME" => $arParams['IMAGE_NAME'],
                "CAPTION" => $arParams['IMAGE_CAPTION'],
                "DESCRIPTION" => $arParams['IMAGE_DESCRIPTION'],
                "HEIGHT" => $arParams['IMAGE_HEIGHT'],
                "WIDTH" => $arParams['IMAGE_WIDTH'],
                "TRUMBNAIL_CONTENTURL" => $arParams['IMAGE_TRUMBNAIL_CONTENTURL'],
                "TRUMBNAIL_TYPE" => "N",
                "REPRESENTATIVEOFPAGE" => "",
                "PARAM_RATING_SHOW" => "N",
                "ITEMPROP" => "image",
            ),
            false,
            array('HIDE_ICONS' => 'Y')
        );?>
    <?endif?>

    <?if(!empty($arParams['PERSON_URL_SAMEAS'])) { ?>
        <div>
            <?foreach($arParams['PERSON_URL_SAMEAS'] as $key => $sameAs){
                if(empty($sameAs))
                    continue;
                ?>
                <?if($key != 0) { echo ', '; }?>
                <a href="<?=$sameAs?>" itemprop="sameAs"><?=$sameAs?></a>
            <? } ?>
        </div>
    <? } ?>

    <?if(!empty($arParams['PERSON_URL'])) { ?>
        <div>
            <?foreach($arParams['PERSON_URL'] as $key => $url){
                if(empty($url))
                    continue;
                ?>
                <?if($key != 0) { echo ', '; }?>
                <a href="<?=$url?>" itemprop="url"><?=$url?></a>
            <? } ?>
        </div>
    <? } ?>

    <?if(!empty($arParams['PERSON_PHONE'])) { ?>
        <div>
            <?foreach($arParams['PERSON_PHONE'] as $key => $phone){
                if(empty($phone))
                    continue;
                ?>
                <?if($key != 0) { echo ', '; }?>
                <span itemprop="telephone"><?=$phone?></span>
            <? } ?>
        </div>
    <? } ?>

    <?if(!empty($arParams['PERSON_EMAIL'])) { ?>
        <div>
            <?foreach($arParams['PERSON_EMAIL'] as $key => $mail){
                if(empty($mail))
                    continue;
                ?>
                <?if($key != 0) { echo ', '; }?>
                <span itemprop="email"><?=$mail?></span>
            <? } ?>
        </div>
    <? } ?>



</div>

<?endif?>


