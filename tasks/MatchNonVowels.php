<?php

class MatchNonVowels extends TaskTestCase {

  /**
   * @test
   * @testdox Match any character that is not a vowel (aeiou).
   */
  public function MatchAllNonVowelsInTheURL() {
    $pattern = '()';

    /* DO NOT CHANGE */
    $result = \preg_match_all(
      $pattern, 'https://nevercodealone.de', $matches
    );
    $this->assertSame(17, $result);
    $this->assertCount(17, $matches[0]);
  }
}
