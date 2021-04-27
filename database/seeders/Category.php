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
        $categories = ['Moto','Macchine','Biciclette','Monopattini','Computer','Televisori','Videogiochi','Immobili','Abbigliamento','Accessori','Elettronica','Libri'];
        $icons = ['<i class="fas fa-motorcycle"></i>','<i class="fas fa-motorcycle"></i>','<i class="fas fa-motorcycle"></i>','<i class="fas fa-motorcycle"></i>'];
       
        foreach ($categories as $category) {
        DB::table('categories')->insert([
            'name'=>$category,
            
            ]);

        };


            

    }
}
