<?php
$json = file_get_contents('posts.json');
$posts = json_decode($json, true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <a class="button is-primary" href="/new.php">New Post</a>
            <?php foreach($posts as $post): ?>
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            <?=$post['title']?>
                        </p>
                    </header>
                    <div class="card-content">
                        <div class="content">
                            <?=$post['body']?>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a href="#" class="card-footer-item">Read more</a>
                    </footer>
                </div>
            <?php endforeach; ?>
    </div>
</body>
</html>