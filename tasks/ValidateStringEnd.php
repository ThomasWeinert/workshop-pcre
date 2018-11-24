<?php

class ValidateStringEnd extends \PHPUnit\Framework\TestCase {

  /**
   * @test
   * @testdox Validate if "$subject" ends with a digit, expecting "$shouldMatch".
   * @testWith
   *   ["match 1", true]
   *   ["match 2", true]
   *   ["42", true]
   *   ["21\n", true]
   *   ["no match", false]
   *   ["a 345 b", false]
   *   ["3 start", false]
   * @param string $subject
   * @param bool $shouldMatch
   */
  public function ValidateThatTheStringEndsWithADigit($subject, $shouldMatch) {
    $pattern = '';

    /* DO NOT CHANGE */
    $result = (bool)\preg_match($pattern, $subject);
    if ($shouldMatch) {
      $this->assertTrue($result);
    } else {
      $this->assertFalse($result);
    }
  }
}
