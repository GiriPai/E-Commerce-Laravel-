<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Type;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\Models\Classification::class,5)->create();
        factory(App\Models\Category::class,10)->create();
        factory(App\Models\Type::class,20)->create();
        factory(App\Models\Product::class,50)->create();
        factory(App\Models\Stock::class,50)->create();
    }
}
