<?php

/**
 * @package NapMaker
 */

class CustomSettingsController 
{
    public $custom_fields = array();
    public $admin_page;
    public $business_types = array();
    public $social = array();

    public function __construct()
    {
        /**
         * @var
         * Key value pairs for all input field settings
         * Every pair entry generates input field with matching setting
         */ 

        $this->custom_fields = array(
            'name'              => 'Name of Business',
            'url'               => 'URL',
            'image'             => 'Image URL',
            'telephone'         => 'Phone',
            'street_address'    => 'Street Address',
            'address_locality'  => 'Address Locality (City)',
            'address_region'    => 'Region (State)',
            'postal_code'       => 'Postal Code',
            'country'           => 'Country',
            'lat'               => 'Latitude',
            'long'              => 'Longitude',
            'opening_hours'     => 'Opening Hours (formatted)',
        );

        // Create social input fields for schema
        $this->social = array(
            'facebook'          => 'Facebook URL',
            'twitter'           => 'Twitter URL',
            'google'            => 'Google+ URL',
            'linkedin'          => 'Linkedin URL',
            'youtube'           => 'Youtube URL',
            'instagram'         => 'Instagram URL',
            'pinterest'         => 'Pinterest URL',
            'tumblr'            => 'Tumblr URL'
        );


        // The admin page slug
        $this->admin_page = 'nap_schema';

        // Types of businesses for dropdown
        $this->business_types = array(
            'AnimalShelter',
            'AutomotiveBusiness',
            'AutoBodyShop',
            'AutoDealer',
            'AutoPartsStore',
            'AutoRental',
            'AutoRepair',
            'AutoWash',
            'GasStation',
            'MotorcycleDealer',
            'MotorcycleRepair',
            'ChildCare',
            'DryCleaningOrLaundry',
            'EmergencyService',
            'EmploymentAgency',
            'EntertainmentBusiness',
            'AdultEntertainment',
            'AmusementPark',
            'ArtGallery',
            'Casino',
            'ComedyClub',
            'MovieTheater',
            'NightClub',
            'FinancialService',
            'AccountingService',
            'AutomatedTeller',
            'BankOrCreditUnion',
            'InsuranceAgency',
            'FoodEstablishment',
            'Bakery',
            'BarOrPub',
            'Brewery',
            'CafeOrCoffeeShop',
            'FastFoodRestaurant',
            'IceCreamShop',
            'Restaurant',
            'Winery',
            'GovernmentOffice',
            'HealthAndBeautyBusiness',
            'BeautySalon',
            'DaySpa',
            'HairSalon',
            'HealthClub',
            'NailSalon',
            'TattooParlor',
            'HomeAndConstructionBusiness',
            'Electrician',
            'GeneralContractor',
            'HVACBusiness',
            'HousePainter',
            'Locksmith',
            'MovingCompany',
            'Plumber',
            'RoofingContractor',
            'InternetCafe',
            'LegalService',
            'Attorney',
            'Notary',
            'Library',
            'MedicalBusiness',
            'CommunityHealth',
            'Dentist',
            'Dermatology',
            'DietNutrition',
            'Emergency',
            'Geriatric',
            'Gynecologic',
            'MedicalClinic',
            'Midwifery',
            'Nursing',
            'Obstetric',
            'Oncologic',
            'Optician',
            'Optometric',
            'Otolaryngologic',
            'Pediatric',
            'Pharmacy',
            'Physician',
            'Physiotherapy',
            'PlasticSurgery',
            'Podiatric',
            'PrimaryCare',
            'Psychiatric',
            'PublicHealth',
            'LodgingBusiness',
            'BedAndBreakfast',
            'Campground',
            'Hostel',
            'Hotel',
            'Motel',
            'Resort',
            'ProfessionalService',
            'RadioStation',
            'RealEstateAgent',
            'RecyclingCenter',
            'SelfStorage',
            'ShoppingCenter',
            'SportsActivityLocation',
            'BowlingAlley',
            'ExerciseGym',
            'GolfCourse',
            'HealthClub',
            'PublicSwimmingPool',
            'SkiResort',
            'SportsClub',
            'StadiumOrArena',
            'TennisComplex',
            'Store',
            'BikeStore',
            'BookStore',
            'ClothingStore',
            'ComputerStore',
            'ConvenienceStore',
            'DepartmentStore',
            'ElectronicsStore',
            'Florist',
            'FurnitureStore',
            'GardenStore',
            'GroceryStore',
            'HardwareStore',
            'HobbyShop',
            'HomeGoodsStore',
            'JewelryStore',
            'LiquorStore',
            'MensClothingStore',
            'MobilePhoneStore',
            'MovieRentalStore',
            'MusicStore',
            'OfficeEquipmentStore',
            'OutletStore',
            'PawnShop',
            'PetStore',
            'ShoeStore',
            'SportingGoodsStore',
            'TireShop',
            'ToyStore',
            'WholesaleStore',
            'TelevisionStation',
            'TouristInformationCenter',
            'TravelAgency'
        );

    }
}