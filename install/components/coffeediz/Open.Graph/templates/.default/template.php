<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>

<?if(!empty($arResult['ERRORS'])):?>
    <?foreach($arResult['ERRORS'] as $arErrors){?>
        <p><?=$arErrors?></p>
    <?}?>
<?else:?>

    <?if(!empty($arParams['USE_TWITTER'])):?>
        <?if(!empty($arParams['TWITTER_CARD_TYPE'])):?>
            <meta property="twitter:card" content= "<?=$arParams['TWITTER_CARD_TYPE']?>" />
        <?endif?>
        <?if(!empty($arParams['TWITTER_CREATOR'])):?>
            <meta property="twitter:creator" content= "<?=$arParams['TWITTER_CREATOR']?>" />
        <?endif?>
        <?if(!empty($arParams['TWITTER_SITE'])):?>
            <meta property="twitter:site" content= "<?=$arParams['TWITTER_SITE']?>" />
        <?endif?>
        <?if(!empty($arParams['IMAGES'])) {
            $i=0;
            foreach($arParams['IMAGES'] as $key) {
                ?>
                <meta property="twitter:image<?=$i?>" content="<?=$arParams['IMAGES'][$i]?>">
                <? $i++;
            }
        }?>
        <?if(!empty($arParams['VIDEO'])):?>
            <meta property="twitter:player" content= "<?=$arParams['VIDEO']?>" />
            <meta property="twitter:player:width" content="<?=$arParams['VIDEO_WIDTH']?>" />
            <meta property="twitter:player:height" content="<?=$arParams['VIDEO_HEIGHT']?>" />
        <?endif?>

    <?endif?>

    <?if(!empty($arResult['TITLE'])):?>
        <meta property="og:title" content="<?=$arResult['TITLE']?>"/>
    <?endif?>
    <?if(!empty($arResult['DESCRIPTION'])):?>
        <meta property="og:description" content="<?=$arResult['DESCRIPTION']?>"/>
    <?endif?>
    <?if(!empty($arParams['TYPE'])):?>
        <meta property="og:type" content="<?=$arParams['TYPE']?>"/>
    <?endif?>
    <?if(!empty($arParams['URL'])):?>
        <meta property="og:url" content= "<?=$arParams['URL']?>" />
    <?endif?>
    <?if(!empty($arParams['IMAGES'])) {
        $i=0;
        foreach($arParams['IMAGES'] as $key) {
            ?>
            <meta property="og:image" content="<?=$arParams['IMAGES'][$i]?>">
            <? $i++;
        }
    }?>
    <?if(!empty($arParams['LOCALE'])):?>
        <meta property="og:locale" content= "<?=$arParams['LOCALE']?>" />
    <?endif?>
    <?if(!empty($arParams['SITE_NAME'])):?>
        <meta property="og:site_name" content= "<?=$arParams['SITE_NAME']?>" />
    <?endif?>

    <?if(!empty($arParams['VIDEO'])):?>
        <meta property="og:video" content= "<?=$arParams['VIDEO']?>" />
        <meta property="og:video:width" content="<?=$arParams['VIDEO_WIDTH']?>" />
        <meta property="og:video:height" content="<?=$arParams['VIDEO_HEIGHT']?>" />
    <?endif?>

<?endif?>