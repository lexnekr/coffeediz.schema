<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>

<?if(!empty($arResult['ERRORS'])):?>
	<?foreach($arResult['ERRORS'] as $arErrors){?>
		<p><?=$arErrors?></p>
	<?}?>
<?else:?>

	<div itemscope itemtype="http://schema.org/Review" <? if($arParams['SHOW'] == "Y") { echo 'style="display: none;"'; } ?> >

        <?if(!empty($arParams['NAME'])):?>
            <p itemprop="name"><?=$arParams['NAME']?></p>
        <?endif?>
        <?if(!empty($arParams['REVIEWBODY'])):?>
            <div itemprop="reviewBody"><?=$arParams['REVIEWBODY']?></div>
        <?endif?>
        <?if(!empty($arParams['URL'])):?>
            <p>
            <a href="<?=$arParams['URL']?>" itemprop="url"><?=$arParams['URL']?></a>
            </p>
        <?endif?>
        <?if(!empty($arParams['MOBILE_URL'])):?>
            <p>
            <a href="<?=$arParams['MOBILE_URL']?>" itemprop="mobileUrl"><?=$arParams['MOBILE_URL']?></a>
            </p>
        <?endif?>
        <?if(!empty($arParams['REVIEWS_URL'])):?>
            <p>
                <?foreach($arParams['REVIEWS_URL'] as $key => $reviewsurl){
                    if(empty($reviewsurl))
                        continue;
                    ?>
                    <?if($key != 0) { echo ', '; }?>
                    <a itemprop="reviewsUrl" href="<?=$reviewsurl?>"><?=$reviewsurl?></a>
                <? } ?>
            </p>
        <?endif?>
        <?if(!empty($arParams['REVIEWBODY'])):?>
            <div itemprop="reviewBody"><?=$arParams['REVIEWBODY']?></div>
        <?endif?>
        <?if(!empty($arParams['DATE_PUBLISHED'])):?>
            <meta itemprop="datePublished" content="<?=$arParams['DATE_PUBLISHED']?>" />
        <?endif?>
        <?if(!empty($arParams['DATE_VISITED'])):?>
            <meta itemprop="dateVisited" content="<?=$arParams['DATE_VISITED']?>" />
        <?endif?>
        <?if(!empty($arParams['PRO'])):?>
            <ul>
                <?foreach($arParams['PRO'] as $key => $pro){
                    if(empty($pro))
                        continue;
                    ?>
                    <li itemprop="pro"><?=$pro?></li>
                <? } ?>
            </ul>
        <?endif?>
        <?if(!empty($arParams['CONTRA'])):?>
            <ul>
                <?foreach($arParams['CONTRA'] as $key => $contra){
                    if(empty($contra))
                        continue;
                    ?>
                    <li itemprop="contra"><?=$contra?></li>
                <? } ?>
            </ul>
        <?endif?>

        <?if(!empty($arParams['RATINGVALUE'])):?>
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
                    "AGGREGATE_RATING" => "N",
                    "ITEMPROP" => "Y"
                ),
                false,
                array('HIDE_ICONS' => 'Y')
            );?>
        <?endif?>

        <?if($arParams['ITEMREVIEWED']=="OrganizationAndPlace"):?>
            <?$APPLICATION->IncludeComponent(
                "coffeediz:schema.org.OrganizationAndPlace",
                "",
                Array(
                    "TYPE" => $arParams['ITEMREVIEWED_TYPE'],
                    "TYPE_2" => $arParams['ITEMREVIEWED_TYPE_2'],
                    "TYPE_3" => $arParams['ITEMREVIEWED_TYPE_3'],
                    "TYPE_4" => $arParams['ITEMREVIEWED_TYPE_4'],
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
                    "TAXID"=> $arParams['TAXID'],
                    "EMAIL"=> $arParams['EMAIL'],
                    "OPENING_HOURS_ROBOT"=> $arParams['OPENING_HOURS_ROBOT'],
                    "OPENING_HOURS_HUMAN"=> $arParams['OPENING_HOURS_HUMAN'],
                    "LATITUDE"=> $arParams['LATITUDE'],
                    "LONGITUDE"=> $arParams['LONGITUDE'],
                    "ITEMPROP" => "itemReviewed",
                ),
                false,
                array('HIDE_ICONS' => 'Y')
            );?>
        <?elseif($arParams['ITEMREVIEWED']=="Car"):?>
            <?$APPLICATION->IncludeComponent(
                "coffeediz:schema.org.Car",
                ".default",
                array(
                    "BRAND_NAME" => $arParams['CAR_BRAND_NAME'],
                    "SHOW" => "N",
                    "MODEL" => $arParams['CAR_MODEL'],
                    "URL" => $arParams['CAR_URL'],
                    "ITEMPROP" => "itemReviewed",
                    "PRODYEAR" => $arParams['PRODYEAR'],
                    "DATAPURCHASED" => $arParams['DATAPURCHASED'],
                    "BODYTYPE" => $arParams['BODYTYPE'],
                    "DISPLACEMENT" => $arParams['DISPLACEMENT'],
                    "ENGINTYPE" => $arParams['ENGINTYPE'],
                    "GEARTYPE" => $arParams['GEARTYPE'],
                    "TRANSMISSION" => $arParams['TRANSMISSION'],
                    "STEERINGWHEEL" => $arParams['STEERINGWHEEL'],
                    "HORSEPOWER" => $arParams['HORSEPOWER'],
                    "RUN" => $arParams['RUN'],
                    "RUNMETRIC" => $arParams['RUNMETRIC'],
                    "CONFIGURATIONNAME" => $arParams['CONFIGURATIONNAME']
                ),
                false,
                array('HIDE_ICONS' => 'Y')
            );?>
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
                false
            );?>
        <?endif?>

	</div>

<?endif?>


