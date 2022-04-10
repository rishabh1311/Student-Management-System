<?php
namespace Database\Seeders;

use App\Models\Lga;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class LgasTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('lgas')->delete();

        $state_id = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,
        ];

        $lgas = ["Not Available", "Not Available","Not Available","Not Available","Not Available","Not Available","Not Available","Not Available","Not Available","Not Available","Not Available","Not Available","Not Available","Not Available","Not Available","Not Available","Not Available","Not Available","Not Available","Not Available","Not Available","Not Available","Not Available","Not Available","Not Available","Not Available","Not Available","Not Available","Not Available","Not Available","Not Available","Not Available","Not Available","Not Available","Not Available","Not Available","Not Available",];

        for($i=0; $i<count($lgas); $i++){
            Lga::create(['state_id' => $state_id[$i], 'name' => $lgas[$i]]);
        }
    }

}
