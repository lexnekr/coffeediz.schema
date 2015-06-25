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
			"TYPE" => "CHECKBOX",
		),
        "AGGREGATE_RATING" => array(
            "PARENT" => "ADDITIONAL_SETTINGS",
            "NAME" => GetMessage("AggregateRating"),
            "TYPE" => "CHECKBOX",
            "REFRESH" => "Y",
        ),
		"RATINGVALUE" => array(
			"PARENT" => "ADDITIONAL_SETTINGS",
			"NAME" => GetMessage("ratingValue"),
			"TYPE" => "STRING",
			"SORT" => 500,
			"DEFAULT" => "",
		),
		"BESTRATING" => array(
			"PARENT" => "ADDITIONAL_SETTINGS",
			"NAME" => GetMessage("bestRating"),
			"TYPE" => "STRING",
			"SORT" => 500,
			"DEFAULT" => "5",
		),
		"WORSTRATING" => array(
			"PARENT" => "ADDITIONAL_SETTINGS",
			"NAME" => GetMessage("worstRating"),
			"TYPE" => "STRING",
			"SORT" => 500,
			"DEFAULT" => "1",
		),
		"ITEMPROP" => array(
			"PARENT" => "ADDITIONAL_SETTINGS",
			"NAME" => GetMessage("itemprop"),
			"TYPE" => "CHECKBOX",
		),
	)
);



//START AggregateRating

//END AggregateRating
if ($arCurrentValues["AGGREGATE_RATING"] == "Y")
{
    $arComponentParameters["PARAMETERS"]["RAITINGCOUNT"] = Array(
        "PARENT" => "ADDITIONAL_SETTINGS",
        "NAME" => GetMessage("ratingCount"),
        "TYPE" => "STRING",
        "SORT" => 500,
        "DEFAULT" => "",
    );
    $arComponentParameters["PARAMETERS"]["REVIEWCOUNT"] = Array(
        "PARENT" => "ADDITIONAL_SETTINGS",
        "NAME" => GetMessage("reviewCount"),
        "TYPE" => "STRING",
        "SORT" => 500,
        "DEFAULT" => "",
    );
    $arComponentParameters["PARAMETERS"]["ITEMREVIEWED"] = Array(
        "PARENT" => "ADDITIONAL_SETTINGS",
        "NAME" => GetMessage("ITEMREVIEWED"),
        "TYPE" => "LIST",
        "VALUES" => array(
            "" => "",
            "OrganizationAndPlace" => GetMessage("OrganizationAndPlace")
        ),
        "REFRESH" => "Y",
    );
}
// START ITEMREVIEWED
// START OrganizationAndPlace

if ($arCurrentValues["ITEMREVIEWED"] == "OrganizationAndPlace")
{

	$arComponentParameters["PARAMETERS"]["ITEMREVIEWED_TYPE"] = Array(
		"PARENT" => "PARAMETERS_ITEMREVIEWED",
		"NAME" => GetMessage("PARAM_TYPE"),
		"TYPE" => "LIST",
		"REFRESH" => "Y",
		"SORT" => 50,
		"VALUES" => array(
			"Organization" => GetMessage("PARAM_TYPE_ORGANIZATION"), 
			"Place" => GetMessage("PARAM_TYPE_PLACE")
		)
	);
	$arComponentParameters["PARAMETERS"]["ITEMREVIEWED_NAME"] = Array(
		"PARENT" => "PARAMETERS_ITEMREVIEWED",
		"NAME" => GetMessage("PARAM_NAME"),
		"TYPE" => "STRING",
		"SORT" => 500,
	);
	$arComponentParameters["PARAMETERS"]["ITEMREVIEWED_POST_CODE"] = Array(
		"PARENT" => "PARAMETERS_ITEMREVIEWED",
		"NAME" => GetMessage("PARAM_POST_CODE"),
		"TYPE" => "STRING",
		"SORT" => 500,
	);
	$arComponentParameters["PARAMETERS"]["ITEMREVIEWED_COUNTRY"] = Array(
		"PARENT" => "PARAMETERS_ITEMREVIEWED",
		"NAME" => GetMessage("PARAM_COUNTRY"),
		"TYPE" => "STRING",
		"SORT" => 500,
	);
	$arComponentParameters["PARAMETERS"]["ITEMREVIEWED_REGION"] = Array(
		"PARENT" => "PARAMETERS_ITEMREVIEWED",
		"NAME" => GetMessage("PARAM_REGION"),
		"TYPE" => "STRING",
	);
	$arComponentParameters["PARAMETERS"]["ITEMREVIEWED_LOCALITY"] = Array(
		"PARENT" => "PARAMETERS_ITEMREVIEWED",
		"NAME" => GetMessage("PARAM_LOCALITY"),
		"TYPE" => "STRING",
	);
	$arComponentParameters["PARAMETERS"]["ITEMREVIEWED_ADDRESS"] = Array(
		"PARENT" => "PARAMETERS_ITEMREVIEWED",
		"NAME" => GetMessage("PARAM_ADDRESS"),
		"TYPE" => "STRING",
	);
	$arComponentParameters["PARAMETERS"]["ITEMREVIEWED_PHONE"] = Array(
		"PARENT" => "PARAMETERS_ITEMREVIEWED",
		"NAME" => GetMessage("PARAM_PHONE"),
		"TYPE" =>"STRING",
		"MULTIPLE" =>"Y",
	);
	$arComponentParameters["PARAMETERS"]["ITEMREVIEWED_FAX"] = Array(
		"PARENT" => "PARAMETERS_ITEMREVIEWED",
		"NAME" => GetMessage("PARAM_FAX"),
		"TYPE" =>"STRING",
	);
	$arComponentParameters["PARAMETERS"]["ITEMREVIEWED_SITE"] = Array(
		"PARENT" => "PARAMETERS_ITEMREVIEWED",
		"NAME" => GetMessage("PARAM_SITE"),
		"TYPE" =>"STRING",
	);
	$arComponentParameters["PARAMETERS"]["ITEMREVIEWED_LOGO"] = Array(
		"PARENT" => "PARAMETERS_ITEMREVIEWED",
		"NAME" => GetMessage("LOGO"),
		"TYPE" =>"STRING",
	);

}
// END OrganizationAndPlace
// END ITEMREVIEWED