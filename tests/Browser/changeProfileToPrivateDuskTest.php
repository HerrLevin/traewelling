<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class changeProfileToPrivateDuskTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample() {
        $this->browse(function(Browser $browser) {
            $browser->visit('http://127.0.0.1:8000/login')
                    ->type('email', 'gertrud@traewelling.de')
                    ->type('password', 'thisisnotasecurepassword123')
                    ->press('ANMELDEN')
                    ->assertSelected('Gertrud', 'Einstellungen')
                    ->assertPathIs('/settings');
        });
    }
}
