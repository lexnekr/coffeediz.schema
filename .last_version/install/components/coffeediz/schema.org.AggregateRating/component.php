<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

//ERRORS start
$errors = array(); 

if(empty($arParams['RATINGVALUE'])){
	$errors['ERROR_RATINGVALUE']=GetMessage("ERROR_RATINGVALUE");
}
//ERRORS end
$arResult['ERRORS'] = $errors;

if($this->StartResultCache())
{
 $this->IncludeComponentTemplate();
}

