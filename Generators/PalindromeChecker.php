<?php
class PalindromeChecker {
    public function getPalindromes($numbers): array {
        return array_filter($numbers, function($number) {
            return strrev((string)$number) === (string)$number;
        });
    }
}

