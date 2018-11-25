<?php

class ValidateALanguageCode extends TaskTestCase {

  /**
   * @test
   * @param string $subject
   * @param bool $shouldMatch
   * @testdox Validate that "$subject" is a language code, expecting "$shouldMatch".
   *   The are strings of 2 or 3 ASCII letters.
   * @testWith
   *   ["en", true]
   *   ["de", true]
   *   ["eng", true]
   *   ["deu", true]
   *   ["123", false]
   *   ["de\n", false]
   *   ["en-US", false]
   */
  public function ValidateThatTheStringIsAGermanZipCode($subject, $shouldMatch): void {
    $pattern = '()D';

    $this->testPatternMatch($pattern, $subject, $shouldMatch);
  }
}
