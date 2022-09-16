<?php include(__DIR__ .'/partials/header.php'); ?>
        <a class="button is-primary" href="/new">New Post</a>
            <?php foreach($posts as $post): ?>
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            <?=$post->title?>
                        </p>
                    </header>
                    <div class="card-content">
                        <div class="content">
                            <?=$post->snippet()?>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a href="/posts/show?id=<?=$post->id?>" class="card-footer-item">Read more</a>
                        <a href="/posts/edit?id=<?=$post->id?>" class="card-footer-item">Edit</a>
                        <a href="/posts/delete?id=<?=$post->id?>" class="card-footer-item">Delete</a>
                    </footer>
                </div>
            <?php endforeach; ?>
<?php include(__DIR__ .'/partials/footer.php'); ?>