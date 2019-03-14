<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PortalTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * @var Browser
     */
    protected $browser;

    public function testVisitTheSplashPage()
    {
        $this->browse(function (Browser $browser) {
            $this->browser = $browser;
            $this->whenIVisitTheSplashPage();
            $this->thenIWillSeeTheSplashPage();
        });
    }

    protected function whenIVisitTheSplashPage()
    {
        $this->browser->visit('/');
    }

    protected function thenIWillSeeTheSplashPage()
    {
        $this->browser->assertSee('Splash');
    }

    public function testVisitTheAboutPage()
    {
        $this->browse(function (Browser $browser) {
            $this->browser = $browser;
            $this->whenIVisitTheAboutPage();
            $this->thenIWillSeeTheAboutPage();
        });
    }

    protected function whenIVisitTheAboutPage()
    {
        $this->browser->visit('/about');
    }

    protected function thenIWillSeeTheAboutPage()
    {
        $this->browser->assertSee('About');
    }

    public function testVisitTheNewsPage()
    {
        $this->browse(function (Browser $browser) {
            $this->browser = $browser;
            $this->whenIVisitTheNewsPage();
            $this->thenIWillSeeTheNewsPage();
        });
    }

    protected function whenIVisitTheNewsPage()
    {
        $this->browser->visit('/news');
    }

    protected function thenIWillSeeTheNewsPage()
    {
        $this->browser->assertSee('News');
    }

    public function testGuestVisitsTheOnlineShowroom()
    {
        $this->browse(function (Browser $browser) {
            $this->browser = $browser;
            $this->whenIVisitTheOnlineShowroom();
            $this->thenIWillSeeTheOnlineShowroomPage();
        });
    }

    protected function whenIVisitTheOnlineShowroom()
    {
        $this->browser->visit('/showroom');
    }

    protected function thenIWillSeeTheOnlineShowroomPage()
    {
        $this->browser->assertSee('Showroom');
    }

    public function testVisitTheServicesPage()
    {
        $this->browse(function (Browser $browser) {
            $this->browser = $browser;
            $this->whenIVisitTheServicesPage();
            $this->thenIWillSeeTheServicesPage();
        });
    }

    protected function whenIVisitTheServicesPage()
    {
        $this->browser->visit('/services');
    }

    protected function thenIWillSeeTheServicesPage()
    {
        $this->browser->assertSee('Services');
    }

    public function testVisitTheContactPage()
    {
        $this->browse(function (Browser $browser) {
            $this->browser = $browser;
            $this->whenIVisitTheContactPage();
            $this->thenIWillSeeTheContactPage();
        });
    }

    protected function whenIVisitTheContactPage()
    {
        $this->browser->visit('/contact');
    }

    protected function thenIWillSeeTheContactPage()
    {
        $this->browser->assertSee('Contact');
    }
}
