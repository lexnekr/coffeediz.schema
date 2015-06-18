<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

//ERRORS start
$errors = array();

if(empty($arParams['NAME'])){
    $errors['ERROR_NAME']=GetMessage("ERROR_NAME");
}
if(empty($arParams['ARTICLEBODY'])){
	$errors['ERROR_ARTICLEBODY']=GetMessage("ERROR_ARTICLEBODY");
}
//ERRORS end
$arResult['ERRORS'] = $errors;

if($this->StartResultCache())
{
 $this->IncludeComponentTemplate();
}

