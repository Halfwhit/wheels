Feature: Navigation Bar
    Can navigate between a list of pages
    As a visitor
    So that navigation is easy and intuitive

    Scenario: Navbar is always displayed
        When I visit any page
        Then I should see the navbar at the top of the page

    Scenario: Navbar links work
        When I click a link in the navbar
        Then I see the expected page
