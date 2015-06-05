<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentParameters = array(
	"GROUPS" => array(
		"MAIN_PARAMS" => array(
			"SORT" => 110,
			"NAME" => GetMessage("MAIN_PARAMS"),
		),
        "OFFER_PARAMS" => array(
            "SORT" => 120,
            "NAME" => GetMessage("OFFER_PARAMS"),
        ),
        "LOGO_PARAMS" => array(
            "SORT" => 130,
            "NAME" => GetMessage("LOGO_PARAMS"),
        ),
        "IMAGE_PARAMS" => array(
            "SORT" => 140,
            "NAME" => GetMessage("IMAGE_PARAMS"),
        ),
        "RATING_PARAMS" => array(
            "SORT" => 800,
            "NAME" => GetMessage("RATING_PARAMS"),
        ),
	),
	"PARAMETERS"  =>  array(
		"SHOW" => array(
			"PARENT" => "MAIN_PARAMS",
			"NAME" => GetMessage("PARAM_SHOW"),
			"TYPE" => "CHECKBOX",
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

//START OFFER
        "PRICE" => array(
            "PARENT" => "OFFER_PARAMS",
            "NAME" => GetMessage("PRICE"),
            "TYPE" => "STRING",
            "DEFAULT" => "",
        ),
        "PRICECURRENCY" => array(
            "PARENT" => "OFFER_PARAMS",
            "NAME" => GetMessage("PRICECURRENCY"),
            "TYPE" => "LIST",
            "VALUES" => array(
                "USD" => "USD",
                "EUR" => "EUR",
                "RUB" => "RUB",
            ),
        ),
        "ITEMAVAILABILITY" => array(
            "PARENT" => "OFFER_PARAMS",
            "NAME" => GetMessage("ItemAvailability"),
            "TYPE" => "LIST",
            "VALUES" => array(
                "InStock" => GetMessage("InStock"),
                "LimitedAvailability" => GetMessage("LimitedAvailability"),
                "OnlineOnly" => GetMessage("OnlineOnly"),
                "PreOrder" => GetMessage("PreOrder"),
                "InStoreOnly" => GetMessage("InStoreOnly"),
                "SoldOut" => GetMessage("SoldOut"),
                "OutOfStock" => GetMessage("OutOfStock"),
                "Discontinued" => GetMessage("Discontinued"),
            ),
        ),
        "ITEMCONDITION" => array(
            "PARENT" => "OFFER_PARAMS",
            "NAME" => GetMessage("itemCondition"),
            "TYPE" => "LIST",
            "VALUES" => array(
                "NewCondition" => GetMessage("NewCondition"),
                "UsedCondition" => GetMessage("UsedCondition"),
                "DamagedCondition" => GetMessage("DamagedCondition"),
                "RefurbishedCondition" => GetMessage("RefurbishedCondition"),
            ),
        ),
        "PAYMENTMETHOD" => array(
            "PARENT" => "OFFER_PARAMS",
            "NAME" => GetMessage("PaymentMethod"),
            "TYPE" => "LIST",
            "VALUES" => array(
                "VISA" => GetMessage("VISA"),
                "MasterCard" => GetMessage("MasterCard"),
                "AmericanExpress" => GetMessage("AmericanExpress"),
                "ByBankTransferInAdvance" => GetMessage("ByBankTransferInAdvance"),
                "ByInvoice" => GetMessage("ByInvoice"),
                "Cash" => GetMessage("Cash"),
                "CheckInAdvance" => GetMessage("CheckInAdvance"),
                "COD" => GetMessage("COD"),
                "DirectDebit" => GetMessage("DirectDebit"),
                "GoogleCheckout" => GetMessage("GoogleCheckout"),
                "PayPal" => GetMessage("PayPal"),
                "PaySwarm" => GetMessage("PaySwarm"),
            ),
            "ADDITIONAL_VALUES" => "N",
            "MULTIPLE" => "Y",
        ),
//END OFFER


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
        "NAME" => GetMessage("PARAM_SHOW"),
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