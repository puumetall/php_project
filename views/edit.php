<?php include(__DIR__ .'/partials/header.php'); ?>
    <form action="/posts/edit?id=<?=$post->id?>" method="POST">
        <input class="input" type="text" name="title" required value="<?=$post->title?>">
        <textarea class="textarea" name="body"><?=$post->body?></textarea>
        <input class="button is-primary" type="submit" value="Update">
    </form>
<?php include(__DIR__ .'/partials/footer.php'); ?>