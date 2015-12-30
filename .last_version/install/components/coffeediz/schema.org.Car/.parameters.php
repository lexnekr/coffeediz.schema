<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentParameters = array(
	"GROUPS" => array(
		"MAIN_PARAMS" => array(
			"SORT" => 110,
			"NAME" => GetMessage("MAIN_PARAMS"),
		),
        "YANDEX_PARAMS" => array(
            "SORT" => 130,
            "NAME" => GetMessage("YANDEX_PARAMS"),
        ),
	),
	"PARAMETERS"  =>  array(
		"SHOW" => array(
			"PARENT" => "MAIN_PARAMS",
			"NAME" => GetMessage("PARAM_SHOW"),
			"TYPE" => "CHECKBOX",
		),
        "BRAND_NAME" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("BRAND_NAME"),
            "TYPE" => "STRING",
            "SORT" => 500,
            "DEFAULT" => "",
        ),
        "MODEL" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("MODEL"),
            "TYPE" => "STRING",
            "SORT" => 500,
            "DEFAULT" => "",
        ),
        "URL" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("URL"),
            "TYPE" => "STRING",
            "SORT" => 500,
            "DEFAULT" => "",
        ),
        "ITEMPROP" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("itemprop"),
            "TYPE" => "LIST",
            "VALUES" => array(
                "" => "-",
                "itemReviewed" => "itemReviewed",
            ),
        ),

        "PRODYEAR" => array(
            "PARENT" => "YANDEX_PARAMS",
            "NAME" => GetMessage("PRODYEAR"),
            "TYPE" => "STRING",
            "SORT" => 500,
            "DEFAULT" => "",
        ),
        "DATAPURCHASED" => array(
            "PARENT" => "YANDEX_PARAMS",
            "NAME" => GetMessage("datePurchased"),
            "TYPE" => "STRING",
            "SORT" => 500,
            "DEFAULT" => "",
        ),
        "BODYTYPE" => array(
            "PARENT" => "YANDEX_PARAMS",
            "NAME" => GetMessage("bodyType"),
            "TYPE" => "STRING",
            "SORT" => 500,
            "DEFAULT" => "",
        ),
        "DISPLACEMENT" => array(
            "PARENT" => "YANDEX_PARAMS",
            "NAME" => GetMessage("displacement"),
            "TYPE" => "STRING",
            "SORT" => 500,
            "DEFAULT" => "",
        ),
        "ENGINTYPE" => array(
            "PARENT" => "YANDEX_PARAMS",
            "NAME" => GetMessage("engineType"),
            "TYPE" => "STRING",
            "SORT" => 500,
            "DEFAULT" => "",
        ),
        "GEARTYPE" => array(
            "PARENT" => "YANDEX_PARAMS",
            "NAME" => GetMessage("gearType"),
            "TYPE" => "STRING",
            "SORT" => 500,
            "DEFAULT" => "",
        ),
        "TRANSMISSION" => array(
            "PARENT" => "YANDEX_PARAMS",
            "NAME" => GetMessage("transmission"),
            "TYPE" => "STRING",
            "SORT" => 500,
            "DEFAULT" => "",
        ),
        "STEERINGWHEEL" => array(
            "PARENT" => "YANDEX_PARAMS",
            "NAME" => GetMessage("steeringWheel"),
            "TYPE" => "STRING",
            "SORT" => 500,
            "DEFAULT" => "",
        ),
        "HORSEPOWER" => array(
            "PARENT" => "YANDEX_PARAMS",
            "NAME" => GetMessage("horsePower"),
            "TYPE" => "STRING",
            "SORT" => 500,
            "DEFAULT" => "",
        ),
        "RUN" => array(
            "PARENT" => "YANDEX_PARAMS",
            "NAME" => GetMessage("run"),
            "TYPE" => "STRING",
            "SORT" => 500,
            "DEFAULT" => "",
        ),
        "RUNMETRIC" => array(
            "PARENT" => "YANDEX_PARAMS",
            "NAME" => GetMessage("runMetric"),
            "TYPE" => "STRING",
            "SORT" => 500,
            "DEFAULT" => "",
        ),
        "CONFIGURATIONNAME" => array(
            "PARENT" => "YANDEX_PARAMS",
            "NAME" => GetMessage("configurationName"),
            "TYPE" => "STRING",
            "SORT" => 500,
            "DEFAULT" => "",
        ),




	)
);

