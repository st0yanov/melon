<?php

class ManageAccessCest
{
    // tests
    public function requiredAuthentication(FunctionalTester $I)
    {
        $I->amOnRoute('manage::dashboard');
        $I->seeCurrentRouteIs('auth::login');
    }

    public function insufficientPermissions(FunctionalTester $I)
    {
        $user = factory(Melon\Models\User::class)->create();
        $I->amLoggedAs($user);

        // TODO: Is this the right way to handle exceptions in tests?
        // This is needed in order not to interrupt the test.
        $I->enableExceptionHandling();

        $I->amOnRoute('manage::dashboard');
        $I->seeResponseCodeIs(403);
    }

    public function haveNeededPermissions(FunctionalTester $I)
    {
        $I->amLoggedInWithOwner();
        $I->amOnRoute('manage::dashboard');
        $I->seeResponseCodeIs(200);
        $I->see('Melon');
    }
}
