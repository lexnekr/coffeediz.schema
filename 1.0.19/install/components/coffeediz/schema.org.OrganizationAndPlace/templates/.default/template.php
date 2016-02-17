<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>

<?if(!empty($arResult['ERRORS'])):?>
	<?foreach($arResult['ERRORS'] as $arErrors){?>
		<p><?=$arErrors?></p>
	<?}?>
<?else:?>

	<div itemscope itemtype="<?=$arResult['TYPE']?>" <? if($arParams['SHOW'] == "Y") { echo 'style="display: none;"'; } ?> <? if(!empty($arParams['ITEMPROP'])):?>itemprop="<?=$arParams['ITEMPROP'];?>" <?endif?>>

	<?if(!empty($arParams['NAME'])):?>
		<div itemprop="name">
			<?=$arParams['NAME']?>
		</div>
	<?endif?>

	<?if(!empty($arParams['DESCRIPTION'])):?>
		<div itemprop="description">
			<?=$arParams['DESCRIPTION']?>
		</div>
	<?endif?>

	<?if(!empty($arParams['POST_CODE']) or !empty($arParams['COUNTRY']) or !empty($arParams['REGION']) or !empty($arParams['LOCALITY']) or !empty($arParams['ADDRESS'])) { ?>
	<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
		 <?if(!empty($arParams['POST_CODE'])):?>
			 <div itemprop="postalCode"><?=$arParams['POST_CODE']?></div>
		 <?endif?>
		 <?if(!empty($arParams['COUNTRY'])):?>
			 <div itemprop="addressCountry"><?=$arParams['COUNTRY']?></div>
		 <?endif?>
		 <?if(!empty($arParams['REGION'])):?>
			 <div itemprop="addressRegion"><?=$arParams['REGION']?></div>
		 <?endif?>
	   <?if(!empty($arParams['LOCALITY'])):?>
		   <div itemprop="addressLocality"><?=$arParams['LOCALITY']?></div>
	   <?endif?>
	   <?if(!empty($arParams['ADDRESS'])):?>
		  <div itemprop="streetAddress"><?=$arParams['ADDRESS']?></div>
	   <?endif?>
	 </div>
	<? } ?>
	
	<?if(!empty($arParams['PHONE'])) { ?>
	 <div>
		 <?foreach($arParams['PHONE'] as $key => $phone){
				if(empty($phone))
					continue;
			 ?>
			 <?if($key != 0) { echo ', '; }?>
			<span itemprop="telephone"><?=$phone?></span>
		 <? } ?>
	 </div>
	<? } ?>
	
	<?if(!empty($arParams['FAX'])) { ?>
		<div>
			<span itemprop="faxNumber"><?=$arParams['FAX']?></span>
		</div>
	<? } ?>
	
	<?if(!empty($arParams['EMAIL']) and $arParams['TYPE'] == "Organization") { ?>
		<div>
			<?foreach($arParams['EMAIL'] as $key => $email){
				if(empty($email))
					continue;
				?>
				<?if($key != 0) { echo ', '; }?>
				<a itemprop="email" href="mailto:<?=trim($email)?>"><?=$email?></a>
			<? } ?>
		</div>
	<? } ?>

	<?if(!empty($arParams['SITE'])) { ?>
		<div>
			<a href="http://<?=$arParams['SITE']?>" itemprop="url"><?=$arParams['SITE']?></a>
		</div>
	<? } ?>

	<?if(!empty($arParams['LOGO'])) { ?>
		<div>
            <?$APPLICATION->IncludeComponent(
                "coffeediz:schema.org.ImageObject",
                "",
                Array(
                    "CONTENTURL" => $arParams['LOGO'],
                    "URL" => $arParams['LOGO_URL'],
                    "NAME" => $arParams['LOGO_NAME'],
                    "CAPTION" => $arParams['LOGO_CAPTION'],
                    "DESCRIPTION" => $arParams['LOGO_DESCRIPTION'],
                    "HEIGHT" => $arParams['LOGO_HEIGHT'],
                    "WIDTH" => $arParams['LOGO_WIDTH'],
                    "TRUMBNAIL_CONTENTURL" => $arParams['LOGO_TRUMBNAIL_CONTENTURL'],
                    "TRUMBNAIL_TYPE" => "N",
                    "REPRESENTATIVEOFPAGE" => "",
                    "PARAM_RATING_SHOW" => "N",
                    "ITEMPROP" => "logo",
                ),
                false,
                array('HIDE_ICONS' => 'Y')
            );?>
		</div>
	<? } ?>

    <?if(!empty($arParams['PHOTO_SRC'])) { ?>
        <div>
            <? $i=0;
            foreach($arParams['PHOTO_SRC'] as $key) {
                ?>
                <?$APPLICATION->IncludeComponent(
                    "coffeediz:schema.org.ImageObject",
                    "",
                    Array(
                        "CONTENTURL" => $arParams['PHOTO_SRC'][$i],
                        //"URL" => $arParams['PHOTO_SRC'][$i],
                        "NAME" => $arParams['PHOTO_NAME'][$i],
                        "CAPTION" => $arParams['PHOTO_CAPTION'][$i],
                        "DESCRIPTION" => $arParams['PHOTO_DESCRIPTION'][$i],
                        "HEIGHT" => $arParams['PHOTO_HEIGHT'][$i],
                        "WIDTH" => $arParams['PHOTO_WIDTH'][$i],
                        "TRUMBNAIL_CONTENTURL" => $arParams['PHOTO_TRUMBNAIL_CONTENTURL'][$i],
                        "TRUMBNAIL_TYPE" => "N",
                        "REPRESENTATIVEOFPAGE" => "",
                        "PARAM_RATING_SHOW" => "N",
                        "ITEMPROP" => "photo",
                    ),
                    false,
                    array('HIDE_ICONS' => 'Y')
                );?>
            <? $i++;
            } ?>
        </div>
    <? } ?>

	<?if($arParams['TYPE_2'] == "CivicStructure" or $arParams['TYPE_2'] == "LocalBusiness") { ?>

	<div>
		 <?foreach($arParams['OPENING_HOURS_ROBOT'] as $key => $openingHours){
				if(empty($openingHours))
					continue;
			 ?>
			 <?if($key != 0) { echo ', '; }?>
			<time itemprop="openingHours" datetime="<?=$openingHours?>"><?=$arParams['OPENING_HOURS_HUMAN'][$key]?></time>
		 <? } ?>
	</div>
	<? } ?>
	
	<?if($arParams['TYPE_2'] == "LocalBusiness" and !empty($arParams['LATITUDE']) and !empty($arParams['LONGITUDE'])) { ?>
		<div itemprop="geo" itemscope itemtype="http://schema.org/GeoCoordinates">
			<meta itemprop="latitude" content="<?=$arParams['LATITUDE']?>" />
			<meta itemprop="longitude" content="<?=$arParams['LONGITUDE']?>" />
		</div>
	<? } ?>

	<?if(!empty($arParams['TAXID']) and $arParams['TYPE'] == "Organization"):?>
		<div>
			 <span itemprop="taxID"><?=$arParams['TAXID']?></span>
		</div>
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


