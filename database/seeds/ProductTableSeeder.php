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
        $products = [];
        $products[0] = ['name' => 'HRX by Hrithik Roshan', 'image' => 'https://api.androidhive.info/images/paytm/1.jpg', 'price' => '850'];
        $products[1] = ['name' => 'Killer Men Khaki Comfort Slim Fit', 'image' => 'https://api.androidhive.info/images/paytm/2.jpg', 'price' => '650'];
        $products[2] = ['name' => 'Vishudh Women Peach-Coloured Printed Maxi Dress', 'image' => 'https://api.androidhive.info/images/paytm/3.jpg', 'price' => '620'];
        $products[3] = ['name' => 'Women Black & Lavender Checked Shirt Dress', 'image' => 'https://api.androidhive.info/images/paytm/4.jpg', 'price' => '900'];
        $products[4] = ['name' => 'Black Solid Suede Shoulder Bag', 'image' => 'https://api.androidhive.info/images/paytm/5.jpg', 'price' => '1200'];
        $products[5] = ['name' => 'Mast & Harbour Women Black Solid Pumps', 'image' => 'https://api.androidhive.info/images/paytm/6.jpg', 'price' => '1099'];
        $products[6] = ['name' => 'White Set of 5 Fibre 16\' x 16\' Cushions', 'image' => 'https://api.androidhive.info/images/paytm/7.jpg', 'price' => '599'];
        $products[7] = ['name' => 'Brown Wood Basic Wall Shelf', 'image' => 'https://api.androidhive.info/images/paytm/8.jpg', 'price' => '299'];

        for ($i = 0; $i < count($products); $i++) {
            DB::table('products')->insert($products[$i]);
        }
    }
}
