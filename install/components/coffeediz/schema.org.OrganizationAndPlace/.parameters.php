<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentParameters = array(
	"GROUPS" => array(
		"MAIN" => array(
			"SORT" => 110,
			"NAME" => GetMessage("MAIN_PARAMS"),
		),
		"PARAMETERS" => array(
			"SORT" => 120,
			"NAME" => GetMessage("PARAMETERS_PARAMS"),
		),
        "LOGO_PARAMS" => array(
            "SORT" => 120,
            "NAME" => GetMessage("LOGO_PARAMS"),
        ),
        "IMG_PARAMS" => array(
            "SORT" => 120,
            "NAME" => GetMessage("IMG_PARAMS"),
        ),
		"RATING" => array(
			"SORT" => 800,
			"NAME" => GetMessage("RATING"),
		),
	),
	"PARAMETERS"  =>  array(
		"SHOW" => array(
			"PARENT" => "ADDITIONAL_SETTINGS",
			"NAME" => GetMessage("PARAM_SHOW"),
			"TYPE" => "CHECKBOX",
		),
		"TYPE" => array(
			"PARENT" => "MAIN",
			"NAME" => GetMessage("PARAM_TYPE"),
			"TYPE" => "LIST",
			"REFRESH" => "Y",
			"SORT" => 50,
			"VALUES" => array(
				"Organization" => GetMessage("PARAM_TYPE_ORGANIZATION"), 
				"Place" => GetMessage("PARAM_TYPE_PLACE")
			)
		),
		"NAME" => array(
			"PARENT" => "PARAMETERS",
			"NAME" => GetMessage("PARAM_NAME"),
			"TYPE" => "STRING",
			"SORT" => 500,
		),
		"POST_CODE" => array(
			"PARENT" => "PARAMETERS",
			"NAME" => GetMessage("PARAM_POST_CODE"),
			"TYPE" => "STRING",
			"SORT" => 500,
		),
		"COUNTRY" => array(
			"PARENT" => "PARAMETERS",
			"NAME" => GetMessage("PARAM_COUNTRY"),
			"TYPE" => "STRING",
			"SORT" => 500,
		),
		"REGION" => array(
			"PARENT" => "PARAMETERS",
			"NAME" => GetMessage("PARAM_REGION"),
			"TYPE" => "STRING",
		),
		"LOCALITY" => array(
			"PARENT" => "PARAMETERS",
			"NAME" => GetMessage("PARAM_LOCALITY"),
			"TYPE" => "STRING",
		),
		"ADDRESS" => array(
			"PARENT" => "PARAMETERS",
			"NAME" => GetMessage("PARAM_ADDRESS"),
			"TYPE" => "STRING",
		),
		"PHONE" => Array(
			"PARENT" => "PARAMETERS",
			"NAME" => GetMessage("PARAM_PHONE"),
			"TYPE" =>"STRING",
			"MULTIPLE" =>"Y",
		),
		"FAX" => Array(
			"PARENT" => "PARAMETERS",
			"NAME" => GetMessage("PARAM_FAX"),
			"TYPE" =>"STRING",
		),
		"SITE" => Array(
			"PARENT" => "PARAMETERS",
			"NAME" => GetMessage("PARAM_SITE"),
			"TYPE" =>"STRING",
		),
		"LOGO" => Array(
			"PARENT" => "PARAMETERS",
			"NAME" => GetMessage("LOGO"),
			"TYPE" =>"STRING",
            "REFRESH" => "Y",
		),
		"DESCRIPTION" => Array(
			"PARENT" => "PARAMETERS",
			"NAME" => GetMessage("DESCRIPTION"),
			"TYPE" =>"SRTING",
			"ROWS" => 5,
			"COLS" => "50",
		),
		"PARAM_RATING_SHOW" => array(
			"PARENT" => "PARAMETERS",
			"NAME" => GetMessage("PARAM_RATING_SHOW"),
			"TYPE" => "CHECKBOX",
			"REFRESH" => "Y",
		),
		"ITEMPROP" => array(
			"PARENT" => "PARAMETERS",
			"NAME" => GetMessage("itemprop"),
			"TYPE" => "LIST",
			"VALUES" => array(
				"" => "", 
				"itemReviewed" => GetMessage("ITEMPROP_itemReviewed")
			)
		),
	)
);

