<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>

<?if(!empty($arResult['ERRORS'])):?>
	<?foreach($arResult['ERRORS'] as $arErrors){?>
		<p><?=$arErrors?></p>
	<?}?>
<?else:?>

	<div itemscope itemtype="http://schema.org/VideoObject" <?if($arParams['SHOW'] == "Y"):?>style="display: none;" <?endif?>>

        <!-- Start REQUIRED_PARAMS -->
        <?if(!empty($arParams['URL'])):?>
            <p>
                <a href="<?=$arParams['URL']?>" itemprop="url"><?=$arParams['URL']?></a>
            </p>
        <?endif?>
        <?if(!empty($arParams['NAME'])):?>
            <p itemprop="name"><?=$arParams['NAME']?></p>
        <?endif?>
        <?if(!empty($arParams['DESCRIPTION'])):?>
            <p itemprop="description"><?=$arParams['DESCRIPTION']?></p>
        <?endif?>
        <?if(!empty($arParams['THUNBNAIL_IMAGEURL'])):?>
            <?$APPLICATION->IncludeComponent(
                "coffeediz:schema.org.ImageObject",
                "",
                Array(
                    "CONTENTURL" => $arParams['THUNBNAIL_IMAGEURL'],
                    "NAME" => $arParams['THUNBNAIL_IMAGE_NAME'],
                    "CAPTION" => $arParams['THUNBNAIL_IMAGE_CAPTION'],
                    "DESCRIPTION" => $arParams['THUNBNAIL_IMAGE_DESCRIPTION'],
                    "HEIGHT" => $arParams['THUNBNAIL_IMAGE_HEIGHT'],
                    "WIDTH" => $arParams['THUNBNAIL_IMAGE_WIDTH'],
                    "TRUMBNAIL_CONTENTURL" => "",
                    "TRUMBNAIL_TYPE" => "N",
                    "REPRESENTATIVEOFPAGE" => "",
                    "PARAM_RATING_SHOW" => "N",
                    "ITEMPROP" => "thumbnail",
                ),
                false,
                array('HIDE_ICONS' => 'Y')
            );?>
        <?endif?>
        <?if(!empty($arParams['UPLOAD_DATE'])):?>
            <meta itemprop="uploadDate" content="<?=$arParams['UPLOAD_DATE']?>">
        <?endif?>
        <?if(!empty($arParams['DURATION'])):?>
            <meta itemprop="duration" content="<?=$arParams['DURATION']?>">
        <?endif?>
        <?if($arParams['IS_FAMILY_FRIENDLY'] == "Y"):?>
            <meta itemprop="isFamilyFriendly" content="true">
        <?else:?>
            <meta itemprop="isFamilyFriendly" content="false">
        <?endif?>
        <?if(!empty($arParams['LICENSE'])):?>
            <meta itemprop="license" content="<?=$arParams['LICENSE']?>">
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
                    "TRUMBNAIL_CONTENTURL" => "",
                    "TRUMBNAIL_TYPE" => "N",
                    "REPRESENTATIVEOFPAGE" => "",
                    "PARAM_RATING_SHOW" => "N",
                    "ITEMPROP" => "image",
                ),
                false,
                array('HIDE_ICONS' => 'Y')
            );?>
        <?endif?>
        <!-- End REQUIRED_PARAMS -->

        <!-- Start MAIN_PARAMS -->
        <?if(!empty($arParams['CONTENT_ID'])):?>
            <meta itemprop="content_id" content="<?=$arParams['CONTENT_ID']?>">
        <?endif?>
        <?if(!empty($arParams['AUTHOR_PERSON_NAME'])):?>
            <?$APPLICATION->IncludeComponent(
                "coffeediz:schema.org.Person",
                ".default",
                array(
                    "NAME" => $arParams['AUTHOR_PERSON_NAME'],
                    "ADDITIONALNAME" => $arParams['AUTHOR_PERSON_ADDITIONALNAME'],
                    "FAMILYNAME" => $arParams['AUTHOR_PERSON_FAMILYNAME'],
                    "JOBTITLE" => $arParams['AUTHOR_PERSON_JOBTITLE'],
                    "IMAGEURL" => $arParams['AUTHOR_PERSON_IMAGEURL'],
                    "WORKSFORNAME" => $arParams[''],
                    "PERSON_URL_SAMEAS" => $arParams['AUTHOR_PERSON_URL_SAMEAS'],
                    "PERSON_URL" => $arParams['AUTHOR_PERSON_URL'],
                    "PERSON_PHONE" => $arParams['AUTHOR_PERSON_PHONE'],
                    "PERSON_EMAIL" => $arParams['AUTHOR_PERSON_EMAIL'],
                    "ITEMPROP" => "author",
                ),
                false,
                array('HIDE_ICONS' => 'Y')
            );?>
        <?endif?>
        <?if(!empty($arParams['CAPTION'])):?>
            <meta itemprop="caption" content="<?=$arParams['CAPTION']?>">
        <?endif?>
        <?if(!empty($arParams['CONTENT_URL'])):?>
            <link itemprop="contentUrl" href="<?=$arParams['CONTENT_URL']?>">
        <?endif?>
        <?if(!empty($arParams['FEED_URL'])):?>
            <link itemprop="feedUrl" href="<?=$arParams['FEED_URL']?>">
        <?endif?>
        <?if(!empty($arParams['GENRE'])) { ?>
            <?foreach($arParams['GENRE'] as $key => $genre){
                if(empty($genre))
                    continue;
                ?>
                <meta itemprop="genre" content="<?=$genre?>"/>
            <? } ?>
        <? } ?>
        <?if(!empty($arParams['PRODUCTCOMPANY_ORGANIZATION_NAME']) and $arParams['PRODUCTCOMPANY_TYPE'] == "Text"):?>
            <p itemprop="productionCompany"><?=$arParams['PRODUCTCOMPANY_ORGANIZATION_NAME']?></p>
        <?elseif(!empty($arParams['PRODUCTCOMPANY_ORGANIZATION_NAME']) and $arParams['PRODUCTCOMPANY_TYPE'] == "Organization"):?>
            <?$APPLICATION->IncludeComponent(
                "coffeediz:schema.org.OrganizationAndPlace",
                "",
                Array(
                    "TYPE" => "Organization",
                    "TYPE_2" => $arParams['PRODUCTCOMPANY_ORGANIZATION_TYPE_2'],
                    "TYPE_3" => $arParams['PRODUCTCOMPANY_ORGANIZATION_TYPE_3'],
                    "TYPE_4" => $arParams['PRODUCTCOMPANY_ORGANIZATION_TYPE_4'],
                    "NAME" => $arParams['PRODUCTCOMPANY_ORGANIZATION_NAME'],
                    "DESCRIPTION" => $arParams['PRODUCTCOMPANY_ORGANIZATION_DESCRIPTION'],
                    "POST_CODE" => $arParams['PRODUCTCOMPANY_ORGANIZATION_POST_CODE'],
                    "COUNTRY" => $arParams['PRODUCTCOMPANY_ORGANIZATION_COUNTRY'],
                    "REGION" => $arParams['PRODUCTCOMPANY_ORGANIZATION_REGION'],
                    "LOCALITY" => $arParams['PRODUCTCOMPANY_ORGANIZATION_LOCALITY'],
                    "ADDRESS" => $arParams['PRODUCTCOMPANY_ORGANIZATION_ADDRESS'],
                    "PHONE" => $arParams['PRODUCTCOMPANY_ORGANIZATION_PHONE'],
                    "FAX" => $arParams[''],
                    "SITE" => $arParams['PRODUCTCOMPANY_ORGANIZATION_SITE'],
                    "LOGO" => $arParams[''],
                    "ITEMPROP" => "productionCompany",
                ),
                false,
                array('HIDE_ICONS' => 'Y')
            );?>
        <?endif?>
        <?if($arParams['IS_OFFICIAL'] == "Y"):?>
            <meta itemprop="isOfficial" content="true">
        <?endif?>
        <?if(!empty($arParams['STATUS'])):?>
            <meta itemprop="status" content="<?=$arParams['STATUS']?>"/>
        <?endif?>
        <!-- End MAIN_PARAMS -->

        <!-- Start REGIONAL_PARAMS -->
        <?if(!empty($arParams['ALLOWCOUNTRIES'])):?>
            <meta itemprop="allowCountries" content="<?=$arParams['ALLOWCOUNTRIES']?>"/>
        <?endif?>
                <?if(!empty($arParams['DISALLOWCOUNTRIES'])):?>
            <meta itemprop="disallowCountries" content="<?=$arParams['DISALLOWCOUNTRIES']?>"/>
        <?endif?>
                <?if(!empty($arParams['PRODUCTIONCOUNTRY'])):?>
            <meta itemprop="productionCountry" content="<?=$arParams['PRODUCTIONCOUNTRY']?>"/>
        <?endif?>
        <?if(!empty($arParams['IN_LANGUAGE'])):?>
            <meta itemprop="inLanguage" content="<?=$arParams['IN_LANGUAGE']?>"/>
        <?endif?>
        <?if(!empty($arParams['DUBBING'])):?>
            <meta itemprop="dubbing" content="<?=$arParams['DUBBING']?>"/>
        <?endif?>
        <?if(!empty($arParams['SUBTITLE_IN_LANGUAGE']) and !empty($arParams['SUBTITLE_URL'])):?>
            <span itemprop="subtitle" itemscope itemtype="http://schema.org/Subtitle">
                <meta itemprop="inLanguage" content="<?=$arParams['SUBTITLE_IN_LANGUAGE']?>">
                <link itemprop="url" href="<?=$arParams['SUBTITLE_URL']?>">
            </span>
        <?endif?>
        <!-- End REGIONAL_PARAMS -->


        <?if(!empty($arParams['KEYWORDS'])) { ?>
            <?foreach($arParams['KEYWORDS'] as $key => $keywords){
                if(empty($keywords))
                    continue;
                ?>
                <meta itemprop="keywords" content="<?=$keywords?>"/>
            <? } ?>
        <? } ?>



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

<?endif?>


