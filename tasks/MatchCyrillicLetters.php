<?php

class MatchCyrillicLetters extends TaskTestCase {

  /**
   * @test
   * @testdox Match any Cyrillic letter in the string.
   */
  public function MatchAnyCyrillicLetter() {
    $pattern = '()u';

    /* DO NOT CHANGE */
    $result = \preg_match_all(
      $pattern, 'English, Русский, 中文', $matches
    );
    $this->assertSame(7, $result);
    $this->assertCount(7, $matches[0]);
  }
}
