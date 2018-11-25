<?php

class ValidateAnIPV4 extends TaskTestCase {

  /**
   * @test
   * @param string $subject
   * @param bool $shouldMatch
   * @testdox Validate if "$subject" is an IP V4, expecting "$shouldMatch".
   * @testWith
   *   ["127.0.0.1", true]
   *   ["0.0.0.0", true]
   *   ["255.255.255.0", true]
   *   ["1.1.1.256", false]
   *   ["1.1.1.a", false]
   *   ["-1.1.1.1", false]
   */
  public function ValidateThatTheStringStartsWithADigit($subject, $shouldMatch) {
    // sample(pattern)
    $pattern = '()';
    // end-sample

    $this->testPatternMatch($pattern, $subject, $shouldMatch);
  }
}
