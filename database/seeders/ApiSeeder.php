<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\District;
use App\Models\Province;
use App\Models\Village;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jsonFilePath = __DIR__ . '/location.json';

        // Read JSON file line by line
        $handle = fopen($jsonFilePath, 'r');

        while (($line = fgets($handle)) !== false) {
            $data = json_decode($line, true);

            if (!empty($data)) {
                $this->processData($data);
            }
        }

        fclose($handle);
    }

    /**
     * Process and seed data using batch insertion.
     *
     * @param array $data
     */
    private function processData(array $data): void
    {

        DB::transaction(function () use ($data) {
            $cityId = 0;
            $districtId = 0;
            foreach ($data as $d) {
                $province = Province::create(['name' => $d['name']]);

                $cities = [];
                $districts = [];
                $villages = [];
                foreach ($d as $provinceCode => $provinceData) {

                    if ($provinceCode !== 'name') {
                        foreach ($provinceData as $cityCode => $cityData) {
                            if ($cityCode == 'name') {
                                $cityId++;
                                $city = [];
                                $city['province_id'] = $province->id;
                                $city['name'] = $cityData;
                                $cities[] = $city;
                            }
                            if ($cityCode !== 'name') {
                                foreach ($cityData as $districtCode => $districtData) {
                                    if ($districtCode == 'name') {
                                        $districtId++;
                                        $district = [];
                                        $district['city_id'] = $cityId;
                                        $district['name'] = $districtData;
                                        $districts[] = $district;
                                    }
                                    if ($districtCode !== 'name') {
                                        foreach ($districtData as $villageData) {
                                            $village = [];
                                            $village['district_id'] = $districtId;
                                            $village['name'] = $villageData;
                                            $villages[] = $village;
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
                City::insert($cities);
                District::insert($districts);
                Village::insert($villages);
            }
        });
    }
}
