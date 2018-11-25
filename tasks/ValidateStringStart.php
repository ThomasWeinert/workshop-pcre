<?php

class ValidateStringStart extends TaskTestCase {

  /**
   * @test
   * @param string $subject
   * @param bool $shouldMatch
   * @testdox Validate if "$subject" starts with a digit, expecting "$shouldMatch".
   * @testWith
   *   ["1. match", true]
   *   ["2. match", true]
   *   ["42", true]
   *   ["no match", false]
   *   ["a 345 b", false]
   *   ["end 3", false]
   */
  public function ValidateThatTheStringStartsWithADigit($subject, $shouldMatch) {
    $pattern = '()';

    $this->testPatternMatch($pattern, $subject, $shouldMatch);
  }
}
