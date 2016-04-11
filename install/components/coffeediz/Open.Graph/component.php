<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

//ERRORS start
$errors = array();

/*if(empty($arParams['MODEL'])){
    $errors['ERROR_MODEL']=GetMessage("ERROR_MODEL");
}*/
//ERRORS end
$arResult['ERRORS'] = $errors;

// 200 SIMBOLS limit for Description START
$str = $arParams['DESCRIPTION'];
if (!empty($arParams['DESCRIPTION_LIMIT'])){
    if (strlen($str) > $arParams['DESCRIPTION_LIMIT']) {
        $len = strlen($str)-$arParams['DESCRIPTION_LIMIT'];
        for ($i = ($arParams['DESCRIPTION_LIMIT']-3); $i >= 0; $i--) {
            if ($str{$i} == " "){
                $new_str = substr($str, 0, $i)."...";
                break;
            }
        }
    }
    else {
        $new_str = $str;
    }
    $arResult['DESCRIPTION'] = $new_str;
}
else {
    $arResult['DESCRIPTION'] = $arParams['DESCRIPTION'];
}
// 200 SIMBOLS limit for Description END

// 70 SIMBOLS limit for Title START
$str = $arParams['TITLE'];
if (!empty($arParams['TITLE_LIMIT'])){
    if (strlen($str) > $arParams['TITLE_LIMIT']) {
        $len = strlen($str)-$arParams['TITLE_LIMIT'];
        for ($i = ($arParams['TITLE_LIMIT']-3); $i >= 0; $i--) {
            if ($str{$i} == " "){
                $new_str = substr($str, 0, $i)."...";
                break;
            }
        }
    }
    else {
        $new_str = $str;
    }
    $arResult['TITLE'] = $new_str;
}
else {
    $arResult['TITLE'] = $arParams['TITLE'];
}
// 70 SIMBOLS limit for Title END


if($this->StartResultCache())
{
    $this->IncludeComponentTemplate();
}

