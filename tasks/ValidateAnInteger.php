<?php

class ValidateAnInteger extends TaskTestCase {

  /**
   * @test
   * @param string $subject
   * @param bool $shouldMatch
   * @testdox Validate if "$subject" is an integer, expecting "$shouldMatch".
   *   The string is only allowed to contain digits and the optional leading sign.
   * @testWith
   *   ["1", true]
   *   ["123", true]
   *   ["+123", true]
   *   ["-456", true]
   *   ["1.1", false]
   *   ["abc", false]
   *   ["123 456", false]
   */
  public function ValidateThatTheStringIsAnInteger($subject, $shouldMatch) {
    $pattern = '()D';

    $this->testPatternMatch($pattern, $subject, $shouldMatch);
  }
}
