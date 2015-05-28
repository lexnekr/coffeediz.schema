<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
CModule::IncludeModule("fileman");
CMedialib::Init();

$ar = CMedialibCollection::GetList(array('arFilter' => array('ACTIVE' => 'Y', 'PARENT_ID' => 0)));

$arCollection = array();
foreach($ar as $Collection){
    $arCollection[$Collection['ID']] = $Collection['NAME'];
}

$arComponentParameters = array(
	"GROUPS" => array(
		"MAIN" => array(
			"SORT" => 110,
			"NAME" => "MAIN",
		),
		"PARAMETERS" => array(
			"SORT" => 120,
			"NAME" => "PARAMETERS",
		),
		"PARAMETERS_ITEMREVIEWED" => array(
			"SORT" => 900,
			"NAME" => GetMessage("PARAMETERS_ITEMREVIEWED"),
		),
	),
	"PARAMETERS"  =>  array(
		"SHOW" => array(
			"PARENT" => "ADDITIONAL_SETTINGS",
			"NAME" => GetMessage("PARAM_SHOW"),
			"TYPE" => "LIST",
			"VALUES" => array(
				"Y" => GetMessage("SHOW_VALUES_Y"),
				"IMG" => GetMessage("SHOW_VALUES_IMG"),
				"N" => GetMessage("SHOW_VALUES_N"),
			),
		),
		"CONTENTURL" => array(
			"PARENT" => "ADDITIONAL_SETTINGS",
			"NAME" => GetMessage("CONTENTURL"),
			"TYPE" => "STRING",
			"SORT" => 500,
			"DEFAULT" => "",
		),
		"NAME" => array(
			"PARENT" => "ADDITIONAL_SETTINGS",
			"NAME" => GetMessage("NAME"),
			"TYPE" => "STRING",
			"SORT" => 500,
			"DEFAULT" => "",
		),
		"CAPTION" => array(
			"PARENT" => "ADDITIONAL_SETTINGS",
			"NAME" => GetMessage("CAPTION"),
			"TYPE" => "STRING",
			"SORT" => 500,
			"DEFAULT" => "",
		),
		"DESCRIPTION" => array(
			"PARENT" => "ADDITIONAL_SETTINGS",
			"NAME" => GetMessage("DESCRIPTION"),
			"TYPE" => "STRING",
			"SORT" => 500,
			"DEFAULT" => "",
		),
		"HEIGHT" => array(
			"PARENT" => "ADDITIONAL_SETTINGS",
			"NAME" => GetMessage("HEIGHT"),
			"TYPE" => "STRING",
			"SORT" => 500,
			"DEFAULT" => "",
		),
		"WIDTH" => array(
			"PARENT" => "ADDITIONAL_SETTINGS",
			"NAME" => GetMessage("WIDTH"),
			"TYPE" => "STRING",
			"SORT" => 500,
			"DEFAULT" => "",
		),
	)
);
