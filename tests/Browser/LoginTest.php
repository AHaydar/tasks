<?php

namespace Tests\Browser;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{

    use DatabaseMigrations;
    public function testLogin()
    {
        $user = factory(User::class)->create([
            'email' => 'test@test.com'
        ]);

        $this->browse(function (Browser $browser) use ($user) {
            $browser->visit('https://tasks.test/login')
                ->type('email', $user->email)
                ->type('password', 'secret')
                ->press('Login')
                ->assertPathIs('/tasks');
        });
    }
}
