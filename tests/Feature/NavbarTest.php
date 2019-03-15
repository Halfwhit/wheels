<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class NavbarTest extends TestCase
{


    public function testNavbarIsAlwaysDisplayed() {

        $this->whenIVisitAnyPage();
        $this->thenIShouldSeeTheNavbarAtTheTopOfThePage();
    }


    protected function whenIVisitAnyPage() {

        $this->markTestIncomplete('Time to code');

    }

    protected function thenIShouldSeeTheNavbarAtTheTopOfThePage() {

        $this->markTestIncomplete('Time to code');

    }

    public function testNavbarLinksWork() {

        $this->whenIClickALinkInTheNavbar();
        $this->thenISeeTheExpectedPage();
    }


    protected function whenIClickALinkInTheNavbar() {

        $this->markTestIncomplete('Time to code');

    }

    protected function thenISeeTheExpectedPage() {

        $this->markTestIncomplete('Time to code');

    }


}
