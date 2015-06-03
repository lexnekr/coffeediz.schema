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
		"MAIN_PARAMS" => array(
			"SORT" => 110,
			"NAME" => GetMessage("MAIN_PARAMS"),
		),
        "MOBILE_PARAMS" => array(
            "SORT" => 210,
            "NAME" => GetMessage("MOBILE_PARAMS"),
        ),
        "WEB_PARAMS" => array(
            "SORT" => 220,
            "NAME" => GetMessage("WEB_PARAMS"),
        ),
        "GAME_PARAMS" => array(
            "SORT" => 230,
            "NAME" => GetMessage("GAME_PARAMS"),
        ),
		"RATING" => array(
			"SORT" => 900,
			"NAME" => GetMessage("RATING"),
		),
	),
	"PARAMETERS"  =>  array(
		"SHOW" => array(
			"PARENT" => "MAIN_PARAMS",
			"NAME" => GetMessage("PARAM_SHOW"),
			"TYPE" => "CHECKBOX",
		),
        "TYPE" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("TYPE"),
            "TYPE" => "LIST",
            "VALUES" => array(
                "SoftwareApplication" => GetMessage("SoftwareApplication"),
                "MobileApplication" => GetMessage("MobileApplication"),
                "WebApplication" => GetMessage("WebApplication"),
                "VideoGame" => GetMessage("VideoGame"),
            ),
            "DEFAULT" => "SoftwareApplication",
            "REFRESH" => "Y",
        ),
        "NAME" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("NAME"),
            "TYPE" => "STRING",
            "DEFAULT" => "",
        ),
        "DESCRIPTION" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("DESCRIPTION"),
            "TYPE" => "STRING",
            "DEFAULT" => "",
            "ROWS" => 5,
            "COLS" => "50",
        ),
        "CATEGORY" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("CATEGORY"),
            "TYPE" => "STRING",
            "DEFAULT" => "",
            "ROWS" => 5,
            "COLS" => "50",
        ),
        "SUBCATEGORY" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("SUBCATEGORY"),
            "TYPE" => "STRING",
            "DEFAULT" => "",
            "ROWS" => 5,
            "COLS" => "50",
        ),
        "FILESIZE" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("FILESIZE"),
            "TYPE" => "STRING",
            "DEFAULT" => "",
        ),
        "FILESIZE_TYPE" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("FILESIZE_TYPE"),
            "TYPE" => "LIST",
            "VALUES" => array(
                "B" => "B",
                "KB" => "KB",
                "MB" => "MB",
                "GB" => "GB",
                "TB" => "TB",
            ),
            "DEFAULT" => "KB",
        ),
        "INTERACTIONCOUNT" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("INTERACTIONCOUNT"),
            "TYPE" => "STRING",
            "DEFAULT" => "",
        ),
        "OPERATINGSYSTEM" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("OPERATINGSYSTEM"),
            "TYPE" => "STRING",
            "DEFAULT" => "",
            "ROWS" => 5,
            "COLS" => "50",
        ),
        "PRICE" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("PRICE"),
            "TYPE" => "STRING",
            "DEFAULT" => "",
        ),
        "PRICECURRENCY" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("PRICECURRENCY"),
            "TYPE" => "LIST",
            "VALUES" => array(
                "USD" => "USD",
                "EUR" => "EUR",
                "RUB" => "RUB",
            ),
        ),



		"PARAM_RATING_SHOW" => array(
			"PARENT" => "ADDITIONAL_SETTINGS",
			"NAME" => GetMessage("PARAM_RATING_SHOW"),
			"TYPE" => "CHECKBOX",
			"REFRESH" => "Y",
		),


	)
);



//START RATING
if ($arCurrentValues["PARAM_RATING_SHOW"] == "Y")
{
	$arComponentParameters["PARAMETERS"]["RATING_SHOW"] = Array(
		"PARENT" => "RATING",
		"NAME" => GetMessage("RATING_SHOW"),
		"TYPE" => "CHECKBOX",
	);
	$arComponentParameters["PARAMETERS"]["RATINGVALUE"] = Array(
		"PARENT" => "RATING",
		"NAME" => GetMessage("ratingValue"),
		"TYPE" => "STRING",
		"SORT" => 500,
		"DEFAULT" => "",
	);
	$arComponentParameters["PARAMETERS"]["RAITINGCOUNT"] = Array(
			"PARENT" => "RATING",
			"NAME" => GetMessage("ratingCount"),
			"TYPE" => "STRING",
			"SORT" => 500,
			"DEFAULT" => "",
	);
	$arComponentParameters["PARAMETERS"]["REVIEWCOUNT"] = Array(
			"PARENT" => "RATING",
			"NAME" => GetMessage("reviewCount"),
			"TYPE" => "STRING",
			"SORT" => 500,
			"DEFAULT" => "",
	);
	$arComponentParameters["PARAMETERS"]["BESTRATING"] = Array(
			"PARENT" => "RATING",
			"NAME" => GetMessage("bestRating"),
			"TYPE" => "STRING",
			"SORT" => 500,
			"DEFAULT" => "5",
	);
	$arComponentParameters["PARAMETERS"]["WORSTRATING"] = Array(
			"PARENT" => "RATING",
			"NAME" => GetMessage("worstRating"),
			"TYPE" => "STRING",
			"SORT" => 500,
			"DEFAULT" => "1",
	);
}
//END RATING


// START MobileApplication PARAMS
if ($arCurrentValues["TYPE"] == "MobileApplication")
{
    $arComponentParameters["PARAMETERS"]["CARRIERREQUIREMENTS"] = Array(
        "PARENT" => "MOBILE_PARAMS",
        "NAME" => GetMessage("carrierRequirements"),
        "TYPE" => "STRING",
        "SORT" => 500,
        "ROWS" => 5,
        "COLS" => "50",
    );
}
// END MobileApplication PARAMS


// START WebApplication PARAMS
if ($arCurrentValues["TYPE"] == "WebApplication")
{
    $arComponentParameters["PARAMETERS"]["BROWSERREQUIREMENTS"] = Array(
        "PARENT" => "WEB_PARAMS",
        "NAME" => GetMessage("browserRequirements"),
        "TYPE" => "STRING",
        "SORT" => 500,
        "ROWS" => 5,
        "COLS" => "50",
    );
}
// END WebApplication PARAMS


// START VideoGame PARAMS
if ($arCurrentValues["TYPE"] == "VideoGame")
{
}
// END VideoGame PARAMS