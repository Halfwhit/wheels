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
       $this->browser->visit('/');
    }

    protected function thenIShouldSeeTheNavbarAtTheTopOfThePage()
    {
        $this->browser->assertVisible('@navbar');
    }

    public function testNavbarLinksWork()
    {

        $this->browse(function (Browser $browser) {
            $this->browser = $browser;
            $this->whenIVisitAnyPage();
            $this->whenIClickALinkInTheNavbar();
            $this->thenISeeTheExpectedPage();
        });
    }


    protected function whenIClickALinkInTheNavbar()
    {
        $this->browser->clickLink('About');
    }

    protected function thenISeeTheExpectedPage()
    {
        $this->browser->assertTitleContains('About');
    }


}