// TYPE LEVEL 2 START
if ($arCurrentValues["TYPE"] == "Organization")
{
	$arComponentParameters["PARAMETERS"]["EMAIL"] = Array(
		"PARENT" => "ADDITIONAL_SETTINGS",
		"NAME" => GetMessage("PARAM_EMAIL"),
		"TYPE" =>"STRING",
		"MULTIPLE" =>"Y",
		"SORT" => 500,
	);

	$arComponentParameters["PARAMETERS"]["TYPE_2"] = Array(
		"PARENT" => "MAIN",
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
		"PARENT" => "ADDITIONAL_SETTINGS",
		"NAME" => GetMessage("TAXID"),
		"TYPE" =>"STRING",
		"MULTIPLE" =>"N",
		"SORT" => 500,
	);
}

if ($arCurrentValues["TYPE"] == "Place")
{

	$arComponentParameters["PARAMETERS"]["TYPE_2"] = Array(
		"PARENT" => "MAIN",
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
if ($arCurrentValues["TYPE_2"] == "EducationalOrganization")
{
	$arComponentParameters["PARAMETERS"]["TYPE_3"] = Array(
		"PARENT" => "MAIN",
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
if ($arCurrentValues["TYPE_2"] == "LocalBusiness")
{
	$arComponentParameters["PARAMETERS"]["TYPE_3"] = Array(
		"PARENT" => "MAIN",
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
if ($arCurrentValues["TYPE_2"] == "PerformingGroup")
{
	$arComponentParameters["PARAMETERS"]["TYPE_3"] = Array(
		"PARENT" => "MAIN",
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
if ($arCurrentValues["TYPE_2"] == "SportsOrganization")
{
	$arComponentParameters["PARAMETERS"]["TYPE_3"] = Array(
		"PARENT" => "MAIN",
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
if ($arCurrentValues["TYPE_2"] == "CivicStructure")
{
	$arComponentParameters["PARAMETERS"]["TYPE_3"] = Array(
		"PARENT" => "MAIN",
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
if ($arCurrentValues["TYPE_2"] == "AdministrativeArea")
{
	$arComponentParameters["PARAMETERS"]["TYPE_3"] = Array(
		"PARENT" => "MAIN",
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
if ($arCurrentValues["TYPE_2"] == "Landform")
{
	$arComponentParameters["PARAMETERS"]["TYPE_3"] = Array(
		"PARENT" => "MAIN",
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
if ($arCurrentValues["TYPE_2"] == "Residence")
{
	$arComponentParameters["PARAMETERS"]["TYPE_3"] = Array(
		"PARENT" => "MAIN",
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
if ($arCurrentValues["TYPE_3"] == "AutomotiveBusiness")
{
	$arComponentParameters["PARAMETERS"]["TYPE_4"] = Array(
		"PARENT" => "MAIN",
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
if ($arCurrentValues["TYPE_3"] == "EmergencyService")
{
	$arComponentParameters["PARAMETERS"]["TYPE_4"] = Array(
		"PARENT" => "MAIN",
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
if ($arCurrentValues["TYPE_3"] == "EntertainmentBusiness")
{
	$arComponentParameters["PARAMETERS"]["TYPE_4"] = Array(
		"PARENT" => "MAIN",
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
if ($arCurrentValues["TYPE_3"] == "FinancialService")
{
	$arComponentParameters["PARAMETERS"]["TYPE_4"] = Array(
		"PARENT" => "MAIN",
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
if ($arCurrentValues["TYPE_3"] == "FoodEstablishment")
{
	$arComponentParameters["PARAMETERS"]["TYPE_4"] = Array(
		"PARENT" => "MAIN",
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
if ($arCurrentValues["TYPE_3"] == "GovernmentOffice")
{
	$arComponentParameters["PARAMETERS"]["TYPE_4"] = Array(
		"PARENT" => "MAIN",
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
if ($arCurrentValues["TYPE_3"] == "HealthAndBeautyBusiness")
{
	$arComponentParameters["PARAMETERS"]["TYPE_4"] = Array(
		"PARENT" => "MAIN",
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
if ($arCurrentValues["TYPE_3"] == "HomeAndConstructionBusiness")
{
	$arComponentParameters["PARAMETERS"]["TYPE_4"] = Array(
		"PARENT" => "MAIN",
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
if ($arCurrentValues["TYPE_3"] == "LodgingBusiness")
{
	$arComponentParameters["PARAMETERS"]["TYPE_4"] = Array(
		"PARENT" => "MAIN",
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
if ($arCurrentValues["TYPE_3"] == "MedicalOrganization")
{
	$arComponentParameters["PARAMETERS"]["TYPE_4"] = Array(
		"PARENT" => "MAIN",
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
if ($arCurrentValues["TYPE_3"] == "ProfessionalService")
{
	$arComponentParameters["PARAMETERS"]["TYPE_4"] = Array(
		"PARENT" => "MAIN",
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
if ($arCurrentValues["TYPE_3"] == "Store")
{
	$arComponentParameters["PARAMETERS"]["TYPE_4"] = Array(
		"PARENT" => "MAIN",
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
if ($arCurrentValues["TYPE_3"] == "SportsActivityLocation")
{
	$arComponentParameters["PARAMETERS"]["TYPE_4"] = Array(
		"PARENT" => "MAIN",
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
if ($arCurrentValues["TYPE_3"] == "GovernmentBuilding")
{
	$arComponentParameters["PARAMETERS"]["TYPE_4"] = Array(
		"PARENT" => "MAIN",
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
if ($arCurrentValues["TYPE_3"] == "PlaceOfWorship")
{
	$arComponentParameters["PARAMETERS"]["TYPE_4"] = Array(
		"PARENT" => "MAIN",
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
if ($arCurrentValues["TYPE_3"] == "BodyOfWater")
{
	$arComponentParameters["PARAMETERS"]["TYPE_4"] = Array(
		"PARENT" => "MAIN",
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
if ($arCurrentValues["TYPE_3"] == "")
{

}
if ($arCurrentValues["TYPE_3"] == "")
{

}
if ($arCurrentValues["TYPE_3"] == "")
{

}
if ($arCurrentValues["TYPE_3"] == "")
{

}
if ($arCurrentValues["TYPE_3"] == "")
{

}
if ($arCurrentValues["TYPE_3"] == "")
{

}
if ($arCurrentValues["TYPE_3"] == "")
{

}
if ($arCurrentValues["TYPE_3"] == "")
{

}
if ($arCurrentValues["TYPE_3"] == "")
{

}
// TYPE LEVEL 4 END

if ($arCurrentValues["TYPE_2"] == "CivicStructure" or $arCurrentValues["TYPE_2"] == "LocalBusiness")
{
	$arComponentParameters["PARAMETERS"]["OPENING_HOURS_ROBOT"] = Array(
		"PARENT" => "ADDITIONAL_SETTINGS",
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
		"PARENT" => "ADDITIONAL_SETTINGS",
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

if ($arCurrentValues["TYPE_2"] == "CivicStructure" or $arCurrentValues["TYPE_2"] == "LocalBusiness")
{
	$arComponentParameters["PARAMETERS"]["LATITUDE"] = Array(
		"PARENT" => "ADDITIONAL_SETTINGS",
		"NAME" => GetMessage("LATITUDE"),
		"TYPE" =>"STRING",
		"SORT" => 500,
		"MULTIPLE" =>"N",
	);
	$arComponentParameters["PARAMETERS"]["LONGITUDE"] = Array(
		"PARENT" => "ADDITIONAL_SETTINGS",
		"NAME" => GetMessage("LONGITUDE"),
		"TYPE" =>"STRING",
		"SORT" => 500,
		"MULTIPLE" =>"N",
	);
}



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


//START LOGO DETAIL
if (!empty($arCurrentValues['LOGO']))
{
    $arComponentParameters["PARAMETERS"]["LOGO_NAME"] = Array(
        "PARENT" => "LOGO_PARAMS",
        "NAME" => GetMessage("LOGO_NAME"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["LOGO_CAPTION"] = Array(
        "PARENT" => "LOGO_PARAMS",
        "NAME" => GetMessage("LOGO_CAPTION"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["LOGO_DESCRIPTION"] = Array(
        "PARENT" => "LOGO_PARAMS",
        "NAME" => GetMessage("LOGO_DESCRIPTION"),
        "TYPE" => "STRING",
        "ROWS" => 5,
        "COLS" => "50",
    );
    $arComponentParameters["PARAMETERS"]["LOGO_HEIGHT"] = Array(
        "PARENT" => "LOGO_PARAMS",
        "NAME" => GetMessage("LOGO_HEIGHT"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["LOGO_WIDTH"] = Array(
        "PARENT" => "LOGO_PARAMS",
        "NAME" => GetMessage("LOGO_WIDTH"),
        "TYPE" => "STRING",
    );
    $arComponentParameters["PARAMETERS"]["LOGO_TRUMBNAIL_CONTENTURL"] = Array(
        "PARENT" => "LOGO_PARAMS",
        "NAME" => GetMessage("LOGO_TRUMBNAIL_CONTENTURL"),
        "TYPE" => "STRING",
    );
}
//END LOGO DETAIL



// START Photos
if ($arCurrentValues["TYPE_2"] == "LocalBusiness" or $arCurrentValues["TYPE"] == "Place")
{
    $arComponentParameters["PARAMETERS"]["PHOTO_SRC"] = Array(
        "PARENT" => "IMG_PARAMS",
        "NAME" => GetMessage("PHOTO_SRC"),
        "TYPE" => "STRING",
        "REFRESH" => "Y",
        "MULTIPLE" => "Y",
    );
    if (!empty($arCurrentValues["PHOTO_SRC"]))
    {
        $arComponentParameters["PARAMETERS"]["PHOTO_NAME"] = Array(
            "PARENT" => "IMG_PARAMS",
            "NAME" => GetMessage("PHOTO_NAME"),
            "TYPE" => "STRING",
            "MULTIPLE" => "Y",
        );
        $arComponentParameters["PARAMETERS"]["PHOTO_CAPTION"] = Array(
            "PARENT" => "IMG_PARAMS",
            "NAME" => GetMessage("PHOTO_CAPTION"),
            "TYPE" => "STRING",
            "MULTIPLE" => "Y",
        );
        $arComponentParameters["PARAMETERS"]["PHOTO_DESCRIPTION"] = Array(
            "PARENT" => "IMG_PARAMS",
            "NAME" => GetMessage("PHOTO_DESCRIPTION"),
            "TYPE" => "STRING",
            "MULTIPLE" => "Y",
        );
        $arComponentParameters["PARAMETERS"]["PHOTO_HEIGHT"] = Array(
            "PARENT" => "IMG_PARAMS",
            "NAME" => GetMessage("PHOTO_HEIGHT"),
            "TYPE" => "STRING",
            "MULTIPLE" => "Y",
        );
        $arComponentParameters["PARAMETERS"]["PHOTO_WIDTH"] = Array(
            "PARENT" => "IMG_PARAMS",
            "NAME" => GetMessage("PHOTO_WIDTH"),
            "TYPE" => "STRING",
            "MULTIPLE" => "Y",
        );
        $arComponentParameters["PARAMETERS"]["PHOTO_TRUMBNAIL_CONTENTURL"] = Array(
            "PARENT" => "IMG_PARAMS",
            "NAME" => GetMessage("PHOTO_TRUMBNAIL_CONTENTURL"),
            "TYPE" => "STRING",
            "MULTIPLE" => "Y",
        );
    }
}
// END Photos

