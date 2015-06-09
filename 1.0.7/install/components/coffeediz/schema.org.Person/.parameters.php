<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentParameters = array(
	"GROUPS" => array(
		"MAIN_PARAMS" => array(
			"SORT" => 110,
			"NAME" => GetMessage("MAIN_PARAMS"),
		),
        "IMAGE_PARAMS" => array(
            "SORT" => 120,
            "NAME" => GetMessage("IMAGE_PARAMS"),
        ),
        "WORKSFOR_PARAMS" => array(
            "SORT" => 130,
            "NAME" => GetMessage("WORKSFOR_PARAMS"),
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
        "ADDITIONALNAME" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("additionalName"),
            "TYPE" => "STRING",
            "DEFAULT" => "",
        ),
        "FAMILYNAME" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("familyName"),
            "TYPE" => "STRING",
            "DEFAULT" => "",
        ),
        "JOBTITLE" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("jobTitle"),
            "TYPE" => "STRING",
            "DEFAULT" => "",
        ),
        "IMAGEURL" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("IMAGEURL"),
            "TYPE" => "STRING",
            "SORT" => 500,
            "DEFAULT" => "",
            "REFRESH" => "Y",
        ),
        "WORKSFORNAME" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("worksForNAME"),
            "TYPE" => "STRING",
            "SORT" => 500,
            "DEFAULT" => "",
            "REFRESH" => "Y",
        ),
        "PERSON_URL_SAMEAS" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("PERSON_URL_SAMEAS"),
            "TYPE" => "STRING",
            "MULTIPLE" =>"Y",
        ),
        "PERSON_URL" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("PERSON_URL"),
            "TYPE" => "STRING",
            "MULTIPLE" =>"Y",
        ),
        "PERSON_PHONE" => Array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("PERSON_PHONE"),
            "TYPE" =>"STRING",
            "MULTIPLE" =>"Y",
        ),
        "PERSON_EMAIL" => Array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("PERSON_EMAIL"),
            "TYPE" =>"STRING",
            "MULTIPLE" =>"Y",
        ),

        "ITEMPROP" => array(
            "PARENT" => "ADDITIONAL_SETTINGS",
            "NAME" => GetMessage("itemprop"),
            "TYPE" => "LIST",
            "VALUES" => array(
                "" => "-",
                "author" => GetMessage("author"),
                "actor" => GetMessage("actor"),
                "contributor" => GetMessage("contributor"),
                "copyrightHolder" => GetMessage("copyrightHolder"),
                "creator" => GetMessage("creator"),
                "creditedTo" => GetMessage("creditedTo"),
                "customer" => GetMessage("customer"),
                "director" => GetMessage("director"),
                "editor" => GetMessage("editor"),
                "employee" => GetMessage("employee"),
                "founder" => GetMessage("founder"),
                "illustrator" => GetMessage("illustrator"),
                "member" => GetMessage("member"),
                "musicBy" => GetMessage("musicBy"),
                "organizer" => GetMessage("organizer"),
                "producer" => GetMessage("producer"),
                "reviewedBy" => GetMessage("reviewedBy"),
                "seller" => GetMessage("seller"),
            ),
        ),
	)
);


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


