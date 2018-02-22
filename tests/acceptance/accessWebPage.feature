Feature: accessWebPage
  In order to open a URL
  As a user
  I need to open the browser and type a valid URL

  Scenario: Open the UOL and verify a text into website
    Given Open the page "https://www.uol.com.br"
    When The loading is completed
    Then Verify if the title is "UOL - O melhor conteúdo"

