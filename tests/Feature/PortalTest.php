<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PortalTest extends TestCase
{
    use DatabaseMigrations, RefreshDatabase;

    private $response;

    public function testVisitTheSplashPage() {
        $this->whenIVisitTheSplashPage();
        $this->thenIWillSeeTheSplashPage();
    }

    protected function whenIVisitTheSplashPage() {
        $this->response = $this->get('/');
    }

    protected function thenIWillSeeTheSplashPage() {
        $this->response->assertViewIs('splash');
    }

    public function testVisitTheAboutPage() {
        $this->whenIVisitTheAboutPage();
        $this->thenIWillSeeTheAboutPage();
    }

    protected function whenIVisitTheAboutPage() {
        $this->response = $this->get('/about');
    }

    protected function thenIWillSeeTheAboutPage() {
        $this->response->assertViewIs('about');
    }

    public function testVisitTheNewsPage() {
        $this->whenIVisitTheNewsPage();
        $this->thenIWillSeeTheNewsPage();
    }

    protected function whenIVisitTheNewsPage() {
        $this->response = $this->get('/article');
    }

    protected function thenIWillSeeTheNewsPage() {
        $this->response->assertViewIs('article.index');
    }

    public function testVisitTheOnlineShowroom() {
        $this->whenIVisitTheOnlineShowroom();
        $this->thenIWillSeeTheOnlineShowroom();
    }

    protected function whenIVisitTheOnlineShowroom() {
        $this->response = $this->get('/showroom');
    }

    protected function thenIWillSeeTheOnlineShowroom() {
        $this->response->assertViewIs('showroom');
    }

    protected function andIWillSeeTheRegistrationPage() {
        $this->response->assertViewIs('auth.register');
    }

    public function testVisitTheServicesPage() {
        $this->whenIVisitTheServicesPage();
        $this->thenIWillSeeTheServicesPage();
    }

    protected function whenIVisitTheServicesPage() {
        $this->response = $this->get('/services');
    }

    protected function thenIWillSeeTheServicesPage() {
        $this->response->assertViewIs('services');
    }

    public function testVisitTheContactPage() {
        $this->whenIVisitTheContactPage();
        $this->thenIWillSeeTheContactPage();
    }

    protected function whenIVisitTheContactPage() {
        $this->response = $this->get('/contact');
    }

    protected function thenIWillSeeTheContactPage() {
        $this->response->assertViewIs('contact');
    }
}
