<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body>
    <div class="container">
        <form action="/add.php" method="POST">
            <input class="input" type="text" name="title" required>
            <textarea class="textarea" name="body"></textarea>
            <input class="button is-primary" type="submit" value="Add">
        </form>
    </div>
</body>
</html>