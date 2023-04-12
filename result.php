<!DOCTYPE html>
<html>
<head>
    <title>Results</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand">Inputs</a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link">N: <?php echo ($N); ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link">K: <?php echo ($K); ?></a>
            </li>
        </ul>
    </div>
</nav>
<div class="container" style="margin-top: 80px;">
    <h1>Results</h1>
    <p>Prime numbers: <?php echo implode(", ", $primes); ?></p>
    <p>Palindromes: <?php echo implode(", ", $palindromes); ?></p>
    <p>Password: <?php echo $password; ?></p>
    <p>Password length: <?php echo $password_length; ?></p>
    <a href="index.php" class="btn btn-primary">Back</a>
    <button class="btn btn-secondary" onclick="location.reload()">Reload</button>
</div>

</body>
</html>
