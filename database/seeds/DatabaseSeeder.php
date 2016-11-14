<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\zapchasti;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call('ZapchastiSeeder');
    }
}

class ZapchastiSeeder extends Seeder
{
    public function run()
    {
      DB::table('zapchastis')->delete();
      zapchasti::create(['name' => 'Hob',
          'weight' => '600',
          'monufacturer' => 'bosch',
          'cost' => '4',
          'group' => 'bmw'
       ]);

      zapchasti::create([
          'name' => 'Bearing',
          'weight' => '400',
          'monufacturer' => 'bosh',
          'cost' => '6',
          'group' => 'opel',
        ]);
      
      zapchasti::create([
          'name' => 'Fuel_Filter',
          'weight' => '300',
          'monufacturer' => 'fram',
          'cost' => '2',
          'group' => 'Fiat',
        
      ]);
    }
}