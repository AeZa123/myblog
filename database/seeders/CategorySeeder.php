<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        //คำสั่งรัน php artisan db:seed --class=CategorySeeder


        $data1 = new Category;
        $data1->name_category = 'HTML';
        $data1->save();

        $data1 = new Category;
        $data1->name_category = 'CSS';
        $data1->save();

        $data1 = new Category;
        $data1->name_category = 'JS';
        $data1->save();

        $data1 = new Category;
        $data1->name_category = 'PHP';
        $data1->save();

        $data1 = new Category;
        $data1->name_category = 'Laravel';
        $data1->save();

        $data1 = new Category;
        $data1->name_category = 'Jquery & Ajax';
        $data1->save();
    }
}
