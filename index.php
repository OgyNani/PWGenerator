<!DOCTYPE html>
<html>
<head>
    <title>N and K</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <form action="process.php" method="post">
        <div class="form-group">
            <label for="n">N:</label>
            <input type="number" class="form-control" name="n" id="n">
        </div>
        <div class="form-group">
            <label for="k">K:</label>
            <input type="number" class="form-control" name="k" id="k">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>
