<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>

<?if(!empty($arResult['ERRORS'])):?>
	<?foreach($arResult['ERRORS'] as $arErrors){?>
		<p><?=$arErrors?></p>
	<?}?>
<?else:?>

    <div itemscope itemtype="http://schema.org/Car" <?if(!empty($arParams['ITEMPROP'])):?>itemprop="<?=$arParams['ITEMPROP']?>" <?endif?><?if($arParams['SHOW'] == "Y"):?>style="display: none;" <?endif?>>

        <?if(!empty($arParams['BRAND_NAME'])):?>
            <div itemprop="brand"><?=$arParams['BRAND_NAME']?></div>
        <?endif?>
        <?if(!empty($arParams['MODEL'])):?>
            <div itemprop="model"><?=$arParams['MODEL']?></div>
        <?endif?>
        <?if(!empty($arParams['URL'])):?>
            <p>
                <a href="<?=$arParams['URL']?>" itemprop="url"><?=$arParams['URL']?></a>
            </p>
        <?endif?>
        <?if(!empty($arParams['PRODYEAR'])):?>
            <div itemprop="prodyear"><?=$arParams['PRODYEAR']?></div>
        <?endif?>
        <?if(!empty($arParams['DATAPURCHASED'])):?>
            <div itemprop="datePurchased"><?=$arParams['DATAPURCHASED']?></div>
        <?endif?>
        <?if(!empty($arParams['BODYTYPE'])):?>
            <div itemprop="bodyType"><?=$arParams['BODYTYPE']?></div>
        <?endif?>
        <?if(!empty($arParams['DISPLACEMENT'])):?>
            <div itemprop="displacement"><?=$arParams['DISPLACEMENT']?></div>
        <?endif?>
        <?if(!empty($arParams['ENGINTYPE'])):?>
            <div itemprop="engineType"><?=$arParams['ENGINTYPE']?></div>
        <?endif?>
        <?if(!empty($arParams['GEARTYPE'])):?>
            <div itemprop="gearType"><?=$arParams['GEARTYPE']?></div>
        <?endif?>
        <?if(!empty($arParams['TRANSMISSION'])):?>
            <div itemprop="transmission"><?=$arParams['TRANSMISSION']?></div>
        <?endif?>
        <?if(!empty($arParams['STEERINGWHEEL'])):?>
            <div itemprop="steeringWheel"><?=$arParams['STEERINGWHEEL']?></div>
        <?endif?>
        <?if(!empty($arParams['HORSEPOWER'])):?>
            <div itemprop="horsePower"><?=$arParams['HORSEPOWER']?></div>
        <?endif?>
        <?if(!empty($arParams['RUN'])):?>
            <div><span itemprop="run"><?=$arParams['RUN']?></span> <span itemprop="runMetric"><?=$arParams['RUNMETRIC']?></span></div>
        <?endif?>
        <?if(!empty($arParams['CONFIGURATIONNAME'])):?>
            <div itemprop="configurationName"><?=$arParams['CONFIGURATIONNAME']?></div>
        <?endif?>


	</div>

<?endif?>


