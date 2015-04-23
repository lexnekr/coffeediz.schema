<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

//ERRORS start
$errors = array(); 

if(empty($arParams['NAME'])){
	$errors['NAME']=GetMessage("ERROR_NAME");
}
if(empty($arParams['POST_CODE']) and empty($arParams['COUNTRY']) and empty($arParams['REGION']) and empty($arParams['LOCALITY']) and empty($arParams['ADDRESS'])){
	$errors['LOCALITY']=GetMessage("ERROR_LOCALITY");
}
if(empty($arParams['PHONE']) and empty($arParams['FAX'])){
	$errors['PHONE']=GetMessage("ERROR_PHONE");
}
//ERRORS end
$arResult['ERRORS'] = $errors;

//TYPE start
$type = '';

if(!empty($arParams['TYPE_4'])){
	$type = "http://schema.org/".$arParams['TYPE_4'];
}
elseif(!empty($arParams['TYPE_3'])){
	$type = "http://schema.org/".$arParams['TYPE_3'];
}
elseif(!empty($arParams['TYPE_2'])){
	$type = "http://schema.org/".$arParams['TYPE_2'];
}
else{
	$type = "http://schema.org/".$arParams['TYPE'];
}
//TYPE end
$arResult['TYPE'] = $type;

if($this->StartResultCache())
{
 $this->IncludeComponentTemplate();
}

