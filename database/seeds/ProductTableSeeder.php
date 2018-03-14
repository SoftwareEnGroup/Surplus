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
        $product = new \App\Product([
          'imagePath' => 'http://www.vegetables.co.nz/assets/Uploads/vegetables.jpg',
          'title' => 'Fresh Assorted Fruit & Veg',
          'description' => 'Lots of fresh veg & fruit that cannot be held in stock',
          'price' => 2
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => 'https://www.australianeggs.org.au/assets/australian-eggs/recipes/_resampled/CroppedFocusedImageWzgxMCw0OTVd/Easy-Boiled-Egg.jpg',
          'title' => 'Egg-citing Deal!',
          'description' => 'Get a dozen eggs for a quarter of the usual price',
          'price' => 1
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => 'https://harvesttotable.com/wp-content/uploads/2011/04/Potatoes.jpg',
          'title' => 'Bruised Potatoes',
          'description' => 'Do not judge a book by its cover, 10 potatoes great for cooking',
          'price' => 1.50
        ]);
        $product->save();

        $product = new \App\Product([
          'imagePath' => 'https://img.taste.com.au/EAdTSWDm/taste/2016/11/yoghurt-berry-granola-compote-23233-1.jpeg',
          'title' => 'Healthy Dessert',
          'description' => 'Pack of 8, does not come with the spoon :(',
          'price' => 1.35
        ]);
        $product->save();
    }
}
