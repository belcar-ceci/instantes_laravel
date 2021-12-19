<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Instant;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         Instant::factory()->create([
             "title" => 'Dia de muertos',
             "img" => 'https://dam.muyinteresante.com.mx/wp-content/uploads/2019/10/Di%CC%81a-de-muertos-Me%CC%81xico1.jpg'
         ]);
         Instant::factory(10)->create();
    }
}
