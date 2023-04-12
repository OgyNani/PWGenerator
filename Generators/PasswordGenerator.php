<?php
class PasswordGenerator {
    public function generatePassword($k, $primes): string {
        $max_password_length = min($k, count($primes));
        $password_length = rand(3, $max_password_length);
        $password = '';

        while (strlen($password) < $password_length) {
            $random_index = array_rand($primes);
            $random_prime = $primes[$random_index];
            if (strlen($password . $random_prime) <= $max_password_length) {
                $password .= $random_prime;
            }
        }

        return $password;
    }
}