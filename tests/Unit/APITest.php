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
}
