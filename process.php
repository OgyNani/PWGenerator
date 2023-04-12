<?php
require_once 'Generators/PrimeGenerator.php';
require_once 'Generators/PalindromeChecker.php';
require_once 'Generators/PasswordGenerator.php';

$N = $_POST['n'] ?? 0;
$K = $_POST['k'] ?? 0;

if ($N > 0 && $K > 0) {
    $numbers = range(1, $N);

    $primeGenerator = new PrimeGenerator();
    $primes = $primeGenerator->generatePrimes($numbers);

    $palindromeChecker = new PalindromeChecker();
    $palindromes = $palindromeChecker->getPalindromes($numbers);

    $passwordGenerator = new PasswordGenerator();
    $password = $passwordGenerator->generatePassword($K, $primes);
    $password_length = strlen($password);
}

include './result.php';
