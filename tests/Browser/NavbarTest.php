<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class NavbarTest extends DuskTestCase
{

    /**
     * @var Browser
     */
    protected $browser;

    public function testNavbarIsAlwaysDisplayed()
    {

        $this->browse(function (Browser $browser) {
            $this->browser = $browser;
            $this->whenIVisitAnyPage();
            $this->thenIShouldSeeTheNavbarAtTheTopOfThePage();
        });
    }


    protected function whenIVisitAnyPage()
    {
        $this->markTestIncomplete('Time to code');

        $this->browser->visit('/');
        //and in the next step
        //$this->browser->assertSee('Laravel');
    }

    protected function thenIShouldSeeTheNavbarAtTheTopOfThePage()
    {
        $this->markTestIncomplete('Time to code');

        $this->browser->visit('/');
        //and in the next step
        //$this->browser->assertSee('Laravel');
    }

    public function testNavbarLinksWork()
    {

        $this->browse(function (Browser $browser) {
            $this->browser = $browser;
            $this->whenIClickALinkInTheNavbar();
            $this->thenISeeTheExpectedPage();
        });
    }


    protected function whenIClickALinkInTheNavbar()
    {
        $this->markTestIncomplete('Time to code');

        $this->browser->visit('/');
        //and in the next step
        //$this->browser->assertSee('Laravel');
    }

    protected function thenISeeTheExpectedPage()
    {
        $this->markTestIncomplete('Time to code');

        $this->browser->visit('/');
        //and in the next step
        //$this->browser->assertSee('Laravel');
    }


}
