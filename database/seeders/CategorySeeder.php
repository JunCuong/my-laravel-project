<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    // public $categories = [
    //     [
    //         'id' => 1,
    //         'name' => 'Cafe',
    //         'description' => '',
    //     ],
    //     [
    //         'id' => 2,
    //         'name' => 'Chicken',
    //         'description' => '',
    //     ],
    // ];

    private function getCategories()
    {
        return $this->categories;
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tạo 1000 bản ghi ngẫu nhiên
        for ($i = 1; $i <= 1000; $i++) {
            Category::create([
                'name' => 'Category ' . $i,
            ]);
        }
    }
}
