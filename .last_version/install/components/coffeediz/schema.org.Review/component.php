<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

//ERRORS start
$errors = array();

if(empty($arParams['URL'])){
    $errors['ERROR_URL']=GetMessage("ERROR_URL");
}
if(empty($arParams['ITEMREVIEWED'])){
    $errors['ERROR_ITEMREVIEWED']=GetMessage("ERROR_ITEMREVIEWED");
}
if(empty($arParams['AUTHOR_PERSON_NAME'])){
    $errors['ERROR_AUTHOR_PERSON_NAME']=GetMessage("ERROR_AUTHOR_PERSON_NAME");
}
//ERRORS end
$arResult['ERRORS'] = $errors;

if($this->StartResultCache())
{
 $this->IncludeComponentTemplate();
}

