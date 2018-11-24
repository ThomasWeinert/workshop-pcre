<?php

class ValidateStringStart extends \PHPUnit\Framework\TestCase {

  /**
   * @test
   * @testdox Validate if "$subject" starts with a digit, expecting "$shouldMatch".
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
    if ($shouldMatch) {
      $this->assertTrue($result);
    } else {
      $this->assertFalse($result);
    }
  }
}
