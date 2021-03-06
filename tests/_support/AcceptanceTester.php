<?php


/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = NULL)
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor {
    use _generated\AcceptanceTesterActions;

    /**
     * @When The loading is completed
     */
    public function theLoadingIsCompleted() {
        $I = $this;
        echo "...." . PHP_EOL;
    }

    /**
     * @Then Verify if the title is :title
     */
    public function verifyIfTheTitleIs($title) {
        $I = $this;
        $I->seeInTitle($title);
    }
}
