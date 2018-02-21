Feature: checkout
  In order to buy product
  As a customer
  I need to be able to checkout the selected products

  Scenario: order several products

    Given i have product with $600 price in my cart
    And i have product with $1000 price in my cart
    When i go to checkout process
    Then i should see that total number of products is 2
    And my order amount is $1600
