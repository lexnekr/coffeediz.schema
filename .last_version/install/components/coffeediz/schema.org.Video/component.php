<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

//ERRORS start
$errors = array();

if(empty($arParams['URL'])){
    $errors['ERROR_URL']=GetMessage("ERROR_URL");
}
if(empty($arParams['NAME'])){
    $errors['ERROR_NAME']=GetMessage("ERROR_NAME");
}
if(empty($arParams['DESCRIPTION'])){
	$errors['ERROR_DESCRIPTION']=GetMessage("ERROR_DESCRIPTION");
}
if(empty($arParams['THUNBNAIL_IMAGEURL'])){
    $errors['ERROR_THUNBNAIL_IMAGEURL']=GetMessage("ERROR_THUNBNAIL_IMAGEURL");
}
if(empty($arParams['UPLOAD_DATE'])){
    $errors['ERROR_UPLOAD_DATE']=GetMessage("ERROR_UPLOAD_DATE");
}
if(empty($arParams['DURATION'])){
    $errors['ERROR_DURATION']=GetMessage("ERROR_DURATION");
}


//ERRORS end
$arResult['ERRORS'] = $errors;

if($this->StartResultCache())
{
 $this->IncludeComponentTemplate();
}

