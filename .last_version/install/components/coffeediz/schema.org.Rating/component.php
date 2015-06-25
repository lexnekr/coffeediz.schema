<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

//ERRORS start
$errors = array(); 

if(empty($arParams['RATINGVALUE'])){
	$errors['ERROR_RATINGVALUE']=GetMessage("ERROR_RATINGVALUE");
}
if($arParams['AGGREGATE_RATING'] == 'Y'){
    if(empty($arParams['RAITINGCOUNT']) and empty($arParams['REVIEWCOUNT'])){
        $errors['ERROR_COUNT']=GetMessage("ERROR_COUNT");
    }
}
if ($arParams['RATINGVALUE'] > $arParams['BESTRATING']) {
    $errors['ERROR_RATINGVALUE_MAX']=GetMessage("ERROR_RATINGVALUE_MAX");
}
if ($arParams['RATINGVALUE'] < $arParams['WORSTRATING']) {
    $errors['ERROR_RATINGVALUE_MIN']=GetMessage("ERROR_RATINGVALUE_MIN");
}
//ERRORS end
$arResult['ERRORS'] = $errors;

if($this->StartResultCache())
{
 $this->IncludeComponentTemplate();
}

