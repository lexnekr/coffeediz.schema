<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

//ERRORS start
$errors = array(); 

if(empty($arParams['CONTENTURL']) and empty($arParams['TRUMBNAIL_CONTENTURL'])){
	$errors['ERROR_IMAGEOBJECT']=GetMessage("ERROR_IMAGEOBJECT");
}
//ERRORS end
$arResult['ERRORS'] = $errors;

if($this->StartResultCache())
{
 $this->IncludeComponentTemplate();
}

