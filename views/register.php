<?php include(__DIR__ .'/partials/header.php'); ?>
    <form class="form" action="/register" method="POST">

        <div class="field">
            <label class="label">First name</label>
            <div class="control">
                <input class="input" type="text" name="fname" required>
            </div>
        </div>
        <div class="field">
            <label class="label">Last name</label>
            <div class="control">
                <input class="input" type="text" name="lname" required>
            </div>
        </div>
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
        <div class="field">
            <label class="label">Confirm password</label>
            <div class="control">
                <input class="input" type="password" name="confirm_password" required>
            </div>
        </div>
        <input class="button is-primary" type="submit" value="Register">
    </form>
<?php include(__DIR__ .'/partials/footer.php'); ?>