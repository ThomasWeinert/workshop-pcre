<?php

class ValidateDrunkenNumbers extends TaskTestCase {

  /**
   * @test
   * @param string $subject
   * @param bool $shouldMatch
   * @testdox Validate that "$subject" contains any count of the same digit, expecting "$shouldMatch".
   * @testWith
   *   ["7", true]
   *   ["11", true]
   *   ["444", true]
   *   ["8888", true]
   *   ["12", false]
   *   ["456", false]
   *   ["ugh", false]
   */
  public function ValidateThatTheStringContainsAnyCountOfTheSameNumber($subject, $shouldMatch): void {
    $pattern = '()';

    $this->matchPattern($pattern, $subject, $shouldMatch);
  }
}
