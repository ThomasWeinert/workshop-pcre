<?php

class MatchVowels extends TaskTestCase {

  /**
   * @test
   * @testdox Match any character that is a vowel (aeiou).
   */
  public function MatchAllVowelsInTheURL() {
    $pattern = '()';

    /* DO NOT CHANGE */
    $result = \preg_match_all(
      $pattern, 'https://nevercodealone.de', $matches
    );
    $this->assertSame(8, $result);
    $this->assertCount(8, $matches[0]);
  }
}
