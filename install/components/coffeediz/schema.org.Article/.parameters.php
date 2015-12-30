<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentParameters = array(
	"GROUPS" => array(
		"MAIN_PARAMS" => array(
			"SORT" => 110,
			"NAME" => GetMessage("MAIN_PARAMS"),
		),
        "AUTHOR_PERSON_PARAMS" => array(
            "SORT" => 120,
            "NAME" => GetMessage("AUTHOR_PERSON_PARAMS"),
        ),
        "AUTHOR_ORGANIZATION_PARAMS" => array(
            "SORT" => 120,
            "NAME" => GetMessage("AUTHOR_ORGANIZATION_PARAMS"),
        ),
        "AUTHOR_TEXT_PARAMS" => array(
            "SORT" => 120,
            "NAME" => GetMessage("AUTHOR_TEXT_PARAMS"),
        ),
        "AUTHOR_LOGO_PARAMS" => array(
            "SORT" => 121,
            "NAME" => GetMessage("PUBLISHER_LOGO_PARAMS"),
        ),
        "PUBLISHER_ORGANIZATION_PARAMS" => array(
            "SORT" => 130,
            "NAME" => GetMessage("PUBLISHER_ORGANIZATION_PARAMS"),
        ),
        "PUBLISHER_ORGANIZATION_LOGO_PARAMS" => array(
            "SORT" => 131,
            "NAME" => GetMessage("PUBLISHER_ORGANIZATION_LOGO_PARAMS"),
        ),
        "IMAGE_PARAMS" => array(
            "SORT" => 140,
            "NAME" => GetMessage("IMAGE_PARAMS"),
        ),
        "RATING" => array(
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
        "TYPE" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("TYPE"),
            "TYPE" => "LIST",
            "REFRESH" => "Y",
            "VALUES" => array(
                "" => GetMessage("TYPE_Article"),
                "BlogPosting" => GetMessage("TYPE_BlogPosting"),
                "NewsArticle" => GetMessage("TYPE_NewsArticle"),
                "ScholarlyArticle" => GetMessage("TYPE_ScholarlyArticle"),
                "MedicalScholarlyArticle" => GetMessage("TYPE_MedicalScholarlyArticle"),
            ),
        ),
        "LEARNING_RESOURCE_TYPE" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("LEARNING_RESOURCE_TYPE"),
            "TYPE" => "LIST",
            "VALUES" => array(
                "" => "-",
                "AcademicThesis" => GetMessage("AcademicThesis"),
                "BookReport" => GetMessage("BookReport"),
                "Coursework" => GetMessage("Coursework"),
                "Dissertation" => GetMessage("Dissertation"),
                "Examination" => GetMessage("Examination"),
                "StudentEssay" => GetMessage("StudentEssay"),
                "StudentLaboratoryWork" => GetMessage("StudentLaboratoryWork"),
                "StudentReport" => GetMessage("StudentReport"),
                "StudentSummary" => GetMessage("StudentSummary"),
            ),
        ),
        "NAME" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("NAME"),
            "TYPE" => "STRING",
            "DEFAULT" => "",
        ),
        "ARTICLEBODY" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("articleBody"),
            "TYPE" => "STRING",
            "DEFAULT" => "",
            "ROWS" => 5,
            "COLS" => "50",
        ),
        "ABOUT" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("ABOUT"),
            "TYPE" => "STRING",
            "DEFAULT" => "",
            "ROWS" => 5,
            "COLS" => "50",
        ),
        "GENRE" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("GENRE"),
            "TYPE" => "STRING",
            "DEFAULT" => "",
        ),
        "ARTICLE_SECTION" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("ARTICLE_SECTION"),
            "TYPE" => "STRING",
            "DEFAULT" => "",
            "MULTIPLE" =>"Y",
        ),
        "KEYWORDS" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("KEYWORDS"),
            "TYPE" => "STRING",
            "DEFAULT" => "",
            "MULTIPLE" =>"Y",
        ),
        "IN_LANGUAGE" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("IN_LANGUAGE"),
            "TYPE" => "LIST",
            "ADDITIONAL_VALUES" => "Y",
            "VALUES" => array(
                "" => "-",
                "ru" => GetMessage("ru"),
                "en" => GetMessage("en"),
                "fr" => GetMessage("fr"),
                "de" => GetMessage("de"),
                "es" => GetMessage("es"),
            ),
            "DEFAULT" => "",
        ),
        "DATA_PUBLISHED" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("DATA_PUBLISHED"),
            "TYPE" => "STRING",
            "DEFAULT" => "",
        ),
        "DATA_MODIFIED" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("DATA_MODIFIED"),
            "TYPE" => "STRING",
            "DEFAULT" => "",
        ),
        "AUTHOR_TYPE" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("AUTHOR"),
            "TYPE" => "LIST",
            "REFRESH" => "Y",
            "VALUES" => array(
                "" => "-",
                "Text" => GetMessage("AUTHOR_TYPE_Text"),
                "Person" => GetMessage("AUTHOR_TYPE_Person"),
                "Organization" => GetMessage("AUTHOR_TYPE_Organization"),
            ),
        ),
        "IMAGEURL" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("IMAGEURL"),
            "TYPE" => "STRING",
            "SORT" => 500,
            "DEFAULT" => "",
            "REFRESH" => "Y",
        ),
        "MAINENTITYOFPAGE" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("MAINENTITYOFPAGE"),
            "TYPE" => "STRING",
            "SORT" => 500,
            "DEFAULT" => "",
            "REFRESH" => "N",
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



