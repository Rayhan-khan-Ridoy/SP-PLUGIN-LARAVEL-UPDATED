<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class HTTPTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_authenticate_method()
    {
        $response=$this->get("/test");
       // $this->assertTrue($response);
        $response->assertStatus(200);
    }

    public function test_makePayment_method()
    {
        $response=$this->post("/test2");
        //$this->assertTrue($response);
        $response->assertStatus(200);
    }
}
