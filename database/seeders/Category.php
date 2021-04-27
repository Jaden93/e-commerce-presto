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
        ['name'=>'Moto', 'icon'=>'fas fa-motorcycle'],
        ['name'=>'Macchine', 'icon'=>'fas fa-car'],
        ['name'=>'Biciclette','icon'=>'fas fa-bicycle'],
        ['name'=>'Camper','icon'=>'fas fa-caravan'],
        ['name'=>'Computer','icon'=>'fas fa-desktop'],
        ['name'=>'Televisori','icon'=>'fas fa-tv'],
        ['name'=>'Videogiochi','icon'=>'fas fa-gamepad'],
        ['name'=>'Immobili','icon'=>'fas fa-house-user'],
        ['name'=>'Abbigliamento','icon'=>'fas fa-tshirt'],
        ['name'=>'Accessori','icon'=>'fas fa-glasses'],
        ['name'=>'Elettronica','icon'=>'fas fa-mouse'],
        ['name'=>'Libri','icon'=>'fas fa-book'],
    ];
        foreach ($categories as $category) {
        DB::table('categories')->insert([
            'name'=>$category['name'],
            'icon'=>$category['icon'],
            ]);
        };



    }
}
