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
        "RATING_PARAMS" => array(
            "SORT" => 120,
            "NAME" => GetMessage("RATING_PARAMS"),
        ),
		"PARAMETERS_ITEMREVIEWED" => array(
			"SORT" => 900,
			"NAME" => GetMessage("PARAMETERS_ITEMREVIEWED"),
		),
        "ITEMREVIEWED_MAIN_PARAMS" => array(
            "SORT" => 900,
            "NAME" => GetMessage("CAR_MAIN_PARAMS"),
        ),
        "ITEMREVIEWED_YANDEX_PARAMS" => array(
            "SORT" => 910,
            "NAME" => GetMessage("YANDEX_PARAMS"),
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
            "SORT" => 500,
            "DEFAULT" => "",
        ),
        "REVIEWBODY" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("reviewBody"),
            "TYPE" => "STRING",
            "DEFAULT" => "",
            "ROWS" => 5,
            "COLS" => "50",
        ),
        "URL" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("URL"),
            "TYPE" => "STRING",
            "SORT" => 500,
            "DEFAULT" => "",
        ),
        "MOBILE_URL" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("MOBILE_URL"),
            "TYPE" => "STRING",
            "SORT" => 500,
            "DEFAULT" => "",
        ),
        "REVIEWS_URL" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("REVIEWS_URL"),
            "TYPE" => "STRING",
            "SORT" => 500,
            "DEFAULT" => "",
            "MULTIPLE" =>"Y",
        ),
        "DATE_PUBLISHED" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("DATE_PUBLISHED"),
            "TYPE" => "STRING",
            "SORT" => 500,
            "DEFAULT" => "",
        ),
        "PRO" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("PRO"),
            "TYPE" => "STRING",
            "SORT" => 500,
            "DEFAULT" => "",
            "MULTIPLE" =>"Y",
        ),
        "CONTRA" => array(
            "PARENT" => "MAIN_PARAMS",
            "NAME" => GetMessage("CONTRA"),
            "TYPE" => "STRING",
            "SORT" => 500,
            "DEFAULT" => "",
            "MULTIPLE" =>"Y",
        ),



        //
		"RATINGVALUE" => array(
			"PARENT" => "RATING_PARAMS",
			"NAME" => GetMessage("ratingValue"),
			"TYPE" => "STRING",
			"SORT" => 500,
			"DEFAULT" => "",
		),
		"BESTRATING" => array(
			"PARENT" => "RATING_PARAMS",
			"NAME" => GetMessage("bestRating"),
			"TYPE" => "STRING",
			"SORT" => 500,
			"DEFAULT" => "5",
		),
		"WORSTRATING" => array(
			"PARENT" => "RATING_PARAMS",
			"NAME" => GetMessage("worstRating"),
			"TYPE" => "STRING",
			"SORT" => 500,
			"DEFAULT" => "1",
		),
	)
);



    $arComponentParameters["PARAMETERS"]["ITEMREVIEWED"] = Array(
        "PARENT" => "MAIN_PARAMS",
        "NAME" => GetMessage("ITEMREVIEWED"),
        "TYPE" => "LIST",
        "VALUES" => array(
            "" => "",
            "OrganizationAndPlace" => GetMessage("OrganizationAndPlace"),
            "Car" => GetMessage("Car"),
        ),
        "REFRESH" => "Y",
    );


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
    $arComponentParameters["PARAMETERS"]["DATE_VISITED"] = Array(
        "PARENT" => "PARAMETERS_ITEMREVIEWED",
        "NAME" => GetMessage("DATE_VISITED"),
        "TYPE" =>"STRING",
    );

}
// END OrganizationAndPlace
// START lvl 2-4 of TYPE Place an Organization

