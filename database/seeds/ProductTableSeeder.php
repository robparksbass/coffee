<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\products([
            'imagePath' =>'http://media.nj.com/entertainment_impact_dining/photo/coffee-stock-photo-0e8b300f42157b6f.jpg',
            'title' => 'Coffee 1',
            'description' => 'descript',
            'price' => 10
        ]);
        $product->save();
  	
		$product = new \App\products([
            'imagePath' =>'http://sawadacoffee.com/wp-content/uploads/Sawada-Coffee-10DEC2015-003.jpg',
            'title' => 'Coffee 2',
            'description' => 'descript',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\products([
            'imagePath' =>'http://s.hswstatic.com/gif/coffee-571245571.jpg',
            'title' => 'Coffee 3',
            'description' => 'descript',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\products([
            'imagePath' =>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkkiscywUOn9j4gLNI75cJcPyhe-o_kpC-s81DcfS7Tdfe9ppA',
            'title' => 'Coffee 4',
            'description' => 'descript',
            'price' => 10
        ]);
        $product->save();
 
        $product = new \App\products([
            'imagePath' =>'http://cdn1.theodysseyonline.com/files/2016/01/04/635875309980360751-1126142926_article%20coffee.jpg',
            'title' => 'Coffee 5',
            'description' => 'descript',
            'price' => 10
        ]);
        $product->save();
    }
}