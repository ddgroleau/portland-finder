<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations = [
            [
                'name' => "Casco Bay Island Transit Distr",
                'street_address' => "P O Box 4656",
                'city' => "Portland",
                'state' => "ME",
                'zip_code' => "04112",
                'phone_number' => "2077747871",
                'latitude' => 43.64553,
                'longitude' => -70.25841,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Back Bay Superette - Portland",
                'street_address' => "1037 Forest Ave",
                'city' => "Portland",
                'state' => "ME",
                'zip_code' => "04103",
                'phone_number' => "2077475754",
                'latitude' => 43.6831,
                'longitude' => -70.28993,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Cumberland Farms #5570",
                'street_address' => "1136 Forest Avenue",
                'city' => "Portland",
                'state' => "ME",
                'zip_code' => "04103",
                'phone_number' => "2077979927",
                'latitude' => 43.67543,
                'longitude' => -70.28616,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Cumberland Farms #5575",
                'street_address' => "49 Pine Street",
                'city' => "Portland",
                'state' => "ME",
                'zip_code' => "04102",
                'phone_number' => "2078749528",
                'latitude' => 43.65141,
                'longitude' => -70.26863,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Cumberland Farms #5604",
                'street_address' => "801 Washington Ave.",
                'city' => "Portland",
                'state' => "ME",
                'zip_code' => "04103",
                'phone_number' => "2077808032",
                'latitude' => 43.68641,
                'longitude' => -70.26829,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Cumberland Farms #5613",
                'street_address' => "512 Woodfords Street",
                'city' => "Portland",
                'state' => "ME",
                'zip_code' => "04103",
                'phone_number' => "2077737792",
                'latitude' => 43.6689154,
                'longitude' => -70.3014708,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "CVS Pharmacy #374",
                'street_address' => "449 Forest Avenue",
                'city' => "Portland",
                'state' => "ME",
                'zip_code' => "04101",
                'phone_number' => "2077721928",
                'latitude' => 43.6666744,
                'longitude' => -70.27627,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "CVS Pharmacy #804",
                'street_address' => "1406 Congress Street",
                'city' => "Portland",
                'state' => "ME",
                'zip_code' => "04102",
                'phone_number' => "2077743636",
                'latitude' => 43.6539995,
                'longitude' => -70.2731447,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "CVS Pharmacy #329",
                'street_address' => "111 Auburn Street",
                'city' => "Portland",
                'state' => "ME",
                'zip_code' => "04103",
                'phone_number' => "2077973393",
                'latitude' => 43.7039889,
                'longitude' => -70.2887601,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "CVS Pharmacy #454",
                'street_address' => "510 Congress Street",
                'city' => "Portland",
                'state' => "ME",
                'zip_code' => "04101",
                'phone_number' => "2077744525",
                'latitude' => 43.6558846,
                'longitude' => -70.260373,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Eldredge Lumber & Hardware",
                'street_address' => "145 Presumpscot Street",
                'city' => "Portland",
                'state' => "ME",
                'zip_code' => "04103",
                'phone_number' => "2077703004",
                'latitude' => 43.6873147,
                'longitude' => -70.2580553,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Hannaford Supermarket #8222",
                'street_address' => "65 Gray Road",
                'city' => "Falmouth",
                'state' => "ME",
                'zip_code' => "04105",
                'phone_number' => "2078780050",
                'latitude' => 43.7341912,
                'longitude' => -70.294434,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Hannaford Supermarket #8223",
                'street_address' => "7 Hannaford Drive",
                'city' => "Westbrook",
                'state' => "ME",
                'zip_code' => "04092",
                'phone_number' => "2078544631",
                'latitude' => 43.675986,
                'longitude' => -70.3551445,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Hannaford Supermarket #8279",
                'street_address' => "50 Cottage Road",
                'city' => "South Portland",
                'state' => "ME",
                'zip_code' => "04106",
                'phone_number' => "2077997359",
                'latitude' => 43.6378509,
                'longitude' => -70.2504693,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Hannaford Supermarket #8351",
                'street_address' => "295 Forest Avenue",
                'city' => "Portland",
                'state' => "ME",
                'zip_code' => "04101",
                'phone_number' => "2077915965",
                'latitude' => 43.6639522,
                'longitude' => -70.2681516,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Hannaford Supermarket #8354",
                'street_address' => "787 Riverside Street",
                'city' => "Portland",
                'state' => "ME",
                'zip_code' => "04103",
                'phone_number' => "2078780191",
                'latitude' => 43.7018373,
                'longitude' => -70.3196408,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Hannaford Supermarket #8387",
                'street_address' => "415 Philbrook Avenue",
                'city' => "South Portland",
                'state' => "ME",
                'zip_code' => "04106",
                'phone_number' => "2077612729",
                'latitude' => 43.63458819,
                'longitude' => -70.32838736,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Hannigans Island Market",
                'street_address' => "75 Island Avenue",
                'city' => "Peaks Island",
                'state' => "ME",
                'zip_code' => "04108",
                'phone_number' => "2077662351",
                'latitude' => 43.6567195,
                'longitude' => -70.1979167,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Hilltop Superette Munjoy Hill",
                'street_address' => "135 Congress Street",
                'city' => "Portland",
                'state' => "ME",
                'zip_code' => "04101",
                'phone_number' => "2077738000",
                'latitude' => 43.66562871,
                'longitude' => -70.24848104,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Maine Hardware",
                'street_address' => "274 Saint John Street",
                'city' => "Portland",
                'state' => "ME",
                'zip_code' => "04102",
                'phone_number' => "2077735604",
                'latitude' => 43.65275176,
                'longitude' => -70.28044224,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Market Basket #85",
                'street_address' => "207 Larrabee Road",
                'city' => "Westbrook",
                'state' => "ME",
                'zip_code' => "04092",
                'phone_number' => "2074642100",
                'latitude' => 43.6801791,
                'longitude' => -70.3307264,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Moran's Market",
                'street_address' => "1576 Forest Avenue",
                'city' => "Portland",
                'state' => "ME",
                'zip_code' => "04103",
                'phone_number' => "2077976674",
                'latitude' => 43.6965061,
                'longitude' => -70.3067288,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Portland Food Co-op",
                'street_address' => "290 Congress Street",
                'city' => "Portland",
                'state' => "ME",
                'zip_code' => "04101",
                'phone_number' => "2078051599",
                'latitude' => 43.661034,
                'longitude' => -70.25267601,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Rice Management",
                'street_address' => "657 Congress Street",
                'city' => "Portland",
                'state' => "ME",
                'zip_code' => "04101",
                'phone_number' => "2077731814",
                'latitude' => 43.6533883,
                'longitude' => -70.2657912,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Rosemont Market & Bakery",
                'street_address' => "40 Pine Street",
                'city' => "Portland",
                'state' => "ME",
                'zip_code' => "04102",
                'phone_number' => "2076994181",
                'latitude' => 43.6515624,
                'longitude' => -70.2678051,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Rosemont Market & Bakery",
                'street_address' => "88 Congress Street",
                'city' => "Portland",
                'state' => "ME",
                'zip_code' => "04101",
                'phone_number' => "2077737888",
                'latitude' => 43.6665918,
                'longitude' => -70.24674296,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Rosemont Market & Bakery",
                'street_address' => "580 Brighton Avenue",
                'city' => "Portland",
                'state' => "ME",
                'zip_code' => "04102",
                'phone_number' => "2077748129",
                'latitude' => 43.6686819,
                'longitude' => -70.3022147,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Save A Lot #24022",
                'street_address' => "268 St John Street",
                'city' => "Portland",
                'state' => "ME",
                'zip_code' => "04102",
                'phone_number' => "2077720622",
                'latitude' => 43.6523409,
                'longitude' => -70.2802646,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Shaw's Supermarket #2547",
                'street_address' => "417 Payne Road",
                'city' => "Scarborough",
                'state' => "ME",
                'zip_code' => "04074",
                'phone_number' => "2078832443",
                'latitude' => 43.6200095,
                'longitude' => -70.350367,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Shaw's Supermarket #3544",
                'street_address' => "180 Waterman Drive",
                'city' => "South Portland",
                'state' => "ME",
                'zip_code' => "04106",
                'phone_number' => "2077998149",
                'latitude' => 43.63676622,
                'longitude' => -70.25430679,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Shaw's Supermarket #4543",
                'street_address' => "1364 Congress Street",
                'city' => "Portland",
                'state' => "ME",
                'zip_code' => "04102",
                'phone_number' => "2077747661",
                'latitude' => 43.6575062,
                'longitude' => -70.2977049,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Shaw's Supermarket #4651",
                'street_address' => "251 US Route 1",
                'city' => "Falmouth",
                'state' => "ME",
                'zip_code' => "04105",
                'phone_number' => "2077816581",
                'latitude' => 43.7236749,
                'longitude' => -70.2300094,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Shaw's Supermarket #467",
                'street_address' => "91 Auburn Street",
                'city' => "Portland",
                'state' => "ME",
                'zip_code' => "04103",
                'phone_number' => "2077974304",
                'latitude' => 43.7024145,
                'longitude' => -70.2880275,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Shaw's Supermarket #473",
                'street_address' => "31 Main Street",
                'city' => "Westbrook",
                'state' => "ME",
                'zip_code' => "04092",
                'phone_number' => "2078579229",
                'latitude' => 43.6794142,
                'longitude' => -70.3308992,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Walgreens #19464",
                'street_address' => "290 Congress Street",
                'city' => "Portland",
                'state' => "ME",
                'zip_code' => "04101",
                'phone_number' => "2077740344",
                'latitude' => 43.66114,
                'longitude' => -70.252346,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => "Whole Foods Market",
                'street_address' => "2 Somerset Street",
                'city' => "Portland",
                'state' => "ME",
                'zip_code' => "04101",
                'phone_number' => "2077747711",
                'latitude' => 43.663298,
                'longitude' => -70.258754,
                'created_at' => now(),
                'updated_at' => now(),
            ]];

        DB::table('locations')->insert($locations);
    }
}
