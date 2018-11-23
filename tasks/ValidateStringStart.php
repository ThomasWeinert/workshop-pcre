<?php

class ValidateStringStart extends \PHPUnit\Framework\TestCase {

  /**
   * Validate that the subject starts with a digit.
   *
   * @test
   * @testWith
   *   ["1. match", true]
   *   ["2. match", true]
   *   ["42", true]
   *   ["no match", false]
   *   ["a 345 b", false]
   *   ["end 3", false]
   * @param string $subject
   * @param bool $shouldMatch
   */
  public function ValidateThatTheStringStartsWithADigit($subject, $shouldMatch) {
    $pattern = '()';

    /* DO NOT CHANGE */
    $result = (bool)\preg_match($pattern, $subject);
    $this->assertSame($shouldMatch, $result);
  }
}
