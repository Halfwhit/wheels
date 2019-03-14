<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PortalTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    private $response;

    public function testGuestVisitsTheSplashPage() {
        $this->whenIVisitTheSplashPage();
        $this->thenIWillSeeTheSplashPage();
    }

    protected function whenIVisitTheSplashPage() {

        $this->response = $this->get('/');

    }

    protected function thenIWillSeeTheSplashPage() {

        $this->response->assertViewIs('splash');
    }

    public function testGuestVisitsTheAboutPage() {

        $this->givenIAmAGuest();
        $this->whenIVisitTheAboutPage();
        $this->thenIWillSeeTheAboutPage();
        $this->andIWillSeeCompanyInformation();
    }


    protected function whenIVisitTheAboutPage() {

        $this->markTestIncomplete('Time to code');

    }

    protected function thenIWillSeeTheAboutPage() {

        $this->markTestIncomplete('Time to code');

    }

    protected function andIWillSeeCompanyInformation() {

        $this->markTestIncomplete('Time to code');

    }

    public function testGuestVisitsTheNewsPage() {

        $this->givenIAmAGuest();
        $this->whenIVisitTheNewsPage();
        $this->thenIWillSeeTheNewsPage();
        $this->andIWillSeeTheLatestNews();
    }


    protected function whenIVisitTheNewsPage() {

        $this->markTestIncomplete('Time to code');

    }

    protected function thenIWillSeeTheNewsPage() {

        $this->markTestIncomplete('Time to code');

    }

    protected function andIWillSeeTheLatestNews() {

        $this->markTestIncomplete('Time to code');

    }

    public function testGuestVisitsTheOnlineShowroom() {

        $this->givenIAmAGuest();
        $this->whenIVisitTheOnlineShowroom();
        $this->thenIWillBeRedirects();
        $this->andIWillSeeTheRegistrationPage();
    }


    protected function whenIVisitTheOnlineShowroom() {

        $this->markTestIncomplete('Time to code');

    }

    protected function thenIWillBeRedirects() {

        $this->markTestIncomplete('Time to code');

    }

    protected function andIWillSeeTheRegistrationPage() {

        $this->markTestIncomplete('Time to code');

    }

    public function testGuestVisitsTheServicesPage() {

        $this->givenIAmAGuest();
        $this->whenIVisitTheServicesPage();
        $this->thenIWillSeeTheServicesPage();
        $this->andIWillSeeTheServicesAvailable();
    }


    protected function whenIVisitTheServicesPage() {

        $this->markTestIncomplete('Time to code');

    }

    protected function thenIWillSeeTheServicesPage() {

        $this->markTestIncomplete('Time to code');

    }

    protected function andIWillSeeTheServicesAvailable() {

        $this->markTestIncomplete('Time to code');

    }

    public function testGuestVisitsTheContactPage() {

        $this->givenIAmAGuest();
        $this->whenIVisitTheContactPage();
        $this->thenIWillSeeTheContactPage();
        $this->andIWillSeeTheContactInformation();
    }


    protected function whenIVisitTheContactPage() {

        $this->markTestIncomplete('Time to code');

    }

    protected function thenIWillSeeTheContactPage() {

        $this->markTestIncomplete('Time to code');

    }

    protected function andIWillSeeTheContactInformation() {

        $this->markTestIncomplete('Time to code');

    }


}
