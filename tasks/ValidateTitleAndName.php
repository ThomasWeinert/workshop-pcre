<?php

class ValidateTitleAndName extends TaskTestCase {

  /**
   * @test
   * @param string $subject
   * @param bool $shouldMatch
   * @testdox Validate that "$subject" is a name with a title, expecting "$shouldMatch".
   * @testWith
   *   ["Mr. Doe", true]
   *   ["Mrs. Jane Doe", true]
   *   ["Ms. Marple", true]
   *   ["Mr. ", false]
   *   ["Mrs. 1", false]
   *   ["1. Mr. Doe", false]
   */
  public function ValidateThatTheStringIsANameWithATitle($subject, $shouldMatch) {
    $pattern = '()';

    $this->testPatternMatch($pattern, $subject, $shouldMatch);
  }
}
