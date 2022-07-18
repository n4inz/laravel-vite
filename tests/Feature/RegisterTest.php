<?php

namespace Tests\Feature;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    // use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_logic_register()
    {

        $this->withoutExceptionHandling();

        $response = $this->post('/register-store',[
            'sub_domain' => 'test',
            'email' => 'test@mail.com',
            'password' => 'test123',
            'password_confirmation' => 'test123'
        ]);

        $this->assertDatabaseHas('credensials', [
            'email' => 'test@mail.com',
            'credensial' => 'test123'
        ]);
        $response->assertRedirect('https://test.'.env('DOMAIN').'/tenancy');


        // $tenancy->assertRedirect('https://test.'.env('DOMAIN').'/tenancy');
        // return redirect()->to('https://'.$domain->tenants->domain.'/tenancy');
    }

    // public function test_domain_exists()
    // {
    //     $this->withoutExceptionHandling();

    //     // $this->post('/register-store',[
    //     //     'sub_domain' => 'test',
    //     //     'email' => 'test@mail.com',
    //     //     'password' => 'test123',
    //     //     'password_confirmation' => 'test123'
    //     // ]);


    //     $response = $this->post('/register-store',[
    //         'sub_domain' => 'test',
    //         'email' => '',
    //         'password' => 'test123',
    //         'password_confirmation' => 'test123'
    //     ]);

    //     $response->assertSessionHasErrors(['email']);
        

    //     // $response->assert(true);

    //     // $this->assertAuthenticated();
    //     // $response->assertRedirect('https://test.'.env('DOMAIN'));
    // }
}
