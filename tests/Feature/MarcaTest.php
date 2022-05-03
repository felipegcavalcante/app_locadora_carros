<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CustomerTest extends TestCase
{
    /** @test */

    public function only_logged_users_can_see_marcas_list()
    {
        $response = $this->get('/api/v1/marca')
            ->assertStatus(401);
    }
}
