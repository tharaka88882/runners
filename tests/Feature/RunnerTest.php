<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RunnerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_api_endpoint_runner_for_existing_user()
    {
        //with the data
        $response = $this->get('api/v1/runner/1/form-data');

        $response->assertStatus(200);
    }
    public function test_api_endpoint_runner_for_non_existing_user()
    {
        //Without the data
        $response = $this->get('api/v1/runner/1000/form-data');

        $response->assertStatus(404);
    }
}