//START WORKS_FOR
if (!empty($arCurrentValues['WORKSFORNAME']))
{
    $arComponentParameters["PARAMETERS"]["WORKSFOR_TYPE_2"] = Array(
        "PARENT" => "WORKSFOR_PARAMS",
        "NAME" => GetMessage("WORKSFOR_PARAMS"),
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
    $arComponentParameters["PARAMETERS"]["WORKSFOR_DESCRIPTION"] = Array(
        "PARENT" => "WORKSFOR_PARAMS",
        "NAME" => GetMessage("WORKSFOR_DESCRIPTION"),
        "TYPE" => "STRING",
        "ROWS" => 5,
        "COLS" => "50",
    );
    $arComponentParameters["PARAMETERS"]["WORKSFOR_SITE"] = Array(
        "PARENT" => "WORKSFOR_PARAMS",
        "NAME" => GetMessage("WORKSFOR_SITE"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["WORKSFOR_PHONE"] = Array(
        "PARENT" => "WORKSFOR_PARAMS",
        "NAME" => GetMessage("WORKSFOR_PHONE"),
        "TYPE" => "STRING",
        "MULTIPLE" =>"Y",
    );
    $arComponentParameters["PARAMETERS"]["WORKSFOR_POST_CODE"] = Array(
        "PARENT" => "WORKSFOR_PARAMS",
        "NAME" => GetMessage("WORKSFOR_POST_CODE"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["WORKSFOR_COUNTRY"] = Array(
        "PARENT" => "WORKSFOR_PARAMS",
        "NAME" => GetMessage("WORKSFOR_COUNTRY"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["WORKSFOR_REGION"] = Array(
        "PARENT" => "WORKSFOR_PARAMS",
        "NAME" => GetMessage("WORKSFOR_REGION"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["WORKSFOR_LOCALITY"] = Array(
        "PARENT" => "WORKSFOR_PARAMS",
        "NAME" => GetMessage("WORKSFOR_LOCALITY"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["WORKSFOR_ADDRESS"] = Array(
        "PARENT" => "WORKSFOR_PARAMS",
        "NAME" => GetMessage("WORKSFOR_ADDRESS"),
        "TYPE" => "STRING",
    );
}

//START WorksFor TYPE_3 level
if ($arCurrentValues["WORKSFOR_TYPE_2"] == "EducationalOrganization")
{
    $arComponentParameters["PARAMETERS"]["WORKSFOR_TYPE_3"] = Array(
        "PARENT" => "WORKSFOR_PARAMS",
        "NAME" => GetMessage("PARAM_TYPE"),
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
if ($arCurrentValues["WORKSFOR_TYPE_2"] == "LocalBusiness")
{
    $arComponentParameters["PARAMETERS"]["WORKSFOR_TYPE_3"] = Array(
        "PARENT" => "WORKSFOR_PARAMS",
        "NAME" => GetMessage("PARAM_TYPE"),
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
if ($arCurrentValues["WORKSFOR_TYPE_2"] == "PerformingGroup")
{
    $arComponentParameters["PARAMETERS"]["WORKSFOR_TYPE_3"] = Array(
        "PARENT" => "WORKSFOR_PARAMS",
        "NAME" => GetMessage("PARAM_TYPE"),
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
if ($arCurrentValues["WORKSFOR_TYPE_2"] == "SportsOrganization")
{
    $arComponentParameters["PARAMETERS"]["WORKSFOR_TYPE_3"] = Array(
        "PARENT" => "WORKSFOR_PARAMS",
        "NAME" => GetMessage("PARAM_TYPE"),
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
if ($arCurrentValues["WORKSFOR_TYPE_3"] == "AutomotiveBusiness")
{
    $arComponentParameters["PARAMETERS"]["WORKSFOR_TYPE_4"] = Array(
        "PARENT" => "WORKSFOR_PARAMS",
        "NAME" => GetMessage("PARAM_TYPE"),
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
if ($arCurrentValues["WORKSFOR_TYPE_3"] == "EmergencyService")
{
    $arComponentParameters["PARAMETERS"]["WORKSFOR_TYPE_4"] = Array(
        "PARENT" => "WORKSFOR_PARAMS",
        "NAME" => GetMessage("PARAM_TYPE"),
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
if ($arCurrentValues["WORKSFOR_TYPE_3"] == "EntertainmentBusiness")
{
    $arComponentParameters["PARAMETERS"]["WORKSFOR_TYPE_4"] = Array(
        "PARENT" => "WORKSFOR_PARAMS",
        "NAME" => GetMessage("PARAM_TYPE"),
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
if ($arCurrentValues["WORKSFOR_TYPE_3"] == "FinancialService")
{
    $arComponentParameters["PARAMETERS"]["WORKSFOR_TYPE_4"] = Array(
        "PARENT" => "WORKSFOR_PARAMS",
        "NAME" => GetMessage("PARAM_TYPE"),
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
if ($arCurrentValues["WORKSFOR_TYPE_3"] == "FoodEstablishment")
{
    $arComponentParameters["PARAMETERS"]["WORKSFOR_TYPE_4"] = Array(
        "PARENT" => "WORKSFOR_PARAMS",
        "NAME" => GetMessage("PARAM_TYPE"),
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
if ($arCurrentValues["WORKSFOR_TYPE_3"] == "GovernmentOffice")
{
    $arComponentParameters["PARAMETERS"]["WORKSFOR_TYPE_4"] = Array(
        "PARENT" => "WORKSFOR_PARAMS",
        "NAME" => GetMessage("PARAM_TYPE"),
        "TYPE" => "LIST",
        "REFRESH" => "Y",
        "SORT" => 50,
        "VALUES" => array(
            "" => GetMessage("TYPE_EMPTY"),
            "PostOffice" => GetMessage("TYPE_PostOffice"),
        ),
    );
}
if ($arCurrentValues["WORKSFOR_TYPE_3"] == "HealthAndBeautyBusiness")
{
    $arComponentParameters["PARAMETERS"]["WORKSFOR_TYPE_4"] = Array(
        "PARENT" => "WORKSFOR_PARAMS",
        "NAME" => GetMessage("PARAM_TYPE"),
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
if ($arCurrentValues["WORKSFOR_TYPE_3"] == "HomeAndConstructionBusiness")
{
    $arComponentParameters["PARAMETERS"]["WORKSFOR_TYPE_4"] = Array(
        "PARENT" => "WORKSFOR_PARAMS",
        "NAME" => GetMessage("PARAM_TYPE"),
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
if ($arCurrentValues["WORKSFOR_TYPE_3"] == "LodgingBusiness")
{
    $arComponentParameters["PARAMETERS"]["WORKSFOR_TYPE_4"] = Array(
        "PARENT" => "WORKSFOR_PARAMS",
        "NAME" => GetMessage("PARAM_TYPE"),
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
if ($arCurrentValues["WORKSFOR_TYPE_3"] == "MedicalOrganization")
{
    $arComponentParameters["PARAMETERS"]["WORKSFOR_TYPE_4"] = Array(
        "PARENT" => "WORKSFOR_PARAMS",
        "NAME" => GetMessage("PARAM_TYPE"),
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
if ($arCurrentValues["WORKSFOR_TYPE_3"] == "ProfessionalService")
{
    $arComponentParameters["PARAMETERS"]["WORKSFOR_TYPE_4"] = Array(
        "PARENT" => "WORKSFOR_PARAMS",
        "NAME" => GetMessage("PARAM_TYPE"),
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
if ($arCurrentValues["WORKSFOR_TYPE_3"] == "Store")
{
    $arComponentParameters["PARAMETERS"]["WORKSFOR_TYPE_4"] = Array(
        "PARENT" => "WORKSFOR_PARAMS",
        "NAME" => GetMessage("PARAM_TYPE"),
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
if ($arCurrentValues["WORKSFOR_TYPE_3"] == "SportsActivityLocation")
{
    $arComponentParameters["PARAMETERS"]["WORKSFOR_TYPE_4"] = Array(
        "PARENT" => "WORKSFOR_PARAMS",
        "NAME" => GetMessage("PARAM_TYPE"),
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
//END WORKS_FOR

