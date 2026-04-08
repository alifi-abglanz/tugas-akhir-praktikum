<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $now = Carbon::now();

        DB::table('categories')->insert([
            [
                'category_id' => 1,
                'category_name' => 'Luxury SUV',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'category_id' => 2,
                'category_name' => 'Off-Road Specialist',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'category_id' => 3,
                'category_name' => 'Compact SUV',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'category_id' => 4,
                'category_name' => 'Classic Series',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);

        DB::table('brands')->insert([
            [
                'brand_id' => 1,
                'brand_name' => 'Ingenium Engine',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'brand_id' => 2,
                'brand_name' => 'BMW V8 Power',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'brand_id' => 3,
                'brand_name' => 'Ford EcoBoost',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'brand_id' => 4,
                'brand_name' => 'ZF Transmission',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);

        DB::table('products')->insert([
            [
                'product_id' => 1,
                'category_id' => 1,
                'brand_id' => 1,
                'product_name' => 'Range Rover Vogue',
                'product_price' => 35000,
                'product_stock' => 5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_id' => 2,
                'category_id' => 2,
                'brand_id' => 2,
                'product_name' => 'Land Rover Defender 110',
                'product_price' => 28000,
                'product_stock' => 12,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_id' => 3,
                'category_id' => 3,
                'brand_id' => 1,
                'product_name' => 'Range Rover Evoque',
                'product_price' => 15000,
                'product_stock' => 8,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_id' => 4,
                'category_id' => 1,
                'brand_id' => 3,
                'product_name' => 'Range Rover Velar',
                'product_price' => 21000,
                'product_stock' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_id' => 5,
                'category_id' => 2,
                'brand_id' => 4,
                'product_name' => 'Discovery Sport',
                'product_price' => 18000,
                'product_stock' => 7,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_id' => 6,
                'category_id' => 4,
                'brand_id' => 3,
                'product_name' => 'Land Rover Series III',
                'product_price' => 75000,
                'product_stock' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
