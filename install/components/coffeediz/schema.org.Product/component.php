<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

//ERRORS start
$errors = array();

if(empty($arParams['PRICE']) and $arParams['AGGREGATEOFFER'] != 'Y'){
    $errors['ERROR_PRICE']=GetMessage("ERROR_PRICE");
}
if($arParams['AGGREGATEOFFER'] == 'Y'){
    if(empty($arParams['AGGREGATEOFFER_PRICE']) and empty($arParams['LOWPRICE']) and empty($arParams['HIGHPRICE'])){
        $errors['AGGREGATEOFFER_PRICE']=GetMessage("AGGREGATEOFFER_PRICE");
    }
}
if(empty($arParams['NAME'])){
    $errors['ERROR_NAME']=GetMessage("ERROR_NAME");
}
//ERRORS end
$arResult['ERRORS'] = $errors;

if($this->StartResultCache())
{
 $this->IncludeComponentTemplate();
}

