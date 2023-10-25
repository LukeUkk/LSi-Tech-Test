<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::destroy([1,2,3,4]);
        Product::firstOrCreate(
            ['id' => 1],
            [
                'name' => 'Example Product 1',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p><p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p><p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend</p>',
                'main_image' => 'example-product-1.jpg',
                'images' => 'example-product-1.jpg,example-product-1-black.jpg,example-product-1-white.jpg',
                'price' => 5,
                'colours' => 'Black,White'
            ]
        );

        Product::firstOrCreate(
            ['id' => 2],
            [
                'name' => 'Example Product 2',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p><p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p><p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend</p>',
                'main_image' => 'example-product-2.jpg',
                'images' => 'example-product-2.jpg,example-product-2-black.jpg,example-product-2-blue.jpg,example-product-2-darkblue.jpg,example-product-2-orange.jpg,example-product-2-red.jpg',
                'price' => 2.50,
                'colours' => 'Black,Blue,Dark Blue,Orange,Red'
            ]
        );

        Product::firstOrCreate(
            ['id' => 3],
            [
                'name' => 'Example Product 3',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p><p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p><p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend</p>',
                'main_image' => 'example-product-3.jpg',
                'images' => 'example-product-3.jpg,example-product-3-black.jpg,example-product-3-blue.jpg,example-product-3-grey.jpg,example-product-3-red.jpg',
                'price' => 3.25,
                'colours' => 'Black,Blue,Grey,Red'
            ]
        );

        Product::firstOrCreate(
            ['id' => 4],
            [
                'name' => 'Example Product 4',
                'description' => '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p><p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p><p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend</p>',
                'main_image' => 'example-product-4.jpg',
                'images' => 'example-product-4.jpg,example-product-3-black.jpg,example-product-3-red.jpg',
                'price' => 7.50,
                'colours' => 'Black,Red'
            ]
        );
    }
}
