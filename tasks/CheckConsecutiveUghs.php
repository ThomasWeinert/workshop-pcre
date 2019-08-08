<?php

class CheckConsecutiveUghs extends TaskTestCase {

  /**
   * @test
   * @param string $subject
   * @param bool $shouldMatch
   * @testdox Check that "$subject" contains 3 or more consecutive "ugh"s, expecting "$shouldMatch".
   * @testWith
   *   ["ughughugh", true]
   *   ["ughughughugh", true]
   *   ["ughughughugah", true]
   *   ["ughugahugh", false]
   *   ["ughughugah", false]
   */
  public function CheckForThreeConsecutiveUghs($subject, $shouldMatch): void {
    $pattern = '()';

    $this->matchPattern($pattern, $subject, $shouldMatch);
  }
}
