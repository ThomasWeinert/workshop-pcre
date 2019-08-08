<?php

class ValidateHexadecimalBytes extends TaskTestCase {

  /**
   * @test
   * @param string $subject
   * @param bool $shouldMatch
   * @testdox Validate that "$subject" is a hexadecimal byte, expecting "$shouldMatch".
   *  It should be two characters. Digits and letters between a and f are allowed. The letters can be uppercase.
   * @testWith
   *   ["01", true]
   *   ["0f", true]
   *   ["FA", true]
   *   ["az", false]
   *   ["foo", false]
   *   ["123", false]
   */
  public function ValidateThatTheStringIsAHexadecimalByte($subject, $shouldMatch): void {
    $pattern = '()D';

    $this->matchPattern($pattern, $subject, $shouldMatch);
  }
}
