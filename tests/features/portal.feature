Feature: Web Portal
    Can Find relevant information easily
    As a guest to the site
    So I can make a decision about the business

    Scenario: Guest visits the Splash Page
        Given I am a guest
        When I visit the splash page
        Then I will see the splash page

    Scenario: Guest visits the About Page
        Given I am a guest
        When I visit the about page
        Then I will see the about page
        And I will see company information

    Scenario: Guest visits the News Page
        Given I am a guest
        When I visit the news page
        Then I will see the news page
        And I will see the latest news

    Scenario: Guest visits the Online Showroom
        Given I am a guest
        When I visit the online showroom
        Then I will be redirects
        And I will see the registration page

    Scenario: Guest visits the Services Page
        Given I am a guest
        When I visit the services page
        Then I will see the services page
        And I will see the services available

    Scenario: Guest visits the Contact Page
        Given I am a guest
        When I visit the contact page
        Then I will see the contact page
        And I will see the contact information
