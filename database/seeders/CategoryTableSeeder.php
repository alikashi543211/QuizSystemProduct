<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = Category::count();

        if ($count <= 0) {
            Category::create([
                'name' => 'Test Service 1',
                'slug' => 'test-category-19Le',
                'image' => 'uploads/categories/1631791998-Xcq8-test-service-1xY3.jpg',
                'price' => '35.00',
                'min_hours' => '2.00',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an',
                'is_featured' => 1,
            ]);

            Category::create([
                'name' => 'Test Service 2',
                'slug' => 'test-category-2dLo',
                'image' => 'uploads/categories/1631792027-46gz-test-service-2dJl.jpg',
                'price' => '400.00',
                'min_hours' => '3.00',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an',
                'is_featured' => 1,
            ]);

            Category::create([
                'name' => 'Test Service 3',
                'slug' => 'test-category-3bYH',
                'image' => 'uploads/categories/1631792051-lx28-test-service-3Xeq.jpg',
                'price' => '300.00',
                'min_hours' => '4.00',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an',
                'is_featured' => 1,
            ]);

            Category::create([
                'name' => 'Test Service 4',
                'slug' => 'test-category-4gYR',
                'image' => 'uploads/categories/1631792076-nGXt-test-service-4nuu.jpg',
                'price' => '50.00',
                'min_hours' => '3.00',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an',
                'is_featured' => 1,
            ]);

            Category::create([
                'name' => 'Test Service 5',
                'slug' => 'test-service-54FP',
                'image' => 'uploads/categories/1631792115-SSDd-test-service-5YdV.jpg',
                'price' => '500.00',
                'min_hours' => '4.00',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an',
                'is_featured' => 0,
            ]);
        }
            
    }
}