//START AUTHOR_TYPE_Text
if ($arCurrentValues["AUTHOR_TYPE"] == "Text")
{
    $arComponentParameters["PARAMETERS"]["AUTHOR_TEXT"] = Array(
        "PARENT" => "AUTHOR_TEXT_PARAMS",
        "NAME" => GetMessage("AUTHOR_TEXT"),
        "TYPE" => "STRING",
    );
}
//END AUTHOR_TYPE_Text

//START AUTHOR_TYPE_Person
if ($arCurrentValues["AUTHOR_TYPE"] == "Person")
{
    $arComponentParameters["PARAMETERS"]["AUTHOR_PERSON_NAME"] = Array(
        "PARENT" => "AUTHOR_PERSON_PARAMS",
        "NAME" => GetMessage("AUTHOR_PERSON_NAME"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["AUTHOR_PERSON_ADDITIONALNAME"] = Array(
        "PARENT" => "AUTHOR_PERSON_PARAMS",
        "NAME" => GetMessage("AUTHOR_PERSON_ADDITIONALNAME"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["AUTHOR_PERSON_FAMILYNAME"] = Array(
        "PARENT" => "AUTHOR_PERSON_PARAMS",
        "NAME" => GetMessage("AUTHOR_PERSON_FAMILYNAME"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["AUTHOR_PERSON_JOBTITLE"] = Array(
        "PARENT" => "AUTHOR_PERSON_PARAMS",
        "NAME" => GetMessage("AUTHOR_PERSON_JOBTITLE"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["AUTHOR_PERSON_IMAGEURL"] = Array(
        "PARENT" => "AUTHOR_PERSON_PARAMS",
        "NAME" => GetMessage("AUTHOR_PERSON_IMAGEURL"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["AUTHOR_PERSON_URL_SAMEAS"] = Array(
        "PARENT" => "AUTHOR_PERSON_PARAMS",
        "NAME" => GetMessage("AUTHOR_PERSON_URL_SAMEAS"),
        "TYPE" => "STRING",
        "MULTIPLE" =>"Y",
    );
    $arComponentParameters["PARAMETERS"]["AUTHOR_PERSON_URL"] = Array(
        "PARENT" => "AUTHOR_PERSON_PARAMS",
        "NAME" => GetMessage("AUTHOR_PERSON_URL"),
        "TYPE" => "STRING",
        "MULTIPLE" =>"Y",
    );
    $arComponentParameters["PARAMETERS"]["AUTHOR_PERSON_PHONE"] = Array(
        "PARENT" => "AUTHOR_PERSON_PARAMS",
        "NAME" => GetMessage("AUTHOR_PERSON_PHONE"),
        "TYPE" => "STRING",
        "MULTIPLE" =>"Y",
    );
    $arComponentParameters["PARAMETERS"]["AUTHOR_PERSON_EMAIL"] = Array(
        "PARENT" => "AUTHOR_PERSON_PARAMS",
        "NAME" => GetMessage("AUTHOR_PERSON_EMAIL"),
        "TYPE" => "STRING",
        "MULTIPLE" =>"Y",
    );
}
//END AUTHOR_TYPE_Person

//START AUTHOR_TYPE_Organization
if ($arCurrentValues["AUTHOR_TYPE"] == "Organization")
{
    $arComponentParameters["PARAMETERS"]["AUTHOR_ORGANIZATION_TYPE_2"] = Array(
        "PARENT" => "AUTHOR_ORGANIZATION_PARAMS",
        "NAME" => GetMessage("AUTHOR_ORGANIZATION_TYPE"),
        "TYPE" => "LIST",
        "REFRESH" => "Y",
        "SORT" => 50,
        "VALUES" => array(
            "" => GetMessage("TYPE_EMPTY"),
            "EducationalOrganization" => GetMessage("TYPE_EDUCATION"),
            "LocalBusiness" => GetMessage("TYPE_BUSINESS"),
            "PerformingGroup" => GetMessage("TYPE_PERFORMINGGROUP"),
            "Airline" => GetMessage("TYPE_AIRLINE"),
            "Corporation" => GetMessage("TYPE_CORPORATION"),
            "GovernmentOrganization" => GetMessage("TYPE_GOV"),
            "NGO" => GetMessage("TYPE_NGO"),
            "SportsOrganization" => GetMessage("TYPE_SPORT"),
        ),
    );
    $arComponentParameters["PARAMETERS"]["AUTHOR_ORGANIZATION_NAME"] = Array(
        "PARENT" => "AUTHOR_ORGANIZATION_PARAMS",
        "NAME" => GetMessage("AUTHOR_ORGANIZATION_NAME"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["AUTHOR_ORGANIZATION_DESCRIPTION"] = Array(
        "PARENT" => "AUTHOR_ORGANIZATION_PARAMS",
        "NAME" => GetMessage("AUTHOR_ORGANIZATION_DESCRIPTION"),
        "TYPE" => "STRING",
        "ROWS" => 5,
        "COLS" => "50",
    );
    $arComponentParameters["PARAMETERS"]["AUTHOR_ORGANIZATION_SITE"] = Array(
        "PARENT" => "AUTHOR_ORGANIZATION_PARAMS",
        "NAME" => GetMessage("AUTHOR_ORGANIZATION_SITE"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["AUTHOR_ORGANIZATION_PHONE"] = Array(
        "PARENT" => "AUTHOR_ORGANIZATION_PARAMS",
        "NAME" => GetMessage("AUTHOR_ORGANIZATION_PHONE"),
        "TYPE" => "STRING",
        "MULTIPLE" =>"Y",
    );
    $arComponentParameters["PARAMETERS"]["AUTHOR_ORGANIZATION_POST_CODE"] = Array(
        "PARENT" => "AUTHOR_ORGANIZATION_PARAMS",
        "NAME" => GetMessage("AUTHOR_ORGANIZATION_POST_CODE"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["AUTHOR_ORGANIZATION_COUNTRY"] = Array(
        "PARENT" => "AUTHOR_ORGANIZATION_PARAMS",
        "NAME" => GetMessage("AUTHOR_ORGANIZATION_COUNTRY"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["AUTHOR_ORGANIZATION_REGION"] = Array(
        "PARENT" => "AUTHOR_ORGANIZATION_PARAMS",
        "NAME" => GetMessage("AUTHOR_ORGANIZATION_REGION"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["AUTHOR_ORGANIZATION_LOCALITY"] = Array(
        "PARENT" => "AUTHOR_ORGANIZATION_PARAMS",
        "NAME" => GetMessage("AUTHOR_ORGANIZATION_LOCALITY"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["AUTHOR_ORGANIZATION_ADDRESS"] = Array(
        "PARENT" => "AUTHOR_ORGANIZATION_PARAMS",
        "NAME" => GetMessage("AUTHOR_ORGANIZATION_ADDRESS"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["AUTHOR_ORGANIZATION_LOGO"] = Array(
        "PARENT" => "AUTHOR_ORGANIZATION_PARAMS",
        "NAME" => GetMessage("ORGANIZATION_LOGO"),
        "TYPE" => "STRING",
        "REFRESH" => "Y",
    );
}

//START WorksFor TYPE_3 level
if ($arCurrentValues["AUTHOR_ORGANIZATION_TYPE_2"] == "EducationalOrganization")
{
    $arComponentParameters["PARAMETERS"]["AUTHOR_ORGANIZATION_TYPE_3"] = Array(
        "PARENT" => "AUTHOR_ORGANIZATION_PARAMS",
        "NAME" => GetMessage("AUTHOR_ORGANIZATION_TYPE"),
        "TYPE" => "LIST",
        "REFRESH" => "Y",
        "SORT" => 50,
        "VALUES" => array(
            "" => GetMessage("TYPE_EMPTY"),
            "CollegeOrUniversity" => GetMessage("UNIVERSITY"),
            "HighSchool" => GetMessage("HIGHSCHOOL"),
            "MiddleSchool" => GetMessage("MIDDLESCHOOL"),
            "ElementarySchool" => GetMessage("ELEMENTARYSCHOOL"),
            "Preschool" => GetMessage("PRESCHOOL"),
            "School" => GetMessage("SCHOOL"),
        ),
    );
}
if ($arCurrentValues["AUTHOR_ORGANIZATION_TYPE_2"] == "LocalBusiness")
{
    $arComponentParameters["PARAMETERS"]["AUTHOR_ORGANIZATION_TYPE_3"] = Array(
        "PARENT" => "AUTHOR_ORGANIZATION_PARAMS",
        "NAME" => GetMessage("AUTHOR_ORGANIZATION_TYPE"),
        "TYPE" => "LIST",
        "REFRESH" => "Y",
        "SORT" => 50,
        "VALUES" => array(
            "" => GetMessage("TYPE_EMPTY"),
            "AnimalShelter" => GetMessage("AnimalShelter"),
            "AutomotiveBusiness" => GetMessage("AutomotiveBusiness"),
            "ChildCare" => GetMessage("ChildCare"),
            "DryCleaningOrLaundry" => GetMessage("DryCleaningOrLaundry"),
            "EmergencyService" => GetMessage("EmergencyService"),
            "EmploymentAgency" => GetMessage("EmploymentAgency"),
            "EntertainmentBusiness" => GetMessage("EntertainmentBusiness"),
            "FinancialService" => GetMessage("FinancialService"),
            "FoodEstablishment" => GetMessage("FoodEstablishment"),
            "GovernmentOffice" => GetMessage("GovernmentOffice"),
            "HealthAndBeautyBusiness" => GetMessage("HealthAndBeautyBusiness"),
            "HomeAndConstructionBusiness" => GetMessage("HomeAndConstructionBusiness"),
            "InternetCafe" => GetMessage("InternetCafe"),
            "Library" => GetMessage("Library"),
            "LodgingBusiness" => GetMessage("LodgingBusiness"),
            "MedicalOrganization" => GetMessage("MedicalOrganization"),
            "ProfessionalService" => GetMessage("ProfessionalService"),
            "RadioStation" => GetMessage("RadioStation"),
            "RealEstateAgent" => GetMessage("RealEstateAgent"),
            "RecyclingCenter" => GetMessage("RecyclingCenter"),
            "SelfStorage" => GetMessage("SelfStorage"),
            "ShoppingCenter" => GetMessage("ShoppingCenter"),
            "Store" => GetMessage("Store"),
            "SportsActivityLocation" => GetMessage("SportsActivityLocation"),
            "TelevisionStation" => GetMessage("TelevisionStation"),
            "TouristInformationCenter" => GetMessage("TouristInformationCenter"),
            "TravelAgency" => GetMessage("TravelAgency"),
        ),
    );
}
if ($arCurrentValues["AUTHOR_ORGANIZATION_TYPE_2"] == "PerformingGroup")
{
    $arComponentParameters["PARAMETERS"]["AUTHOR_ORGANIZATION_TYPE_3"] = Array(
        "PARENT" => "AUTHOR_ORGANIZATION_PARAMS",
        "NAME" => GetMessage("AUTHOR_ORGANIZATION_TYPE"),
        "TYPE" => "LIST",
        "REFRESH" => "Y",
        "SORT" => 50,
        "VALUES" => array(
            "" => GetMessage("TYPE_EMPTY"),
            "DanceGroup" => GetMessage("DANCEGROUP"),
            "MusicGroup" => GetMessage("MUSICGROUP"),
            "TheaterGroup" => GetMessage("TEATERGROUP"),
        ),
    );
}
if ($arCurrentValues["AUTHOR_ORGANIZATION_TYPE_2"] == "SportsOrganization")
{
    $arComponentParameters["PARAMETERS"]["AUTHOR_ORGANIZATION_TYPE_3"] = Array(
        "PARENT" => "AUTHOR_ORGANIZATION_PARAMS",
        "NAME" => GetMessage("AUTHOR_ORGANIZATION_TYPE"),
        "TYPE" => "LIST",
        "REFRESH" => "Y",
        "SORT" => 50,
        "VALUES" => array(
            "" => GetMessage("TYPE_EMPTY"),
            "SportsTeam" => GetMessage("SPORTSTEAM"),
        ),
    );
}
//END WorksFor TYPE_3 level
//START WorksFor TYPE_4 level
if ($arCurrentValues["AUTHOR_ORGANIZATION_TYPE_3"] == "AutomotiveBusiness")
{
    $arComponentParameters["PARAMETERS"]["AUTHOR_ORGANIZATION_TYPE_4"] = Array(
        "PARENT" => "AUTHOR_ORGANIZATION_PARAMS",
        "NAME" => GetMessage("AUTHOR_ORGANIZATION_TYPE"),
        "TYPE" => "LIST",
        "REFRESH" => "Y",
        "SORT" => 50,
        "VALUES" => array(
            "" => GetMessage("TYPE_EMPTY"),
            "AutoBodyShop" => GetMessage("TYPE_AutoBodyShop"),
            "AutoDealer" => GetMessage("TYPE_AutoDealer"),
            "AutoPartsStore" => GetMessage("TYPE_AutoPartsStore"),
            "AutoRental" => GetMessage("TYPE_AutoRental"),
            "AutoRepair" => GetMessage("TYPE_AutoRepair"),
            "AutoWash" => GetMessage("TYPE_AutoWash"),
            "GasStation" => GetMessage("TYPE_GasStation"),
            "MotorcycleDealer" => GetMessage("TYPE_MotorcycleDealer"),
            "MotorcycleRepair" => GetMessage("TYPE_MotorcycleRepair"),
        ),
    );
}
if ($arCurrentValues["AUTHOR_ORGANIZATION_TYPE_3"] == "EmergencyService")
{
    $arComponentParameters["PARAMETERS"]["AUTHOR_ORGANIZATION_TYPE_4"] = Array(
        "PARENT" => "AUTHOR_ORGANIZATION_PARAMS",
        "NAME" => GetMessage("AUTHOR_ORGANIZATION_TYPE"),
        "TYPE" => "LIST",
        "REFRESH" => "Y",
        "SORT" => 50,
        "VALUES" => array(
            "" => GetMessage("TYPE_EMPTY"),
            "FireStation" => GetMessage("FireStation"),
            "Hospital" => GetMessage("Hospital"),
            "PoliceStation" => GetMessage("PoliceStation"),
        ),
    );
}
if ($arCurrentValues["AUTHOR_ORGANIZATION_TYPE_3"] == "EntertainmentBusiness")
{
    $arComponentParameters["PARAMETERS"]["AUTHOR_ORGANIZATION_TYPE_4"] = Array(
        "PARENT" => "AUTHOR_ORGANIZATION_PARAMS",
        "NAME" => GetMessage("AUTHOR_ORGANIZATION_TYPE"),
        "TYPE" => "LIST",
        "REFRESH" => "Y",
        "SORT" => 50,
        "VALUES" => array(
            "" => GetMessage("TYPE_EMPTY"),
            "AdultEntertainment" => GetMessage("TYPE_AdultEntertainment"),
            "AmusementPark" => GetMessage("TYPE_AmusementPark"),
            "ArtGallery" => GetMessage("TYPE_ArtGallery"),
            "Casino" => GetMessage("TYPE_Casino"),
            "ComedyClub" => GetMessage("TYPE_ComedyClub"),
            "MovieTheater" => GetMessage("TYPE_MovieTheater"),
            "NightClub" => GetMessage("TYPE_NightClub"),
        ),
    );
}
if ($arCurrentValues["AUTHOR_ORGANIZATION_TYPE_3"] == "FinancialService")
{
    $arComponentParameters["PARAMETERS"]["AUTHOR_ORGANIZATION_TYPE_4"] = Array(
        "PARENT" => "AUTHOR_ORGANIZATION_PARAMS",
        "NAME" => GetMessage("AUTHOR_ORGANIZATION_TYPE"),
        "TYPE" => "LIST",
        "REFRESH" => "Y",
        "SORT" => 50,
        "VALUES" => array(
            "" => GetMessage("TYPE_EMPTY"),
            "AccountingService" => GetMessage("TYPE_AccountingService"),
            "AutomatedTeller" => GetMessage("TYPE_AutomatedTeller"),
            "BankOrCreditUnion" => GetMessage("TYPE_BankOrCreditUnion"),
            "InsuranceAgency" => GetMessage("TYPE_InsuranceAgency"),
        ),
    );
}
if ($arCurrentValues["AUTHOR_ORGANIZATION_TYPE_3"] == "FoodEstablishment")
{
    $arComponentParameters["PARAMETERS"]["AUTHOR_ORGANIZATION_TYPE_4"] = Array(
        "PARENT" => "AUTHOR_ORGANIZATION_PARAMS",
        "NAME" => GetMessage("AUTHOR_ORGANIZATION_TYPE"),
        "TYPE" => "LIST",
        "REFRESH" => "Y",
        "SORT" => 50,
        "VALUES" => array(
            "" => GetMessage("TYPE_EMPTY"),
            "Bakery" => GetMessage("TYPE_Bakery"),
            "BarOrPub" => GetMessage("TYPE_BarOrPub"),
            "Brewery" => GetMessage("TYPE_Brewery"),
            "CafeOrCoffeeShop" => GetMessage("TYPE_CafeOrCoffeeShop"),
            "FastFoodRestaurant" => GetMessage("TYPE_FastFoodRestaurant"),
            "IceCreamShop" => GetMessage("TYPE_IceCreamShop"),
            "Restaurant" => GetMessage("TYPE_Restaurant"),
            "Winery" => GetMessage("TYPE_Winery"),
        ),
    );
}
if ($arCurrentValues["AUTHOR_ORGANIZATION_TYPE_3"] == "GovernmentOffice")
{
    $arComponentParameters["PARAMETERS"]["AUTHOR_ORGANIZATION_TYPE_4"] = Array(
        "PARENT" => "AUTHOR_ORGANIZATION_PARAMS",
        "NAME" => GetMessage("AUTHOR_ORGANIZATION_TYPE"),
        "TYPE" => "LIST",
        "REFRESH" => "Y",
        "SORT" => 50,
        "VALUES" => array(
            "" => GetMessage("TYPE_EMPTY"),
            "PostOffice" => GetMessage("TYPE_PostOffice"),
        ),
    );
}
if ($arCurrentValues["AUTHOR_ORGANIZATION_TYPE_3"] == "HealthAndBeautyBusiness")
{
    $arComponentParameters["PARAMETERS"]["AUTHOR_ORGANIZATION_TYPE_4"] = Array(
        "PARENT" => "AUTHOR_ORGANIZATION_PARAMS",
        "NAME" => GetMessage("AUTHOR_ORGANIZATION_TYPE"),
        "TYPE" => "LIST",
        "REFRESH" => "Y",
        "SORT" => 50,
        "VALUES" => array(
            "" => GetMessage("TYPE_EMPTY"),
            "BeautySalon" => GetMessage("TYPE_BeautySalon"),
            "DaySpa" => GetMessage("TYPE_DaySpa"),
            "HairSalon" => GetMessage("TYPE_HairSalon"),
            "HealthClub" => GetMessage("TYPE_HealthClub"),
            "NailSalon" => GetMessage("TYPE_NailSalon"),
            "TattooParlor" => GetMessage("TYPE_TattooParlor"),
        ),
    );
}
if ($arCurrentValues["AUTHOR_ORGANIZATION_TYPE_3"] == "HomeAndConstructionBusiness")
{
    $arComponentParameters["PARAMETERS"]["AUTHOR_ORGANIZATION_TYPE_4"] = Array(
        "PARENT" => "AUTHOR_ORGANIZATION_PARAMS",
        "NAME" => GetMessage("AUTHOR_ORGANIZATION_TYPE"),
        "TYPE" => "LIST",
        "REFRESH" => "Y",
        "SORT" => 50,
        "VALUES" => array(
            "" => GetMessage("TYPE_EMPTY"),
            "Electrician" => GetMessage("TYPE_Electrician"),
            "GeneralContractor" => GetMessage("TYPE_GeneralContractor"),
            "HVACBusiness" => GetMessage("TYPE_HVACBusiness"),
            "HousePainter" => GetMessage("TYPE_HousePainter"),
            "Locksmith" => GetMessage("TYPE_Locksmith"),
            "MovingCompany" => GetMessage("TYPE_MovingCompany"),
            "Plumber" => GetMessage("TYPE_Plumber"),
            "RoofingContractor" => GetMessage("TYPE_RoofingContractor"),
        ),
    );

}
if ($arCurrentValues["AUTHOR_ORGANIZATION_TYPE_3"] == "LodgingBusiness")
{
    $arComponentParameters["PARAMETERS"]["AUTHOR_ORGANIZATION_TYPE_4"] = Array(
        "PARENT" => "AUTHOR_ORGANIZATION_PARAMS",
        "NAME" => GetMessage("AUTHOR_ORGANIZATION_TYPE"),
        "TYPE" => "LIST",
        "REFRESH" => "Y",
        "SORT" => 50,
        "VALUES" => array(
            "" => GetMessage("TYPE_EMPTY"),
            "BedAndBreakfast" => GetMessage("TYPE_BedAndBreakfast"),
            "Hostel" => GetMessage("TYPE_Hostel"),
            "Hotel" => GetMessage("TYPE_Hotel"),
            "Motel" => GetMessage("TYPE_Motel"),
        ),
    );
}
if ($arCurrentValues["AUTHOR_ORGANIZATION_TYPE_3"] == "MedicalOrganization")
{
    $arComponentParameters["PARAMETERS"]["AUTHOR_ORGANIZATION_TYPE_4"] = Array(
        "PARENT" => "AUTHOR_ORGANIZATION_PARAMS",
        "NAME" => GetMessage("AUTHOR_ORGANIZATION_TYPE"),
        "TYPE" => "LIST",
        "REFRESH" => "Y",
        "SORT" => 50,
        "VALUES" => array(
            "" => GetMessage("TYPE_EMPTY"),
            "Dentist" => GetMessage("TYPE_Dentist"),
            "DiagnosticLab" => GetMessage("TYPE_DiagnosticLab"),
            "Hospital" => GetMessage("Hospital"),
            "MedicalClinic" => GetMessage("TYPE_MedicalClinic"),
            "Optician" => GetMessage("TYPE_Optician"),
            "Pharmacy" => GetMessage("TYPE_Pharmacy"),
            "Physician" => GetMessage("TYPE_Physician"),
            "VeterinaryCare" => GetMessage("TYPE_VeterinaryCare"),
        ),
    );
}
if ($arCurrentValues["AUTHOR_ORGANIZATION_TYPE_3"] == "ProfessionalService")
{
    $arComponentParameters["PARAMETERS"]["AUTHOR_ORGANIZATION_TYPE_4"] = Array(
        "PARENT" => "AUTHOR_ORGANIZATION_PARAMS",
        "NAME" => GetMessage("AUTHOR_ORGANIZATION_TYPE"),
        "TYPE" => "LIST",
        "REFRESH" => "Y",
        "SORT" => 50,
        "VALUES" => array(
            "" => GetMessage("TYPE_EMPTY"),
            "AccountingService" => GetMessage("TYPE_AccountingService"),
            "Attorney" => GetMessage("TYPE_Attorney"),
            "Dentist" => GetMessage("TYPE_Dentist"),
            "Electrician" => GetMessage("TYPE_Electrician"),
            "GeneralContractor" => GetMessage("TYPE_GeneralContractor"),
            "HousePainter" => GetMessage("TYPE_HousePainter"),
            "Locksmith" => GetMessage("TYPE_Locksmith"),
            "Notary" => GetMessage("TYPE_Notary"),
            "Plumber" => GetMessage("TYPE_Plumber"),
            "RoofingContractor" => GetMessage("TYPE_RoofingContractor"),
        ),
    );
}
if ($arCurrentValues["AUTHOR_ORGANIZATION_TYPE_3"] == "Store")
{
    $arComponentParameters["PARAMETERS"]["AUTHOR_ORGANIZATION_TYPE_4"] = Array(
        "PARENT" => "AUTHOR_ORGANIZATION_PARAMS",
        "NAME" => GetMessage("AUTHOR_ORGANIZATION_TYPE"),
        "TYPE" => "LIST",
        "REFRESH" => "Y",
        "SORT" => 50,
        "VALUES" => array(
            "" => GetMessage("TYPE_EMPTY"),
            "AutoPartsStore" => GetMessage("TYPE_AutoPartsStore"),
            "BikeStore" => GetMessage("TYPE_BikeStore"),
            "BookStore" => GetMessage("TYPE_BookStore"),
            "ClothingStore" => GetMessage("TYPE_ClothingStore"),
            "ComputerStore" => GetMessage("TYPE_ComputerStore"),
            "ConvenienceStore" => GetMessage("TYPE_ConvenienceStore"),
            "DepartmentStore" => GetMessage("TYPE_DepartmentStore"),
            "ElectronicsStore" => GetMessage("TYPE_ElectronicsStore"),
            "Florist" => GetMessage("TYPE_Florist"),
            "FurnitureStore" => GetMessage("TYPE_FurnitureStore"),
            "GardenStore" => GetMessage("TYPE_GardenStore"),
            "GroceryStore" => GetMessage("TYPE_GroceryStore"),
            "HardwareStore" => GetMessage("TYPE_HardwareStore"),
            "HobbyShop" => GetMessage("TYPE_HobbyShop"),
            "HomeGoodsStore" => GetMessage("TYPE_HomeGoodsStore"),
            "JewelryStore" => GetMessage("TYPE_JewelryStore"),
            "LiquorStore" => GetMessage("TYPE_LiquorStore"),
            "MensClothingStore" => GetMessage("TYPE_MensClothingStore"),
            "MobilePhoneStore" => GetMessage("TYPE_MobilePhoneStore"),
            "MovieRentalStore" => GetMessage("TYPE_MovieRentalStore"),
            "MusicStore" => GetMessage("TYPE_MusicStore"),
            "OfficeEquipmentStore" => GetMessage("TYPE_OfficeEquipmentStore"),
            "OutletStore" => GetMessage("TYPE_OutletStore"),
            "PawnShop" => GetMessage("TYPE_PawnShop"),
            "PetStore" => GetMessage("TYPE_PetStore"),
            "ShoeStore" => GetMessage("TYPE_ShoeStore"),
            "SportingGoodsStore" => GetMessage("TYPE_SportingGoodsStore"),
            "TireShop" => GetMessage("TYPE_TireShop"),
            "ToyStore" => GetMessage("TYPE_ToyStore"),
            "WholesaleStore" => GetMessage("TYPE_WholesaleStore"),
        ),
    );
}
if ($arCurrentValues["AUTHOR_ORGANIZATION_TYPE_3"] == "SportsActivityLocation")
{
    $arComponentParameters["PARAMETERS"]["AUTHOR_ORGANIZATION_TYPE_4"] = Array(
        "PARENT" => "AUTHOR_ORGANIZATION_PARAMS",
        "NAME" => GetMessage("AUTHOR_ORGANIZATION_TYPE"),
        "TYPE" => "LIST",
        "REFRESH" => "Y",
        "SORT" => 50,
        "VALUES" => array(
            "" => GetMessage("TYPE_EMPTY"),
            "BowlingAlley" => GetMessage("TYPE_BowlingAlley"),
            "ExerciseGym" => GetMessage("TYPE_ExerciseGym"),
            "GolfCourse" => GetMessage("TYPE_GolfCourse"),
            "HealthClub" => GetMessage("TYPE_HealthClub"),
            "PublicSwimmingPool" => GetMessage("TYPE_PublicSwimmingPool"),
            "SkiResort" => GetMessage("TYPE_SkiResort"),
            "SportsClub" => GetMessage("TYPE_SportsClub"),
            "StadiumOrArena" => GetMessage("StadiumOrArena"),
            "TennisComplex" => GetMessage("TYPE_TennisComplex"),
        ),
    );
}
//END WorksFor TYPE_4 level
//END AUTHOR_TYPE_Organization


//START SOURCE and REFERENCES of Article
if ($arCurrentValues["TYPE"] == "ScholarlyArticle" or $arCurrentValues["TYPE"] == "MedicalScholarlyArticle")
{
    //START SOURCE of Article
    $arComponentParameters["PARAMETERS"]["SOURCE_TYPE"] = Array(
        "NAME" => GetMessage("SOURCE_TYPE"),
        "TYPE" => "LIST",
        "REFRESH" => "Y",
        "SORT" => 50,
        "VALUES" => array(
            "SOURCE_TYPE_URL" => GetMessage("SOURCE_TYPE_URL"),
            "SOURCE_TYPE_TEXT" => GetMessage("SOURCE_TYPE_TEXT"),
        ),
    );

    if ($arCurrentValues["SOURCE_TYPE"] == "SOURCE_TYPE_URL")
    {
        $arComponentParameters["PARAMETERS"]["SOURCE_TYPE_URL_URL"] = Array(
            "NAME" => GetMessage("SOURCE_TYPE_URL_URL"),
            "TYPE" => "STRING",
        );
        $arComponentParameters["PARAMETERS"]["SOURCE_TYPE_URL_TEXT"] = Array(
            "NAME" => GetMessage("SOURCE_TYPE_URL_TEXT"),
            "TYPE" => "STRING",
        );
    }
    elseif ($arCurrentValues["SOURCE_TYPE"] == "SOURCE_TYPE_TEXT")
    {
        $arComponentParameters["PARAMETERS"]["SOURCE_TYPE_TEXT_TEXT"] = Array(
            "NAME" => GetMessage("SOURCE_TYPE_TEXT_TEXT"),
            "TYPE" => "STRING",
        );
    }
    //END SOURCE of Article

    //START REFERENCES of Article
    $arComponentParameters["PARAMETERS"]["REFERENCES_URLS"] = Array(
        "NAME" => GetMessage("REFERENCES_URLS"),
        "TYPE" => "STRING",
        "MULTIPLE" =>"Y",
    );
    $arComponentParameters["PARAMETERS"]["REFERENCES_TEXTS"] = Array(
        "NAME" => GetMessage("REFERENCES_TEXTS"),
        "TYPE" => "STRING",
        "MULTIPLE" =>"Y",
    );
    //END REFERENCES of Article
}
//END SOURCE and REFERENCES of Article


//START IMAGE DETAIL
if (!empty($arCurrentValues['IMAGEURL']))
{
    $arComponentParameters["PARAMETERS"]["IMAGE_NAME"] = Array(
        "PARENT" => "IMAGE_PARAMS",
        "NAME" => GetMessage("IMAGE_NAME"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["IMAGE_CAPTION"] = Array(
        "PARENT" => "IMAGE_PARAMS",
        "NAME" => GetMessage("IMAGE_CAPTION"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["IMAGE_DESCRIPTION"] = Array(
        "PARENT" => "IMAGE_PARAMS",
        "NAME" => GetMessage("IMAGE_DESCRIPTION"),
        "TYPE" => "STRING",
        "ROWS" => 5,
        "COLS" => "50",
    );
    $arComponentParameters["PARAMETERS"]["IMAGE_HEIGHT"] = Array(
        "PARENT" => "IMAGE_PARAMS",
        "NAME" => GetMessage("IMAGE_HEIGHT"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["IMAGE_WIDTH"] = Array(
        "PARENT" => "IMAGE_PARAMS",
        "NAME" => GetMessage("IMAGE_WIDTH"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["IMAGE_TRUMBNAIL_CONTENTURL"] = Array(
        "PARENT" => "IMAGE_PARAMS",
        "NAME" => GetMessage("IMAGE_TRUMBNAIL_CONTENTURL"),
        "TYPE" => "STRING",
    );
}
//END IMAGE DETAIL















//START PUBLISHER_TYPE_Organization
//if ($arCurrentValues["AUTHOR_TYPE"] == "Organization")
//{
    $arComponentParameters["PARAMETERS"]["PUBLISHER_ORGANIZATION_TYPE_2"] = Array(
        "PARENT" => "PUBLISHER_ORGANIZATION_PARAMS",
        "NAME" => GetMessage("AUTHOR_ORGANIZATION_TYPE"),
        "TYPE" => "LIST",
        "REFRESH" => "Y",
        "SORT" => 50,
        "VALUES" => array(
            "" => GetMessage("TYPE_EMPTY"),
            "EducationalOrganization" => GetMessage("TYPE_EDUCATION"),
            "LocalBusiness" => GetMessage("TYPE_BUSINESS"),
            "PerformingGroup" => GetMessage("TYPE_PERFORMINGGROUP"),
            "Airline" => GetMessage("TYPE_AIRLINE"),
            "Corporation" => GetMessage("TYPE_CORPORATION"),
            "GovernmentOrganization" => GetMessage("TYPE_GOV"),
            "NGO" => GetMessage("TYPE_NGO"),
            "SportsOrganization" => GetMessage("TYPE_SPORT"),
        ),
    );
    $arComponentParameters["PARAMETERS"]["PUBLISHER_ORGANIZATION_NAME"] = Array(
        "PARENT" => "PUBLISHER_ORGANIZATION_PARAMS",
        "NAME" => GetMessage("AUTHOR_ORGANIZATION_NAME"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["PUBLISHER_ORGANIZATION_DESCRIPTION"] = Array(
        "PARENT" => "PUBLISHER_ORGANIZATION_PARAMS",
        "NAME" => GetMessage("AUTHOR_ORGANIZATION_DESCRIPTION"),
        "TYPE" => "STRING",
        "ROWS" => 5,
        "COLS" => "50",
    );
    $arComponentParameters["PARAMETERS"]["PUBLISHER_ORGANIZATION_SITE"] = Array(
        "PARENT" => "PUBLISHER_ORGANIZATION_PARAMS",
        "NAME" => GetMessage("AUTHOR_ORGANIZATION_SITE"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["PUBLISHER_ORGANIZATION_PHONE"] = Array(
        "PARENT" => "PUBLISHER_ORGANIZATION_PARAMS",
        "NAME" => GetMessage("AUTHOR_ORGANIZATION_PHONE"),
        "TYPE" => "STRING",
        "MULTIPLE" =>"Y",
    );
    $arComponentParameters["PARAMETERS"]["PUBLISHER_ORGANIZATION_POST_CODE"] = Array(
        "PARENT" => "PUBLISHER_ORGANIZATION_PARAMS",
        "NAME" => GetMessage("AUTHOR_ORGANIZATION_POST_CODE"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["PUBLISHER_ORGANIZATION_COUNTRY"] = Array(
        "PARENT" => "PUBLISHER_ORGANIZATION_PARAMS",
        "NAME" => GetMessage("AUTHOR_ORGANIZATION_COUNTRY"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["PUBLISHER_ORGANIZATION_REGION"] = Array(
        "PARENT" => "PUBLISHER_ORGANIZATION_PARAMS",
        "NAME" => GetMessage("AUTHOR_ORGANIZATION_REGION"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["PUBLISHER_ORGANIZATION_LOCALITY"] = Array(
        "PARENT" => "PUBLISHER_ORGANIZATION_PARAMS",
        "NAME" => GetMessage("AUTHOR_ORGANIZATION_LOCALITY"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["PUBLISHER_ORGANIZATION_ADDRESS"] = Array(
        "PARENT" => "PUBLISHER_ORGANIZATION_PARAMS",
        "NAME" => GetMessage("AUTHOR_ORGANIZATION_ADDRESS"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["PUBLISHER_ORGANIZATION_LOGO"] = Array(
        "PARENT" => "PUBLISHER_ORGANIZATION_PARAMS",
        "NAME" => GetMessage("ORGANIZATION_LOGO"),
        "TYPE" => "STRING",
        "REFRESH" => "Y",
    );
//}
if (!empty($arCurrentValues['PUBLISHER_ORGANIZATION_LOGO']))
{
    $arComponentParameters["PARAMETERS"]["PUBLISHER_ORGANIZATION_LOGO_NAME"] = Array(
        "PARENT" => "PUBLISHER_ORGANIZATION_LOGO_PARAMS",
        "NAME" => GetMessage("LOGO_NAME"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["PUBLISHER_ORGANIZATION_LOGO_CAPTION"] = Array(
        "PARENT" => "PUBLISHER_ORGANIZATION_LOGO_PARAMS",
        "NAME" => GetMessage("LOGO_CAPTION"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["PUBLISHER_ORGANIZATION_LOGO_DESCRIPTION"] = Array(
        "PARENT" => "PUBLISHER_ORGANIZATION_LOGO_PARAMS",
        "NAME" => GetMessage("LOGO_DESCRIPTION"),
        "TYPE" => "STRING",
        "ROWS" => 5,
        "COLS" => "50",
    );
    $arComponentParameters["PARAMETERS"]["PUBLISHER_ORGANIZATION_LOGO_HEIGHT"] = Array(
        "PARENT" => "PUBLISHER_ORGANIZATION_LOGO_PARAMS",
        "NAME" => GetMessage("LOGO_HEIGHT"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["PUBLISHER_ORGANIZATION_LOGO_WIDTH"] = Array(
        "PARENT" => "PUBLISHER_ORGANIZATION_LOGO_PARAMS",
        "NAME" => GetMessage("LOGO_WIDTH"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["PUBLISHER_ORGANIZATION_LOGO_TRUMBNAIL_CONTENTURL"] = Array(
        "PARENT" => "PUBLISHER_ORGANIZATION_LOGO_PARAMS",
        "NAME" => GetMessage("LOGO_TRUMBNAIL_CONTENTURL"),
        "TYPE" => "STRING",
    );
}