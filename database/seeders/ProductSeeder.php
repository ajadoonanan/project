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
                'product_price' => '1100.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/galaxy-a121.jpg',
                'product_image2' => 'images/products/iphone1-1.jpg',
                'product_image3' => 'images/products/iphone1-3.jpg',
                'product_image4' => 'images/products/iphone1-4.jpg',
                'product_status' => 'available',
                'product_category' => 'Samsung',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_title' => 'Samsung Galaxy F14',
                'product_description' => '
                <table cellspacing="0">
    <tbody>
        <tr>
            <td><a href="https://www.gsmarena.com/glossary.php3?term=os">OS</a></td>
            <td>Android 13, One UI Core 5.1</td>
        </tr>
        <tr>
            <td><a href="https://www.gsmarena.com/glossary.php3?term=chipset">Chipset</a></td>
            <td>Exynos 1330 (5nm)</td>
        </tr>
        <tr>
            <td><a href="https://www.gsmarena.com/glossary.php3?term=cpu">CPU</a></td>
            <td>Octa-core (2x2.4 GHz Cortex-A78 &amp; 6x2.0 GHz Cortex-A55)</td>
        </tr>
        <tr>
            <td><a href="https://www.gsmarena.com/glossary.php3?term=gpu">GPU</a></td>
            <td>Mali-G68 MP2</td>
        </tr>
    </tbody>
</table>
                ',
                'product_price' => '1080.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/galaxy-f14.jpg',
                'product_image2' => 'images/products/iphone1-1.jpg',
                'product_image3' => 'images/products/iphone1-3.jpg',
                'product_image4' => 'images/products/iphone1-4.jpg',
                'product_status' => 'available',
                'product_category' => 'Samsung',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_title' => 'Samsung Galaxy A24',
                'product_description' => '
                <table cellspacing="0">
                <tbody>
                    <tr>
                        <td><a href="https://www.gsmarena.com/glossary.php3?term=os">OS</a></td>
                        <td>Android 13, One UI 5.1</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.gsmarena.com/glossary.php3?term=chipset">Chipset</a></td>
                        <td>Mediatek MT8781 Helio G99 (6nm)</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.gsmarena.com/glossary.php3?term=cpu">CPU</a></td>
                        <td>Octa-core (2x2.2 GHz Cortex-A76 &amp; 6x2.0 GHz Cortex-A55)</td>
                    </tr>
                    <tr>
                        <td><a href="https://www.gsmarena.com/glossary.php3?term=gpu">GPU</a></td>
                        <td>Mali-G57 MC2</td>
                    </tr>
                </tbody>
            </table>
                ',
                'product_price' => '1700.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/galaxy-a241.jpg',
                'product_image2' => 'images/products/iphone1-2.jpg',
                'product_image3' => 'images/products/iphone1-3.jpg',
                'product_image4' => 'images/products/iphone1-4.jpg',
                'product_status' => 'available',
                'product_category' => 'Samsung',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_title' => 'Apple iPhone 13 Pro',
                'product_description' => '
                <table cellspacing="0">
    <tbody>
        <tr>
            <td><a href="https://www.gsmarena.com/glossary.php3?term=os">OS</a></td>
            <td>iOS 15, upgradable to iOS 16.6.1, planned upgrade to iOS 17</td>
        </tr>
        <tr>
            <td><a href="https://www.gsmarena.com/glossary.php3?term=chipset">Chipset</a></td>
            <td>Apple A15 Bionic (5 nm)</td>
        </tr>
        <tr>
            <td><a href="https://www.gsmarena.com/glossary.php3?term=cpu">CPU</a></td>
            <td>Hexa-core (2x3.23 GHz Avalanche + 4x1.82 GHz Blizzard)</td>
        </tr>
        <tr>
            <td><a href="https://www.gsmarena.com/glossary.php3?term=gpu">GPU</a></td>
            <td>Apple GPU (5-core graphics)</td>
        </tr>
    </tbody>
</table>
                ',
                'product_price' => '5340.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/iphone-13-pro.jpg',
                'product_image2' => 'images/products/iphone1-1.jpg',
                'product_image3' => 'images/products/iphone1-3.jpg',
                'product_image4' => 'images/products/iphone1-4.jpg',
                'product_status' => 'available',
                'product_category' => 'Apple',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_title' => 'Apple iPhone 11 Pro',
                'product_description' => '
                <table cellspacing="0">
    <tbody>
        <tr>
            <td><a href="https://www.gsmarena.com/glossary.php3?term=os">OS</a></td>
            <td>iOS 13, upgradable to iOS 16.6, planned upgrade to iOS 17</td>
        </tr>
        <tr>
            <td><a href="https://www.gsmarena.com/glossary.php3?term=chipset">Chipset</a></td>
            <td>Apple A13 Bionic (7 nm+)</td>
        </tr>
        <tr>
            <td><a href="https://www.gsmarena.com/glossary.php3?term=cpu">CPU</a></td>
            <td>Hexa-core (2x2.65 GHz Lightning + 4x1.8 GHz Thunder)</td>
        </tr>
        <tr>
            <td><a href="https://www.gsmarena.com/glossary.php3?term=gpu">GPU</a></td>
            <td>Apple GPU (4-core graphics)</td>
        </tr>
    </tbody>
