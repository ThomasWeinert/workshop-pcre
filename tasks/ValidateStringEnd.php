<?php

class ValidateStringEnd extends TaskTestCase {

  /**
   * @test
   * @param string $subject
   * @param bool $shouldMatch
   * @testdox Validate if "$subject" ends with a digit, expecting "$shouldMatch".
   * @testWith
   *   ["match 1", true]
   *   ["match 2", true]
   *   ["42", true]
   *   ["21\n", true]
   *   ["no match", false]
   *   ["a 345 b", false]
   *   ["3 start", false]
   */
  public function ValidateThatTheStringEndsWithADigit($subject, $shouldMatch) {
    $pattern = '()';

    $this->testPatternMatch($pattern, $subject, $shouldMatch);
  }
}
