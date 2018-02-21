<?php
namespace Helper;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class Acceptance extends \Codeception\Module {

    /**
     * @Given i have product with $:num1:num2:num2:num2 price in my cart
     */
    public function iHaveProductWithPriceInMyCart($num1, $num2, $num3, $num4) {
        throw new \Codeception\Exception\Incomplete("Step `i have product with $:num1:num2:num2:num2 price in my cart` is not defined");
    }

    /**
     * @When i go to checkout process
     */
    public function iGoToCheckoutProcess() {
        throw new \Codeception\Exception\Incomplete("Step `i go to checkout process` is not defined");
    }

    /**
     * @Then i should see that total number of products is :num1
     */
    public function iShouldSeeThatTotalNumberOfProductsIs($num1) {
        throw new \Codeception\Exception\Incomplete("Step `i should see that total number of products is :num1` is not defined");
    }

    /**
     * @Then my order amount is $:num1:num2:num3:num3
     */
    public function myOrderAmountIs($num1, $num2, $num3, $num4) {
        throw new \Codeception\Exception\Incomplete("Step `my order amount is $:num1:num2:num3:num3` is not defined");
    }

}
