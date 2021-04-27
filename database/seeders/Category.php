<?php

namespace Database\Seeders;

use App\Models\Announcement;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        $categories = [
        ['name'=>'Moto', 'icon'=>'<i class="fas fa-motorcycle"></i>'],
        ['name'=>'Macchine', 'icon'=>'<i class="fas fa-car"></i>'],
        ['name'=>'Biciclette','icon'=>'<i class="fas fa-bicycle"></i>'],
        ['name'=>'Camper','icon'=>'<i class="fas fa-caravan"></i>'],
        ['name'=>'Computer','icon'=>'<i class="fas fa-desktop"></i>'],
        ['name'=>'Televisori','icon'=>'<i class="fas fa-tv"></i>'],
        ['name'=>'Videogiochi','icon'=>'<i class="fas fa-gamepad"></i>'],
        ['name'=>'Immobili','icon'=>'<i class="fas fa-house-user"></i>'],
        ['name'=>'Abbigliamento','icon'=>'<i class="fas fa-tshirt"></i>'],
        ['name'=>'Accessori','icon'=>'<i class="fas fa-glasses"></i>'],
        ['name'=>'Elettronica','icon'=>'<i class="fas fa-mouse"></i>'],
        ['name'=>'Libri','icon'=>'<i class="fas fa-book"></i>'],
    ];
        foreach ($categories as $category) {
        DB::table('categories')->insert([
            'name'=>$category['name'],
            'icon'=>$category['icon'],
            ]);
        };



    }
}
