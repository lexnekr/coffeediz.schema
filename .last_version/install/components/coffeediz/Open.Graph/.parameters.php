<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentParameters = array(
	"GROUPS" => array(
		"MAIN_PARAMS" => array(
			"SORT" => 110,
			"NAME" => GetMessage("MAIN_PARAMS"),
		),
        "TWITTER_PARAMS" => array(
            "SORT" => 210,
            "NAME" => GetMessage("TWITTER_PARAMS"),
        ),
	),
	"PARAMETERS"  =>  array(
        "TITLE" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("TITLE"),
            "TYPE" => "STRING",
            "SORT" => 500,
            "DEFAULT" => "",
        ),
        "TITLE_LIMIT" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("TITLE_LIMIT"),
            "TYPE" => "LIST",
            "VALUES" => array(
                "" => "-",
                "70" => "70",
            ),
            "SORT" => 500,
            "DEFAULT" => "70",
        ),
        "DESCRIPTION" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("DESCRIPTION"),
            "TYPE" => "STRING",
            "SORT" => 500,
            "DEFAULT" => "",
        ),
        "DESCRIPTION_LIMIT" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("DESCRIPTION_LIMIT"),
            "TYPE" => "LIST",
            "VALUES" => array(
                "" => "-",
                "200" => "200",
            ),
            "SORT" => 500,
            "DEFAULT" => "200",
        ),
        "TYPE" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("TYPE"),
            "TYPE" => "LIST",
            "VALUES" => array(
                "website" => GetMessage("website"),
                //"image" => GetMessage("image"),
                "music.song" => GetMessage("music.song"),
                "music.album" => GetMessage("music.album"),
                "music.playlist" => GetMessage("music.playlist"),
                "music.radio_station" => GetMessage("music.radio_station"),
                "video.movie" => GetMessage("video.movie"),
                "video.episode" => GetMessage("video.episode"),
                "video.tv_show" => GetMessage("video.tv_show"),
                "video.other" => GetMessage("video.other"),
                "article" => GetMessage("article"),
                "book" => GetMessage("book"),
                "profile" => GetMessage("profile"),
            ),
            "SORT" => 500,
            "DEFAULT" => "website",
            "ADDITIONAL_VALUES" => "Y",
        ),
        "IMAGES" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("IMAGES"),
            "TYPE" => "STRING",
            "SORT" => 500,
            "DEFAULT" => "",
            "MULTIPLE" => "Y",
        ),
        "VIDEO" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("VIDEO"),
            "TYPE" => "STRING",
            "SORT" => 500,
            "DEFAULT" => "",
        ),
        "VIDEO_WIDTH" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("VIDEO_WIDTH"),
            "TYPE" => "STRING",
            "SORT" => 500,
            "DEFAULT" => "",
        ),
        "VIDEO_HEIGHT" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("VIDEO_HEIGHT"),
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
        "LOCALE" => array(
            "PARENT" => "ADDITIONAL_SETTINGS",
            "NAME" => GetMessage("LOCALE"),
            "TYPE" => "LIST",
            "VALUES" => array(
                "ru_RU" => "ru_RU",
                "en_US" => "en_US",
                "en_UK" => "en_GB",
            ),
            "SORT" => 500,
            "DEFAULT" => "ru_RU",
            "ADDITIONAL_VALUES" => "Y",
        ),
        "SITE_NAME" => array(
            "PARENT" => "ADDITIONAL_SETTINGS",
            "NAME" => GetMessage("SITE_NAME"),
            "TYPE" => "STRING",
            "SORT" => 500,
            "DEFAULT" => "",
        ),
        "USE_TWITTER" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("USE_TWITTER"),
            "TYPE" => "CHECKBOX",
            "DEFAULT" => "Y",
            "REFRESH" => "Y",
        ),
	)
);

if ($arCurrentValues["USE_TWITTER"] == "Y")
{
    $arComponentParameters["PARAMETERS"]["TWITTER_CARD_TYPE"] = Array(
        "PARENT" => "TWITTER_PARAMS",
        "NAME" => GetMessage("TWITTER_CARD_TYPE"),
        "TYPE" => "LIST",
        "SORT" => 50,
        "VALUES" => array(
            "summary" => GetMessage("summary"),
            "summary_large_image" => GetMessage("summary_large_image"),
            //"photo" => GetMessage("photo"), //ÓÑÒÀÐÅËÎ https://twittercommunity.com/t/deprecating-the-photo-gallery-and-product-cards/38961
            //"gallery" => GetMessage("gallery"), //ÓÑÒÀÐÅËÎ https://twittercommunity.com/t/deprecating-the-photo-gallery-and-product-cards/38961
            "app" => GetMessage("app"), // NEED whitelisted integration from Twitter
            "player" => GetMessage("player"), // NEED whitelisted integration from Twitter
            //"product" => GetMessage("product"), //ÓÑÒÀÐÅËÎ https://twittercommunity.com/t/deprecating-the-photo-gallery-and-product-cards/38961
        ),
        "REFRESH" => "Y",
    );
    $arComponentParameters["PARAMETERS"]["TWITTER_CREATOR"] = Array(
        "PARENT" => "TWITTER_PARAMS",
        "NAME" => GetMessage("TWITTER_CREATOR"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["TWITTER_SITE"] = Array(
        "PARENT" => "TWITTER_PARAMS",
        "NAME" => GetMessage("TWITTER_SITE"),
        "TYPE" => "STRING",
    );

}