<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>

<?if(!empty($arResult['ERRORS'])):?>
	<?foreach($arResult['ERRORS'] as $arErrors){?>
		<p><?=$arErrors?></p>
	<?}?>
<?else:?>

	<div itemscope itemtype="http://schema.org/<?if(!empty($arParams['TYPE'])):?><?=$arParams['TYPE']?><?else:?>Article<?endif?>" <?if($arParams['SHOW'] == "Y"):?>style="display: none;" <?endif?>>

        <?if(!empty($arParams['LEARNING_RESOURCE_TYPE'])):?>
            <meta itemprop="learningResourceType" content="<?=$arParams['LEARNING_RESOURCE_TYPE']?>"/>
        <?endif?>
        <?if(!empty($arParams['NAME'])):?>
            <p itemprop="name"><?=$arParams['NAME']?></p>
            <meta itemprop="headline" content="<?=$arParams['NAME']?>"/>
        <?endif?>
        <?if(!empty($arParams['ARTICLEBODY'])):?>
            <p itemprop="articleBody"><?=$arParams['ARTICLEBODY']?></p>
            <meta itemprop="description" content="<?=$arParams['ARTICLEBODY']?>"/>
        <?endif?>
        <?if(!empty($arParams['ABOUT'])):?>
            <meta itemprop="about" content="<?=$arParams['ABOUT']?>"/>
        <?endif?>
        <?if(!empty($arParams['GENRE'])):?>
            <p itemprop="genre"><?=$arParams['GENRE']?></p>
        <?endif?>
        <?if(!empty($arParams['ARTICLE_SECTION'])) { ?>
            <?foreach($arParams['ARTICLE_SECTION'] as $key => $articleSection){
                if(empty($articleSection))
                    continue;
                ?>
                <meta itemprop="articleSection" content="<?=$articleSection?>"/>
            <? } ?>
        <? } ?>
        <?if(!empty($arParams['KEYWORDS'])) { ?>
            <?foreach($arParams['KEYWORDS'] as $key => $keywords){
                if(empty($keywords))
                    continue;
                ?>
                <meta itemprop="keywords" content="<?=$keywords?>"/>
            <? } ?>
        <? } ?>
        <?if(!empty($arParams['IN_LANGUAGE'])):?>
            <meta itemprop="inLanguage" content="<?=$arParams['IN_LANGUAGE']?>"/>
        <?endif?>
        <?if(!empty($arParams['DATA_PUBLISHED'])):?>
            <p itemprop="datePublished"><?=$arParams['DATA_PUBLISHED']?></p>
        <?endif?>
        <?if(!empty($arParams['DATA_MODIFIED'])):?>
            <p itemprop="dateModified"><?=$arParams['DATA_MODIFIED']?></p>
        <?endif?>
        <?if(!empty($arParams['MAINENTITYOFPAGE'])):?>
            <link itemprop="mainEntityOfPage" rel=canonical href="<?=$arParams['MAINENTITYOFPAGE']?>"/>
        <?endif?>


        <?if(!empty($arParams['AUTHOR_TEXT']) and $arParams['AUTHOR_TYPE'] == "Text"):?>
            <p itemprop="author"><?=$arParams['AUTHOR_TEXT']?></p>
        <?elseif(!empty($arParams['AUTHOR_PERSON_NAME']) and $arParams['AUTHOR_TYPE'] == "Person"):?>
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
                false
            );?>
        <?elseif(!empty($arParams['AUTHOR_ORGANIZATION_NAME']) and $arParams['AUTHOR_TYPE'] == "Organization"):?>
            <?$APPLICATION->IncludeComponent(
                "coffeediz:schema.org.OrganizationAndPlace",
                "",
                Array(
                    "TYPE" => "Organization",
                    "TYPE_2" => $arParams['AUTHOR_ORGANIZATION_TYPE_2'],
                    "TYPE_3" => $arParams['AUTHOR_ORGANIZATION_TYPE_3'],
                    "TYPE_4" => $arParams['AUTHOR_ORGANIZATION_TYPE_4'],
                    "NAME" => $arParams['AUTHOR_ORGANIZATION_NAME'],
                    "DESCRIPTION" => $arParams['AUTHOR_ORGANIZATION_DESCRIPTION'],
                    "POST_CODE" => $arParams['AUTHOR_ORGANIZATION_POST_CODE'],
                    "COUNTRY" => $arParams['AUTHOR_ORGANIZATION_COUNTRY'],
                    "REGION" => $arParams['AUTHOR_ORGANIZATION_REGION'],
                    "LOCALITY" => $arParams['AUTHOR_ORGANIZATION_LOCALITY'],
                    "ADDRESS" => $arParams['AUTHOR_ORGANIZATION_ADDRESS'],
                    "PHONE" => $arParams['AUTHOR_ORGANIZATION_PHONE'],
                    "FAX" => $arParams[''],
                    "SITE" => $arParams['AUTHOR_ORGANIZATION_SITE'],
                    "LOGO" => $arParams['AUTHOR_ORGANIZATION_LOGO'],
                    "LOGO_URL" => $arParams['AUTHOR_ORGANIZATION_LOGO'],
                    "ITEMPROP" => "author",
                ),
                false,
                array('HIDE_ICONS' => 'Y')
            );?>
        <?endif?>

        <?if(!empty($arParams['PUBLISHER_ORGANIZATION_NAME'])):?>
            <?$APPLICATION->IncludeComponent(
                "coffeediz:schema.org.OrganizationAndPlace",
                "",
                Array(
                    "TYPE" => "Organization",
                    "TYPE_2" => $arParams['PUBLISHER_ORGANIZATION_TYPE_2'],
                    "TYPE_3" => $arParams['PUBLISHER_ORGANIZATION_TYPE_3'],
                    "TYPE_4" => $arParams['PUBLISHER_ORGANIZATION_TYPE_4'],
                    "NAME" => $arParams['PUBLISHER_ORGANIZATION_NAME'],
                    "DESCRIPTION" => $arParams['PUBLISHER_ORGANIZATION_DESCRIPTION'],
                    "POST_CODE" => $arParams['PUBLISHER_ORGANIZATION_POST_CODE'],
                    "COUNTRY" => $arParams['PUBLISHER_ORGANIZATION_COUNTRY'],
                    "REGION" => $arParams['PUBLISHER_ORGANIZATION_REGION'],
                    "LOCALITY" => $arParams['PUBLISHER_ORGANIZATION_LOCALITY'],
                    "ADDRESS" => $arParams['PUBLISHER_ORGANIZATION_ADDRESS'],
                    "PHONE" => $arParams['PUBLISHER_ORGANIZATION_PHONE'],
                    "FAX" => $arParams[''],
                    "SITE" => $arParams['PUBLISHER_ORGANIZATION_SITE'],
                    "LOGO" => $arParams['PUBLISHER_ORGANIZATION_LOGO'],
                    "LOGO_URL" => $arParams['PUBLISHER_ORGANIZATION_LOGO'],
                    "LOGO_NAME" => $arParams['PUBLISHER_ORGANIZATION_LOGO_NAME'],
                    "LOGO_CAPTION" => $arParams['PUBLISHER_ORGANIZATION_LOGO_CAPTION'],
                    "LOGO_DESCRIPTION" => $arParams['PUBLISHER_ORGANIZATION_LOGO_DESCRIPTION'],
                    "LOGO_HEIGHT" => $arParams['PUBLISHER_ORGANIZATION_LOGO_HEIGHT'],
                    "LOGO_WIDTH" => $arParams['PUBLISHER_ORGANIZATION_LOGO_WIDTH'],
                    "LOGO_TRUMBNAIL_CONTENTURL" => $arParams['PUBLISHER_ORGANIZATION_LOGO_TRUMBNAIL_CONTENTURL'],
                    "ITEMPROP" => "publisher",
                ),
                false,
                array('HIDE_ICONS' => 'Y')
            );?>
        <?endif?>

        <?if($arParams["TYPE"] == "ScholarlyArticle" or $arParams["TYPE"] == "MedicalScholarlyArticle"):?>
            <?if(!empty($arParams['SOURCE_TYPE_URL_URL'])):?>
                <p>
                    <a href="<?=$arParams['SOURCE_TYPE_URL_URL']?>" itemprop="source"><?=$arParams['SOURCE_TYPE_URL_TEXT']?></a>
                </p>
            <?endif?>
            <?if(!empty($arParams['SOURCE_TYPE_TEXT_TEXT'])):?>
                <p itemprop="source"><?=$arParams['SOURCE_TYPE_TEXT_TEXT']?></p>
            <?endif?>
            <?if(!empty($arParams['REFERENCES_URLS'])) { ?>
                <?foreach($arParams['REFERENCES_URLS'] as $key => $referencesUrl){
                    if(empty($referencesUrl))
                        continue;
                    ?>
                    <p>
                        <a href="<?=$referencesUrl?>" itemprop="references"><?=$referencesUrl?></a>
                    </p>
                <? } ?>
            <? } ?>
            <?if(!empty($arParams['REFERENCES_TEXTS'])) { ?>
                <?foreach($arParams['REFERENCES_TEXTS'] as $key => $referencesText){
                    if(empty($referencesText))
                        continue;
                    ?>
                    <p itemprop="references"><?=$referencesText?></p>
                <? } ?>
            <? } ?>
        <?endif?>


        <?if(!empty($arParams['IMAGEURL'])):?>
            <?$APPLICATION->IncludeComponent(
                "coffeediz:schema.org.ImageObject",
                "",
                Array(
                    "CONTENTURL" => $arParams['IMAGEURL'],
                    "URL" => $arParams['IMAGEURL'],
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


