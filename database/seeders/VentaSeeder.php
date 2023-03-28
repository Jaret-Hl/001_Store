<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Venta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ventas = Venta::factory(100)->create();
        
        foreach($ventas as $venta){
            Image::factory(1)->create([
                'imageable_id' => $venta->id,
                'imageable_type' => Venta::class,
            ]);
        }
    }
}
