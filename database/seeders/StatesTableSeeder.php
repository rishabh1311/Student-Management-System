<?php
namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('states')->delete();

        $states = [
            'Andhra Pradesh', 'Arunachal Pradesh', 'Assam', 'Bihar', 'Chattisgarh', 'Goa', 'Gujarat', 'Haryana', 'Himachal Pradesh', 'Jharkhand', 'Karnataka', 'Kerala', 'Madhya Pradesh', 'Maharashtra', 'Manipur', 'Meghalaya', 'Mizoram', 'Nagaland','Orissa', 'Punjab', 'Rajasthan', 'Sikkim', 'Tamil Nadu', 'Telengana', 'Tripura', 'Uttar Pradesh', 'Uttarakhand', 'West Bengal', 'Andaman and Nicobar Isalnd', 'Chandigarh', '', 'Dadra and Nagar Haveli and Daman and Duke', 'Delhi', 'Jammu and Kashmir', 'Ladhakh', 'Lakshadweep', 'Puducherry',
        ];

        foreach ($states as $state) {
            State::create(['name' => $state]);
        }
    }

}
