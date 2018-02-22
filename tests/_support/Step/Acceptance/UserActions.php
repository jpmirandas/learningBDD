<?php
namespace Step\Acceptance;

class UserActions extends \AcceptanceTester {

    /**
     * @Given Open the page :url
     */
    public function accessURL($url) {
        $I = $this;
        $I->amOnUrl($url);
    }

}