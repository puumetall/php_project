<?php include(__DIR__ .'/partials/header.php'); ?>
    <form action="/upload" method="POST" enctype="multipart/form-data">
        <input class="input" type="file" name="image" required>
        <input class="button is-primary" type="submit" value="Upload">
    </form>
<?php include(__DIR__ .'/partials/footer.php'); ?>