<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'product_title' => 'iPhone 13 Pro Graphite - 256GB',
                'product_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.',
                'product_price' => '6000.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/iphone1-2.jpg',
                'product_image2' => 'images/products/iphone1-1.jpg',
                'product_image3' => 'images/products/iphone1-3.jpg',
                'product_image4' => 'images/products/iphone1-4.jpg',
                'product_status' => 'available',
                'product_category' => 'Graphite',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_title' => 'Samsung Galaxy S23 Ultra',
                'product_description' => '

                <table cellspacing="0">
    <tbody>
        <tr>
            <td><a href="https://www.gsmarena.com/glossary.php3?term=os">OS</a></td>
            <td>Android 13, One UI 5.1</td>
        </tr>
        <tr>
            <td><a href="https://www.gsmarena.com/glossary.php3?term=chipset">Chipset</a></td>
            <td>Qualcomm SM8550-AC Snapdragon 8 Gen 2 (4 nm)</td>
        </tr>
        <tr>
            <td><a href="https://www.gsmarena.com/glossary.php3?term=cpu">CPU</a></td>
            <td>Octa-core (1x3.36 GHz Cortex-X3 &amp; 2x2.8 GHz Cortex-A715 &amp; 2x2.8 GHz Cortex-A710 &amp; 3x2.0 GHz Cortex-A510)</td>
        </tr>
        <tr>
            <td><a href="https://www.gsmarena.com/glossary.php3?term=gpu">GPU</a></td>
            <td>Adreno 740</td>
        </tr>
    </tbody>
</table>

                ',
                'product_price' => '6000.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/galaxy-s23-ultra.jpg',
                'product_image2' => 'images/products/iphone1-2.jpg',
                'product_image3' => 'images/products/iphone1-3.jpg',
                'product_image4' => 'images/products/iphone1-4.jpg',
                'product_status' => 'available',
                'product_category' => 'Silver',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_title' => 'iPhone 13 Pro Gold - 256GB',
                'product_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.',
                'product_price' => '1099.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/iphone1-3.jpg',
                'product_image2' => 'images/products/iphone1-1.jpg',
                'product_image3' => 'images/products/iphone1-2.jpg',
                'product_image4' => 'images/products/iphone1-4.jpg',
                'product_status' => 'available',
                'product_category' => 'Gold',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_title' => 'iPhone 12 Red - 256GB',
                'product_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.',
                'product_price' => '849.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/iphone1-3.jpg',
                'product_image2' => 'images/products/iphone1-1.jpg',
                'product_image3' => 'images/products/iphone1-2.jpg',
                'product_image4' => 'images/products/iphone1-4.jpg',
                'product_status' => 'available',
                'product_category' => 'Red',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_title' => 'Samsung Galaxy A12',
                'product_description' => '

                <table cellspacing="0">
    <tbody>
        <tr>
            <td><a href="https://www.gsmarena.com/glossary.php3?term=os">OS</a></td>
            <td>Android 10, upgradable to Android 11, One UI 3.1</td>
        </tr>
        <tr>
            <td><a href="https://www.gsmarena.com/glossary.php3?term=chipset">Chipset</a></td>
            <td>Mediatek MT6765 Helio P35 (12nm)</td>
        </tr>
        <tr>
            <td><a href="https://www.gsmarena.com/glossary.php3?term=cpu">CPU</a></td>
            <td>Octa-core (4x2.35 GHz Cortex-A53 &amp; 4x1.8 GHz Cortex-A53)</td>
        </tr>
        <tr>
            <td><a href="https://www.gsmarena.com/glossary.php3?term=gpu">GPU</a></td>
            <td>PowerVR GE8320</td>
        </tr>
    </tbody>
</table>

                ',
                'product_price' => '649.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/iphone1-2.jpg',
                'product_image2' => 'images/products/iphone1-1.jpg',
                'product_image3' => 'images/products/iphone1-3.jpg',
                'product_image4' => 'images/products/iphone1-4.jpg',
                'product_status' => 'available',
                'product_category' => 'Purple',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_title' => 'iPhone Test',
                'product_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.',
                'product_price' => '20.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/iphone1-2.jpg',
                'product_image2' => 'images/products/iphone1-1.jpg',
                'product_image3' => 'images/products/iphone1-3.jpg',
                'product_image4' => 'images/products/iphone1-4.jpg',
                'product_status' => 'available',
                'product_category' => 'Purple',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_title' => 'iPhone 13 Pro Max Silver - 256GB',
                'product_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.',
                'product_price' => '1199.66',
                'product_quantity' => 100,
                'product_image1' => 'images/products/iphone1-1.jpg',
                'product_image2' => 'images/products/iphone1-2.jpg',
                'product_image3' => 'images/products/iphone1-3.jpg',
                'product_image4' => 'images/products/iphone1-4.jpg',
                'product_status' => 'available',
                'product_category' => 'Silver',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
