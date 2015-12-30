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
		"TRUMBNAIL_PARAMS" => array(
			"SORT" => 120,
			"NAME" => GetMessage("TRUMBNAIL_PARAMS"),
		),
		"RATING" => array(
			"SORT" => 900,
			"NAME" => GetMessage("RATING"),
		),
        "PARAM_EXTRA" => array(
            "SORT" => 1500,
            "NAME" => GetMessage("PARAM_EXTRA"),
        ),

	),
	"PARAMETERS"  =>  array(
		"SHOW" => array(
			"PARENT" => "MAIN_PARAMS",
			"NAME" => GetMessage("PARAM_SHOW"),
			"TYPE" => "LIST",
			"VALUES" => array(
				"Y" => GetMessage("SHOW_VALUES_Y"),
				"IMG" => GetMessage("SHOW_VALUES_IMG"),
				"N" => GetMessage("SHOW_VALUES_N"),
			),
            "DEFAULT" => "N",
		),
		"CONTENTURL" => array(
			"PARENT" => "MAIN_PARAMS",
			"NAME" => GetMessage("CONTENTURL"),
			"TYPE" => "STRING",
			"SORT" => 500,
			"DEFAULT" => "",
		),
		"NAME" => array(
			"PARENT" => "MAIN_PARAMS",
			"NAME" => GetMessage("NAME"),
			"TYPE" => "STRING",
			"SORT" => 500,
			"DEFAULT" => "",
		),
		"CAPTION" => array(
			"PARENT" => "MAIN_PARAMS",
			"NAME" => GetMessage("CAPTION"),
			"TYPE" => "STRING",
			"SORT" => 500,
			"DEFAULT" => "",
		),
		"DESCRIPTION" => array(
			"PARENT" => "MAIN_PARAMS",
			"NAME" => GetMessage("DESCRIPTION"),
			"TYPE" => "STRING",
			"SORT" => 500,
			"DEFAULT" => "",
			"ROWS" => 5,
			"COLS" => "50",
		),
		"HEIGHT" => array(
			"PARENT" => "MAIN_PARAMS",
			"NAME" => GetMessage("HEIGHT"),
			"TYPE" => "STRING",
			"SORT" => 500,
			"DEFAULT" => "",
		),
		"WIDTH" => array(
			"PARENT" => "MAIN_PARAMS",
			"NAME" => GetMessage("WIDTH"),
			"TYPE" => "STRING",
			"SORT" => 500,
			"DEFAULT" => "",
		),


		"TRUMBNAIL_CONTENTURL" => array(
			"PARENT" => "TRUMBNAIL_PARAMS",
			"NAME" => GetMessage("TRUMBNAIL_CONTENTURL"),
			"TYPE" => "STRING",
			"SORT" => 500,
			"DEFAULT" => "",
		),


        "ITEMPROP" => array(
            "PARENT" => "ADDITIONAL_SETTINGS",
            "NAME" => GetMessage("ITEMPROP"),
            "TYPE" => "LIST",
            "VALUES" => array(
                "" => "-",
                "itemprop" => GetMessage("ITEMPROP_thumbnail"),
                "image" => GetMessage("ITEMPROP_image"),
                "logo" => GetMessage("ITEMPROP_logo"),
                "diagram" => GetMessage("ITEMPROP_diagram"),
                "photo" => GetMessage("ITEMPROP_photo"),
                "primaryImageOfPage" => GetMessage("ITEMPROP_primaryImageOfPage"),
                "screenshot" => GetMessage("ITEMPROP_screenshot"),
            ),
        ),
		"REPRESENTATIVEOFPAGE" => array(
			"PARENT" => "ADDITIONAL_SETTINGS",
			"NAME" => GetMessage("REPRESENTATIVEOFPAGE"),
			"TYPE" => "LIST",
			"VALUES" => array(
				"" => "-",
				"True" => GetMessage("YES"),
				"False" => GetMessage("NO"),
			),
		),
		"PARAM_RATING_SHOW" => array(
			"PARENT" => "ADDITIONAL_SETTINGS",
			"NAME" => GetMessage("PARAM_RATING_SHOW"),
			"TYPE" => "CHECKBOX",
			"REFRESH" => "Y",
		),
        "PARAM_EXTRA_SHOW" => array(
            "PARENT" => "ADDITIONAL_SETTINGS",
            "NAME" => GetMessage("PARAM_EXTRA_SHOW"),
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

if ($arCurrentValues["PARAM_EXTRA_SHOW"] == "Y")
{
    $arComponentParameters["PARAMETERS"]["URL"] = Array(
        "PARENT" => "PARAM_EXTRA",
        "NAME" => GetMessage("URL"),
        "TYPE" => "STRING",
        "SORT" => 500,
        "DEFAULT" => $arCurrentValues["CONTENTURL"],
    );
}
