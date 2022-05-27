<?php

namespace Drupal\beetroot_example\Services;

class TextCleanupService {
  public function cleanUp(string $text): string {
    $text = $this->addDots($text);
    $text = $this->removeBadWords($text);
    $text = $this->ucFirst($text);
    return $text;
  }

  public function addDots(string $text) {
    $lines = explode("\r\n", $text);
    foreach ($lines as &$line) {
      $line = trim($line);
      if (!str_ends_with($line, '.')) {
        $line .= '.';
      }
    }
    return implode("\r\n", $lines);
  }

  private function removeBadWords($text) {
    $words = ['bad'];
    $replace = ['good'];
    return str_replace($words, $replace, $text);
  }

  private function ucFirst(string $text) {
    $lines = explode("\n", $text);
    foreach ($lines as &$line) {
      $line = ucfirst($line);
    }
    return implode("\n", $lines);
  }

}
