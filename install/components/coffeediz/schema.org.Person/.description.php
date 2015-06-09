<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" =>  GetMessage("COMPONENT_NAME"),
	"DESCRIPTION" => GetMessage("COMPONENT_DESCRIPTION"),
	"CACHE_PATH" => "Y",
	"SORT" => 1,
	'PATH' => array(
		'ID' => 'coffeediz',
		"NAME" => GetMessage("COMPONENT_PATH_DESCRIPTION"),
		"CHILD" => array(
			"ID" => "schema_org",
			"NAME" => GetMessage("COMPONENT_PATH_CHILD_DESCRIPTION"),
            "CHILD" => array(
                "ID" => "dev",
                "NAME" => GetMessage("COMPONENT_PATH_CHILD_CHILD_DESCRIPTION"),
            ),
		),
    ),

); 

?>