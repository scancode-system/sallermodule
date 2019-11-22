<?php

namespace Modules\Saller\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Saller\Database\Seeders\SallerTableSeeder;

class SallerDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();


         $this->call(SallerTableSeeder::class);
    }
}
