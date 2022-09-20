<?php include(__DIR__ .'/partials/header.php'); ?>
    <form class="form" action="/login" method="POST">

        <div class="field">
            <label class="label">Email</label>
            <div class="control">
                <input class="input" type="email" name="email" required>
            </div>
        </div>
        <div class="field">
            <label class="label">Password</label>
            <div class="control">
                <input class="input" type="password" name="password" required>
            </div>
        </div>
        <input class="button is-primary" type="submit" value="Login">
    </form>
<?php include(__DIR__ .'/partials/footer.php'); ?>