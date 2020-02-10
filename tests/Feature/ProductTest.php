<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Str;
use App\User;
use App\Product;

class ProductTest extends TestCase
{
    
    public function testFetchAllProductCorrectly()
    {
        $response = $this->get('api/products');
        $response->assertStatus(200);
    }

    public function testCreateProductSuccessfully()
    {
        $user = factory(User::class)->create();
        $token = $user->generateToken();
        $headers = ['Authorization' => "Bearer $token"];
        $payload = [
            'name' => 'Lorem',
            'price' => 700.25,
            'stock' => 200,
        ];

        $this->json('POST', 'api/products', $payload, $headers)
            ->assertStatus(201)
            ->assertJson(['id'=>1, 'name' => 'Lorem', 'price' => 700.25, 'stock' => 200]);
    }

    public function testUpdateProductCorrectly()
    {
        $user = factory(User::class)->create();
        $token = $user->generateToken();
        $headers = ['Authorization' => "Bearer $token"];
        $product = factory(Product::class)->create([
            'name' => 'Plain Shirt',
            'price' => 1000,
            'stock' => 320,
        ]);

        $payload = [
            'name' => 'Plain Shirt',
            'price' => 1500,
            'stock' => 310,
        ];

        $response = $this->json('PUT', '/api/products/' . $product->id, $payload, $headers)
            ->assertStatus(200)
            ->assertJson([ 
                'id' => $product->id, 
                'name' => 'Plain Shirt',
                'price' => 1500,
                'stock' => 310, 
            ]);
    }

    public function testShowedProductCorrectly()
    {
        $user = factory(User::class)->create();
        $token = $user->generateToken();
        $headers = ['Authorization' => "Bearer $token"];
        $product = factory(Product::class)->create([
            'name' => 'Plain Shirt',
            'price' => 1000,
            'stock' => 320,
        ]);

        $response = $this->json('GET', '/api/products/' . $product->id);
        $response->assertStatus(200);
    }

    public function testProductsAreListedCorrectly()
    {
        factory(Product::class)->create([
            'name' => 'Plain Shirt',
            'price' => 1000,
            'stock' => 320,
        ]);

        factory(Product::class)->create([
            'name' => 'Chinos Pant',
            'price' => 1000,
            'stock' => 320,
        ]);

        $user = factory(User::class)->create();
        $token = $user->generateToken();
        $headers = ['Authorization' => "Bearer $token"];

        $response = $this->json('GET', 'api/products/', [], $headers)
            ->assertStatus(200)
            ->assertJson([
                ['name' => 'Plain Shirt','price' => 1000,'stock' => 320,],
                ['name' => 'Chinos Pant','price' => 1000,'stock' => 320]
            ])
             ->assertJsonStructure([
                 '*' => ['id', 'name', 'price', 'stock', 'created_at', 'updated_at'],
            ]);
    }

    public function testsProductsAreDeletedCorrectly()
    {
        $user = factory(User::class)->create();
        $token = $user->generateToken();
        $headers = ['Authorization' => "Bearer $token"];
        $product = factory(Product::class)->create([
            'name' => 'Chinos Pant',
            'price' => 1000,
            'stock' => 320,
        ]);

        $this->json('DELETE', '/api/products/' . $product->id, [], $headers)
            ->assertStatus(204);
    }
}
