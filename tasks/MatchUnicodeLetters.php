<?php

class MatchUnicodeLetters extends TaskTestCase {

  /**
   * @test
   * @testdox Match any unicode letter in the string.
   */
  public function MatchAnyUnicodeLetter(): void {
    $pattern = '()u';

    /* DO NOT CHANGE */
    $result = \preg_match_all(
      $pattern, 'English, Русский, 中文', $matches
    );
    $this->assertSame(16, $result);
    $this->assertCount(16, $matches[0]);
  }
}