// TYPE LEVEL 2 START
if ($arCurrentValues["ITEMREVIEWED_TYPE"] == "Organization")
{
    $arComponentParameters["PARAMETERS"]["EMAIL"] = Array(
        "PARENT" => "PARAMETERS_ITEMREVIEWED",
        "NAME" => GetMessage("PARAM_EMAIL"),
        "TYPE" =>"STRING",
        "MULTIPLE" =>"Y",
        "SORT" => 500,
    );

    $arComponentParameters["PARAMETERS"]["ITEMREVIEWED_TYPE_2"] = Array(
        "PARENT" => "PARAMETERS_ITEMREVIEWED",
        "NAME" => GetMessage("PARAM_TYPE"),
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

    $arComponentParameters["PARAMETERS"]["TAXID"] = Array(
        "PARENT" => "PARAMETERS_ITEMREVIEWED",
        "NAME" => GetMessage("TAXID"),
        "TYPE" =>"STRING",
        "MULTIPLE" =>"N",
        "SORT" => 500,
    );
}

if ($arCurrentValues["ITEMREVIEWED_TYPE"] == "Place")
{

    $arComponentParameters["PARAMETERS"]["ITEMREVIEWED_TYPE_2"] = Array(
        "PARENT" => "PARAMETERS_ITEMREVIEWED",
        "NAME" => GetMessage("PARAM_TYPE"),
        "TYPE" => "LIST",
        "REFRESH" => "Y",
        "SORT" => 50,
        "VALUES" => array(
            "" => GetMessage("TYPE_EMPTY"),
            "LocalBusiness" => GetMessage("TYPE_BUSINESS"),
            "CivicStructure" => GetMessage("TYPE_CIVICSTRUCTURE"),
            "AdministrativeArea" => GetMessage("TYPE_ADMINISTRATIVEAREA"),
            "Landform" => GetMessage("TYPE_LANDFORM"),
            "Residence" => GetMessage("TYPE_RESIDENCE"),
            "LandmarksOrHistoricalBuildings" => GetMessage("TYPE_LANDMARK"),
            "TouristAttraction" => GetMessage("TYPE_TOURISTATT"),
        ),
    );
}
// TYPE LEVEL 2 END

// TYPE LEVEL 3 START
if ($arCurrentValues["ITEMREVIEWED_TYPE_2"] == "EducationalOrganization")
{
    $arComponentParameters["PARAMETERS"]["ITEMREVIEWED_TYPE_3"] = Array(
        "PARENT" => "PARAMETERS_ITEMREVIEWED",
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
if ($arCurrentValues["ITEMREVIEWED_TYPE_2"] == "LocalBusiness")
{
    $arComponentParameters["PARAMETERS"]["ITEMREVIEWED_TYPE_3"] = Array(
        "PARENT" => "PARAMETERS_ITEMREVIEWED",
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
if ($arCurrentValues["ITEMREVIEWED_TYPE_2"] == "PerformingGroup")
{
    $arComponentParameters["PARAMETERS"]["ITEMREVIEWED_TYPE_3"] = Array(
        "PARENT" => "PARAMETERS_ITEMREVIEWED",
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
if ($arCurrentValues["ITEMREVIEWED_TYPE_2"] == "SportsOrganization")
{
    $arComponentParameters["PARAMETERS"]["ITEMREVIEWED_TYPE_3"] = Array(
        "PARENT" => "PARAMETERS_ITEMREVIEWED",
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
if ($arCurrentValues["ITEMREVIEWED_TYPE_2"] == "CivicStructure")
{
    $arComponentParameters["PARAMETERS"]["ITEMREVIEWED_TYPE_3"] = Array(
        "PARENT" => "PARAMETERS_ITEMREVIEWED",
        "NAME" => GetMessage("PARAM_TYPE"),
        "TYPE" => "LIST",
        "REFRESH" => "Y",
        "SORT" => 50,
        "VALUES" => array(
            "" => GetMessage("TYPE_EMPTY"),
            "Airport" => GetMessage("Airport"),
            "Aquarium" => GetMessage("Aquarium"),
            "Beach" => GetMessage("Beach"),
            "BusStation" => GetMessage("BusStation"),
            "BusStop" => GetMessage("BusStop"),
            "Campground" => GetMessage("Campground"),
            "Cemetery" => GetMessage("Cemetery"),
            "Crematorium" => GetMessage("Crematorium"),
            "EventVenue" => GetMessage("EventVenue"),
            "FireStation" => GetMessage("FireStation"),
            "GovernmentBuilding" => GetMessage("GovernmentBuilding"),
            "Hospital" => GetMessage("Hospital"),
            "MovieTheater" => GetMessage("MovieTheater"),
            "Museum" => GetMessage("Museum"),
            "MusicVenue" => GetMessage("MusicVenue"),
            "Park" => GetMessage("Park"),
            "ParkingFacility" => GetMessage("ParkingFacility"),
            "PerformingArtsTheater" => GetMessage("PerformingArtsTheater"),
            "PlaceOfWorship" => GetMessage("PlaceOfWorship"),
            "Playground" => GetMessage("Playground"),
            "PoliceStation" => GetMessage("PoliceStation"),
            "RVPark" => GetMessage("RVPark"),
            "StadiumOrArena" => GetMessage("StadiumOrArena"),
            "SubwayStation" => GetMessage("SubwayStation"),
            "TaxiStand" => GetMessage("TaxiStand"),
            "TrainStation" => GetMessage("TrainStation"),
            "Zoo" => GetMessage("Zoo"),
        ),
    );
}
if ($arCurrentValues["ITEMREVIEWED_TYPE_2"] == "AdministrativeArea")
{
    $arComponentParameters["PARAMETERS"]["ITEMREVIEWED_TYPE_3"] = Array(
        "PARENT" => "PARAMETERS_ITEMREVIEWED",
        "NAME" => GetMessage("PARAM_TYPE"),
        "TYPE" => "LIST",
        "REFRESH" => "Y",
        "SORT" => 50,
        "VALUES" => array(
            "" => GetMessage("TYPE_EMPTY"),
            "City" => GetMessage("TYPE_CITY"),
            "State" => GetMessage("TYPE_STATE"),
            "Country" => GetMessage("TYPE_COUNTRY"),
        ),
    );
}
if ($arCurrentValues["ITEMREVIEWED_TYPE_2"] == "Landform")
{
    $arComponentParameters["PARAMETERS"]["ITEMREVIEWED_TYPE_3"] = Array(
        "PARENT" => "PARAMETERS_ITEMREVIEWED",
        "NAME" => GetMessage("PARAM_TYPE"),
        "TYPE" => "LIST",
        "REFRESH" => "Y",
        "SORT" => 50,
        "VALUES" => array(
            "" => GetMessage("TYPE_EMPTY"),
            "BodyOfWater" => GetMessage("TYPE_BodyOfWater"),
            "Continent" => GetMessage("TYPE_Continent"),
            "Mountain" => GetMessage("TYPE_Mountain"),
            "Volcano" => GetMessage("TYPE_Volcano"),
        ),
    );
}
if ($arCurrentValues["ITEMREVIEWED_TYPE_2"] == "Residence")
{
    $arComponentParameters["PARAMETERS"]["ITEMREVIEWED_TYPE_3"] = Array(
        "PARENT" => "PARAMETERS_ITEMREVIEWED",
        "NAME" => GetMessage("PARAM_TYPE"),
        "TYPE" => "LIST",
        "REFRESH" => "Y",
        "SORT" => 50,
        "VALUES" => array(
            "" => GetMessage("TYPE_EMPTY"),
            "ApartmentComplex" => GetMessage("TYPE_ApartmentComplex"),
            "GatedResidenceCommunity" => GetMessage("TYPE_GatedResidenceCommunity"),
            "SingleFamilyResidence" => GetMessage("TYPE_SingleFamilyResidence"),
        ),
    );
}
// TYPE LEVEL 3 END

// TYPE LEVEL 4 START
if ($arCurrentValues["ITEMREVIEWED_TYPE_3"] == "AutomotiveBusiness")
{
    $arComponentParameters["PARAMETERS"]["ITEMREVIEWED_TYPE_4"] = Array(
        "PARENT" => "PARAMETERS_ITEMREVIEWED",
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
if ($arCurrentValues["ITEMREVIEWED_TYPE_3"] == "EmergencyService")
{
    $arComponentParameters["PARAMETERS"]["ITEMREVIEWED_TYPE_4"] = Array(
        "PARENT" => "PARAMETERS_ITEMREVIEWED",
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
if ($arCurrentValues["ITEMREVIEWED_TYPE_3"] == "EntertainmentBusiness")
{
    $arComponentParameters["PARAMETERS"]["ITEMREVIEWED_TYPE_4"] = Array(
        "PARENT" => "PARAMETERS_ITEMREVIEWED",
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
if ($arCurrentValues["ITEMREVIEWED_TYPE_3"] == "FinancialService")
{
    $arComponentParameters["PARAMETERS"]["ITEMREVIEWED_TYPE_4"] = Array(
        "PARENT" => "PARAMETERS_ITEMREVIEWED",
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
if ($arCurrentValues["ITEMREVIEWED_TYPE_3"] == "FoodEstablishment")
{
    $arComponentParameters["PARAMETERS"]["ITEMREVIEWED_TYPE_4"] = Array(
        "PARENT" => "PARAMETERS_ITEMREVIEWED",
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
if ($arCurrentValues["ITEMREVIEWED_TYPE_3"] == "GovernmentOffice")
{
    $arComponentParameters["PARAMETERS"]["ITEMREVIEWED_TYPE_4"] = Array(
        "PARENT" => "PARAMETERS_ITEMREVIEWED",
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
if ($arCurrentValues["ITEMREVIEWED_TYPE_3"] == "HealthAndBeautyBusiness")
{
    $arComponentParameters["PARAMETERS"]["ITEMREVIEWED_TYPE_4"] = Array(
        "PARENT" => "PARAMETERS_ITEMREVIEWED",
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
if ($arCurrentValues["ITEMREVIEWED_TYPE_3"] == "HomeAndConstructionBusiness")
{
    $arComponentParameters["PARAMETERS"]["ITEMREVIEWED_TYPE_4"] = Array(
        "PARENT" => "PARAMETERS_ITEMREVIEWED",
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
if ($arCurrentValues["ITEMREVIEWED_TYPE_3"] == "LodgingBusiness")
{
    $arComponentParameters["PARAMETERS"]["ITEMREVIEWED_TYPE_4"] = Array(
        "PARENT" => "PARAMETERS_ITEMREVIEWED",
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
if ($arCurrentValues["ITEMREVIEWED_TYPE_3"] == "MedicalOrganization")
{
    $arComponentParameters["PARAMETERS"]["ITEMREVIEWED_TYPE_4"] = Array(
        "PARENT" => "PARAMETERS_ITEMREVIEWED",
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
if ($arCurrentValues["ITEMREVIEWED_TYPE_3"] == "ProfessionalService")
{
    $arComponentParameters["PARAMETERS"]["ITEMREVIEWED_TYPE_4"] = Array(
        "PARENT" => "PARAMETERS_ITEMREVIEWED",
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
if ($arCurrentValues["ITEMREVIEWED_TYPE_3"] == "Store")
{
    $arComponentParameters["PARAMETERS"]["ITEMREVIEWED_TYPE_4"] = Array(
        "PARENT" => "PARAMETERS_ITEMREVIEWED",
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
if ($arCurrentValues["ITEMREVIEWED_TYPE_3"] == "SportsActivityLocation")
{
    $arComponentParameters["PARAMETERS"]["ITEMREVIEWED_TYPE_4"] = Array(
        "PARENT" => "PARAMETERS_ITEMREVIEWED",
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
if ($arCurrentValues["ITEMREVIEWED_TYPE_3"] == "GovernmentBuilding")
{
    $arComponentParameters["PARAMETERS"]["ITEMREVIEWED_TYPE_4"] = Array(
        "PARENT" => "PARAMETERS_ITEMREVIEWED",
        "NAME" => GetMessage("PARAM_TYPE"),
        "TYPE" => "LIST",
        "REFRESH" => "Y",
        "SORT" => 50,
        "VALUES" => array(
            "" => GetMessage("TYPE_EMPTY"),
            "CityHall" => GetMessage("TYPE_CityHall"),
            "Courthouse" => GetMessage("TYPE_Courthouse"),
            "DefenceEstablishment" => GetMessage("TYPE_DefenceEstablishment"),
            "Embassy" => GetMessage("TYPE_Embassy"),
            "LegislativeBuilding" => GetMessage("TYPE_LegislativeBuilding"),
        ),
    );
}
if ($arCurrentValues["ITEMREVIEWED_TYPE_3"] == "PlaceOfWorship")
{
    $arComponentParameters["PARAMETERS"]["ITEMREVIEWED_TYPE_4"] = Array(
        "PARENT" => "PARAMETERS_ITEMREVIEWED",
        "NAME" => GetMessage("PARAM_TYPE"),
        "TYPE" => "LIST",
        "REFRESH" => "Y",
        "SORT" => 50,
        "VALUES" => array(
            "" => GetMessage("TYPE_EMPTY"),
            "BuddhistTemple" => GetMessage("TYPE_BuddhistTemple"),
            "CatholicChurch" => GetMessage("TYPE_CatholicChurch"),
            "Church" => GetMessage("TYPE_Church"),
            "HinduTemple" => GetMessage("TYPE_HinduTemple"),
            "Mosque" => GetMessage("TYPE_Mosque"),
            "Synagogue" => GetMessage("TYPE_Synagogue"),
        ),
    );
}
if ($arCurrentValues["ITEMREVIEWED_TYPE_3"] == "BodyOfWater")
{
    $arComponentParameters["PARAMETERS"]["ITEMREVIEWED_TYPE_4"] = Array(
        "PARENT" => "PARAMETERS_ITEMREVIEWED",
        "NAME" => GetMessage("PARAM_TYPE"),
        "TYPE" => "LIST",
        "REFRESH" => "Y",
        "SORT" => 50,
        "VALUES" => array(
            "" => GetMessage("TYPE_EMPTY"),
            "Canal" => GetMessage("TYPE_Canal"),
            "LakeBodyOfWater" => GetMessage("TYPE_LakeBodyOfWater"),
            "OceanBodyOfWater" => GetMessage("TYPE_OceanBodyOfWater"),
            "Pond" => GetMessage("TYPE_Pond"),
            "Reservoir" => GetMessage("TYPE_Reservoir"),
            "RiverBodyOfWater" => GetMessage("TYPE_RiverBodyOfWater"),
            "SeaBodyOfWater" => GetMessage("TYPE_SeaBodyOfWater"),
            "Waterfall" => GetMessage("TYPE_Waterfall"),
        ),
    );
}
// END lvl 2-4 of TYPE Place an Organization
if ($arCurrentValues["ITEMREVIEWED_TYPE_2"] == "CivicStructure" or $arCurrentValues["ITEMREVIEWED_TYPE_2"] == "LocalBusiness")
{
    $arComponentParameters["PARAMETERS"]["OPENING_HOURS_ROBOT"] = Array(
        "PARENT" => "PARAMETERS_ITEMREVIEWED",
        "NAME" => GetMessage("OPENING_HOURS_ROBOT"),
        "TYPE" =>"STRING",
        "SORT" => 500,
        "MULTIPLE" =>"Y",
        "DEFAULT" => array(
            0 => GetMessage("OPENING_HOURS_ROBOT_EXAMPLE_1"),
            1 => GetMessage("OPENING_HOURS_ROBOT_EXAMPLE_2"),
        ),
    );
    $arComponentParameters["PARAMETERS"]["OPENING_HOURS_HUMAN"] = Array(
        "PARENT" => "PARAMETERS_ITEMREVIEWED",
        "NAME" => GetMessage("OPENING_HOURS_HUMAN"),
        "TYPE" =>"STRING",
        "SORT" => 500,
        "MULTIPLE" =>"Y",
        "DEFAULT" => array(
            0 => GetMessage("OPENING_HOURS_HUMAN_EXAMPLE_1"),
            1 => GetMessage("OPENING_HOURS_HUMAN_EXAMPLE_2"),
        ),
    );
}

if ($arCurrentValues["ITEMREVIEWED_TYPE_2"] == "CivicStructure" or $arCurrentValues["ITEMREVIEWED_TYPE_2"] == "LocalBusiness")
{
    $arComponentParameters["PARAMETERS"]["LATITUDE"] = Array(
        "PARENT" => "PARAMETERS_ITEMREVIEWED",
        "NAME" => GetMessage("LATITUDE"),
        "TYPE" =>"STRING",
        "SORT" => 500,
        "MULTIPLE" =>"N",
    );
    $arComponentParameters["PARAMETERS"]["LONGITUDE"] = Array(
        "PARENT" => "PARAMETERS_ITEMREVIEWED",
        "NAME" => GetMessage("LONGITUDE"),
        "TYPE" =>"STRING",
        "SORT" => 500,
        "MULTIPLE" =>"N",
    );
}
// END OrganizationAndPlace

// START Car
if ($arCurrentValues["ITEMREVIEWED"] == "Car")
{
    $arComponentParameters["PARAMETERS"]["CAR_BRAND_NAME"] = Array(
        "PARENT" => "ITEMREVIEWED_MAIN_PARAMS",
        "NAME" => GetMessage("CAR_BRAND_NAME"),
        "TYPE" =>"STRING",
    );
    $arComponentParameters["PARAMETERS"]["CAR_MODEL"] = Array(
        "PARENT" => "ITEMREVIEWED_MAIN_PARAMS",
        "NAME" => GetMessage("CAR_MODEL"),
        "TYPE" =>"STRING",
    );
    $arComponentParameters["PARAMETERS"]["CAR_URL"] = Array(
        "PARENT" => "ITEMREVIEWED_MAIN_PARAMS",
        "NAME" => GetMessage("CAR_URL"),
        "TYPE" =>"STRING",
    );

    $arComponentParameters["PARAMETERS"]["PRODYEAR"] = Array(
        "PARENT" => "ITEMREVIEWED_YANDEX_PARAMS",
        "NAME" => GetMessage("PRODYEAR"),
        "TYPE" =>"STRING",
    );
    $arComponentParameters["PARAMETERS"]["DATAPURCHASED"] = Array(
        "PARENT" => "ITEMREVIEWED_YANDEX_PARAMS",
        "NAME" => GetMessage("datePurchased"),
        "TYPE" =>"STRING",
    );
    $arComponentParameters["PARAMETERS"]["BODYTYPE"] = Array(
        "PARENT" => "ITEMREVIEWED_YANDEX_PARAMS",
        "NAME" => GetMessage("bodyType"),
        "TYPE" =>"STRING",
    );
    $arComponentParameters["PARAMETERS"]["DISPLACEMENT"] = Array(
        "PARENT" => "ITEMREVIEWED_YANDEX_PARAMS",
        "NAME" => GetMessage("displacement"),
        "TYPE" =>"STRING",
    );
    $arComponentParameters["PARAMETERS"]["ENGINTYPE"] = Array(
        "PARENT" => "ITEMREVIEWED_YANDEX_PARAMS",
        "NAME" => GetMessage("engineType"),
        "TYPE" =>"STRING",
    );
    $arComponentParameters["PARAMETERS"]["GEARTYPE"] = Array(
        "PARENT" => "ITEMREVIEWED_YANDEX_PARAMS",
        "NAME" => GetMessage("gearType"),
        "TYPE" =>"STRING",
    );
    $arComponentParameters["PARAMETERS"]["TRANSMISSION"] = Array(
        "PARENT" => "ITEMREVIEWED_YANDEX_PARAMS",
        "NAME" => GetMessage("transmission"),
        "TYPE" =>"STRING",
    );
    $arComponentParameters["PARAMETERS"]["STEERINGWHEEL"] = Array(
        "PARENT" => "ITEMREVIEWED_YANDEX_PARAMS",
        "NAME" => GetMessage("steeringWheel"),
        "TYPE" =>"STRING",
    );
    $arComponentParameters["PARAMETERS"]["HORSEPOWER"] = Array(
        "PARENT" => "ITEMREVIEWED_YANDEX_PARAMS",
        "NAME" => GetMessage("horsePower"),
        "TYPE" =>"STRING",
    );
    $arComponentParameters["PARAMETERS"]["RUN"] = Array(
        "PARENT" => "ITEMREVIEWED_YANDEX_PARAMS",
        "NAME" => GetMessage("run"),
        "TYPE" =>"STRING",
    );
    $arComponentParameters["PARAMETERS"]["RUNMETRIC"] = Array(
        "PARENT" => "ITEMREVIEWED_YANDEX_PARAMS",
        "NAME" => GetMessage("runMetric"),
        "TYPE" =>"STRING",
    );
    $arComponentParameters["PARAMETERS"]["CONFIGURATIONNAME"] = Array(
        "PARENT" => "ITEMREVIEWED_YANDEX_PARAMS",
        "NAME" => GetMessage("configurationName"),
        "TYPE" =>"STRING",
    );
}
// END Car
// END ITEMREVIEWED




//START AUTHOR_TYPE_Person
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

//END AUTHOR_TYPE_Person
