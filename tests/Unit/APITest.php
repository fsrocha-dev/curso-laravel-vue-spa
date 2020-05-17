<?php

namespace Tests\Unit;

use Tests\TestCase;

/**
 * @internal
 * @coversNothing
 */
class APITest extends TestCase
{
    public function testUserCreation()
    {
        $response = $this->json('POST', '/api/register', [
            'name' => 'user demo',
            'email' => 'demo@demo.com',
            'password' => 'secret',
        ]);

        $response->assertStatus(200)->assertJsonStructure([
            'success' => ['token', 'name'],
        ]);
    }

    public function testUserLogin()
    {
        $response = $this->json('POST', '/api/login', [
            'email' => 'demo@demo.com',
            'password' => 'secret',
        ]);

        $response->assertStatus(200)->assertJsonStructure([
            'success' => ['token'],
        ]);
    }

    public function testCategoryFetch()
    {
        $user = \App\User::find(1);

        $response = $this->actingAs($user, 'api')
            ->json('GET', '/api/category')
            ->assertStatus(200)->assertJsonStructure([
                '*' => [
                    'id',
                    'name',
                    'created_at',
                    'updated_at',
                    'deleted_at',
                ],
            ]);
    }

    public function testCategoryCreation()
    {
        $this->withoutMiddleware();

        $response = $this->json('POST', '/api/category', [
            'name' => 'Any category',
        ]);

        $response->assertStatus(200)->assertJson([
            'status' => true,
            'message' => 'Category Created',
        ]);
    }

    public function testCategoryDeletion()
    {
        $user = \App\User::find(1);

        $category = \App\Category::create(['name' => 'To be deleted']);

        $response = $this->actingAs($user, 'api')
            ->json('DELETE', "/api/category/{$category->id}")
            ->assertStatus(200)->assertJson([
                'status' => true,
                'message' => 'Category Deleted',
            ]);
    }
}
