<?php include(__DIR__ .'/partials/header.php'); ?>
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">
                <?=$post->title?>
            </p>
        </header>
        <div class="card-content">
            <div class="content">
                <?=$post->body?>
            </div>
        </div>
    </div>
<?php include(__DIR__ .'/partials/footer.php'); ?>