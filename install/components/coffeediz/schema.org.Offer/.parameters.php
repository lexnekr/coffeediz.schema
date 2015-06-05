<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentParameters = array(
	"GROUPS" => array(
		"MAIN" => array(
			"SORT" => 110,
			"NAME" => "MAIN_PARAMS",
		),
		"MAIN_PARAMS" => array(
			"SORT" => 120,
			"NAME" => GetMessage("MAIN_PARAMS"),
		),
	),
	"PARAMETERS"  =>  array(
		"SHOW" => array(
			"PARENT" => "MAIN_PARAMS",
			"NAME" => GetMessage("PARAM_SHOW"),
			"TYPE" => "CHECKBOX",
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
        "ITEMAVAILABILITY" => array(
            "PARENT" => "MAIN_PARAMS",
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
            "PARENT" => "MAIN_PARAMS",
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
            "PARENT" => "MAIN_PARAMS",
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

        "ITEMPROP" => array(
            "PARENT" => "ADDITIONAL_SETTINGS",
            "NAME" => GetMessage("itemprop"),
            "TYPE" => "LIST",
            "VALUES" => array(
                "" => "-",
                "offers" => "offers",
            ),
        ),
	)
);

