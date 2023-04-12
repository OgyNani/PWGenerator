<?php
class PrimeGenerator {
    public function generatePrimes($numbers): array {
        return array_filter($numbers, function($number) {
            if ($number < 2) {
                return false;
            }
            for ($i = 2; $i <= sqrt($number); $i++) {
                if ($number % $i == 0) {
                    return false;
                }
            }
            return true;
        });
    }
}

