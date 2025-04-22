<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group register
     */
    public function testRegist(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
            ->type('name', 'Tes')
            ->type('email', 'Tes12345@email.com')
            ->type('password', 'Pass123')
            ->type('password_confirmation', 'Pass123')
            ->press('REGISTER');
        });
    }
}
