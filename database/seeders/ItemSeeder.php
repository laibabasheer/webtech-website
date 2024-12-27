<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    public function run()
    {
        {
            Item::create(['name' => 'web devlopment', 'price' => 100, 'description' => 'Example item 1']);
            Item::create(['name' => 'app devlopment', 'price' => 200, 'description' => 'Example item 2']);
        }
}
}


