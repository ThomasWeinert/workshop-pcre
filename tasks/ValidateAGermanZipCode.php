<?php

class ValidateAGermanZipCode extends TaskTestCase {

  /**
   * @test
   * @param string $subject
   * @param bool $shouldMatch
   * @testdox Validate that "$subject" is a German zip code, expecting "$shouldMatch".
   *   German zip codes consist of 5 digits.
   * @testWith
   *   ["01234", true]
   *   ["50670", true]
   *   ["40213", true]
   *   ["abcdef", false]
   *   ["50670\n", false]
   *   ["123456", false]
   */
  public function ValidateThatTheStringIsAGermanZipCode($subject, $shouldMatch): void {
    $pattern = '()';

    $this->matchPattern($pattern, $subject, $shouldMatch);
  }
}