</table>
                ',
                'product_price' => '4070.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/iphone-11-pro1.jpg',
                'product_image2' => 'images/products/iphone1-1.jpg',
                'product_image3' => 'images/products/iphone1-2.jpg',
                'product_image4' => 'images/products/iphone1-4.jpg',
                'product_status' => 'available',
                'product_category' => 'Apple',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_title' => 'Apple iPhone XR',
                'product_description' => '
                <table cellspacing="0">
    <tbody>
        <tr>
            <td><a href="https://www.gsmarena.com/glossary.php3?term=os">OS</a></td>
            <td>iOS 12, upgradable to iOS 16.6</td>
        </tr>
        <tr>
            <td><a href="https://www.gsmarena.com/glossary.php3?term=chipset">Chipset</a></td>
            <td>Apple A12 Bionic (7 nm)</td>
        </tr>
        <tr>
            <td><a href="https://www.gsmarena.com/glossary.php3?term=cpu">CPU</a></td>
            <td>Hexa-core (2x2.5 GHz Vortex + 4x1.6 GHz Tempest)</td>
        </tr>
        <tr>
            <td><a href="https://www.gsmarena.com/glossary.php3?term=gpu">GPU</a></td>
            <td>Apple GPU (4-core graphics)</td>
        </tr>
    </tbody>
</table>
                ',
                'product_price' => '2280.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/iphone-xr1.jpg',
                'product_image2' => 'images/products/iphone1-1.jpg',
                'product_image3' => 'images/products/iphone1-2.jpg',
                'product_image4' => 'images/products/iphone1-4.jpg',
                'product_status' => 'available',
                'product_category' => 'Apple',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_title' => 'Huawei Nova 8 SE',
                'product_description' => '
                <table cellspacing="0">
    <tbody>
        <tr>
            <td><a href="https://www.gsmarena.com/glossary.php3?term=os">OS</a></td>
            <td>Android 10, EMUI 10.1, no Google Play Services</td>
        </tr>
        <tr>
            <td><a href="https://www.gsmarena.com/glossary.php3?term=chipset">Chipset</a></td>
            <td>Mediatek MT6853 Dimensity 720 (7 nm) - standard model<br>Mediatek MT6853 Dimensity 800U (7 nm) - premium model</td>
        </tr>
        <tr>
            <td><a href="https://www.gsmarena.com/glossary.php3?term=cpu">CPU</a></td>
            <td>Octa-core (2x2.0 GHz Cortex-A76 &amp; 6x2.0 GHz Cortex-A55) - standard model<br>Octa-core (2x2.4 GHz Cortex-A76 &amp; 6x2.0 GHz Cortex-A55) - premium model</td>
        </tr>
        <tr>
            <td><a href="https://www.gsmarena.com/glossary.php3?term=gpu">GPU</a></td>
            <td>Mali-G57 MC3</td>
        </tr>
    </tbody>
</table>
                ',
                'product_price' => '2300.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/huawei-nova8se.jpg',
                'product_image2' => 'images/products/iphone1-1.jpg',
                'product_image3' => 'images/products/iphone1-3.jpg',
                'product_image4' => 'images/products/iphone1-4.jpg',
                'product_status' => 'available',
                'product_category' => 'Huawei',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_title' => 'Huawei P60 Pro',
                'product_description' => '
                <table cellspacing="0">
    <tbody>
        <tr>
            <td><a href="https://www.gsmarena.com/glossary.php3?term=os">OS</a></td>
            <td>HarmonyOS 3.1 (China), EMUI 13.1 (Europe), no Google Play Services</td>
        </tr>
        <tr>
            <td><a href="https://www.gsmarena.com/glossary.php3?term=chipset">Chipset</a></td>
            <td>Qualcomm SM8475 Snapdragon 8+ Gen 1 4G (4 nm)</td>
        </tr>
        <tr>
            <td><a href="https://www.gsmarena.com/glossary.php3?term=cpu">CPU</a></td>
            <td>Octa-core (1x3.19 GHz Cortex-X2 &amp; 3x2.75 GHz Cortex-A710 &amp; 4x2.0 GHz Cortex-A510)</td>
        </tr>
        <tr>
            <td><a href="https://www.gsmarena.com/glossary.php3?term=gpu">GPU</a></td>
            <td>Adreno 730</td>
        </tr>
    </tbody>
</table>
                ',
                'product_price' => '6700.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/p60-pro1.jpg',
                'product_image2' => 'images/products/iphone1-1.jpg',
                'product_image3' => 'images/products/iphone1-3.jpg',
                'product_image4' => 'images/products/iphone1-4.jpg',
                'product_status' => 'available',
                'product_category' => 'Huawei',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_title' => 'Huawei Y5p',
                'product_description' => '
                <table cellspacing="0">
    <tbody>
        <tr>
            <td><a href="https://www.gsmarena.com/glossary.php3?term=os">OS</a></td>
            <td>Android 10, EMUI 10.1, no Google Play Services</td>
        </tr>
        <tr>
            <td><a href="https://www.gsmarena.com/glossary.php3?term=chipset">Chipset</a></td>
            <td>Mediatek MT6762R Helio P22 (12 nm)</td>
        </tr>
        <tr>
            <td><a href="https://www.gsmarena.com/glossary.php3?term=cpu">CPU</a></td>
            <td>Octa-core (4x2.0 GHz Cortex-A53 &amp; 4x1.5 GHz Cortex-A53)</td>
        </tr>
        <tr>
            <td><a href="https://www.gsmarena.com/glossary.php3?term=gpu">GPU</a></td>
            <td>PowerVR GE8320</td>
        </tr>
    </tbody>
</table>
                ',
                'product_price' => '810.00',
                'product_quantity' => 100,
                'product_image1' => 'images/products/y5p1.jpg',
                'product_image2' => 'images/products/iphone1-1.jpg',
                'product_image3' => 'images/products/iphone1-3.jpg',
                'product_image4' => 'images/products/iphone1-4.jpg',
                'product_status' => 'available',
                'product_category' => 'Huawei',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
