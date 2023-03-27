<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use App\Models\Customer;

class testApiCustomerController extends TestCase
{
    //use RefreshDatabase;
    use WithoutMiddleware;
    /**
     * A basic feature test example.
     *
     * @return void
     * @test
     */
    public function test_create_customer()
    {
        $response = $this->post('/api/customer',[
        'name' => 'Test User',
        'username' => 'MyUser',
        'title' => 'Mx',
        'firstname' => 'Myfirstname',
        'lastname' => 'Mylastname',
        'address1' => 'Myaddress1',
        'address2' => 'Myaddress2',
        'county' => 'Mycounty',
        'towncity' => 'Mytown',
        'postcode' => 'TN377BB',
        'phone' => '01424123456',
        'email' => 'test2@test.co.uk'
        ]);
        //$this->assertTrue($response['created']);
        $response->assertStatus(201);
    }
}
