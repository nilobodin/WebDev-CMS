<?php include 'assets/components/header.php' ?>

<form action="assets\functions\reg.php" class="sign-up" method="POST" enctype="multipart/form-data">
    <div class="sign-up-container">
        <div class="sign-up__title">
            <p>Sign up</p>
        </div>
        <div class="sign-up__inputs">
            <input type="text" name="fullname" placeholder="Full name" required><br>
            <input type="email" name="email" placeholder="Email" required value="Не указан"><br>
            <input type="text" name="phone" placeholder="Phone" required value="Не указан"><br>
            <input type="text" name="login" placeholder="Login" required><br>
            <input type="text" name="password" placeholder="Password" required><br>
            <div class="avatar" style="text-align: left;">
            <p>Choose avatar</p><input type="file" name="avatar" required><br>
            </div>
        </div>
        <div class="sign-up__link-reg">
            <div class="sign-up__link-reg--text">
                <p>Already register?</p>
            </div>
            <div class="sign-up__link-reg--link"><a href="signin.php">Sign in</a></div>
        </div>
        <div class="sign-up__btn">
            <button name="sign-up-btn">Sign up</button>
        </div>
    </div>
</form>

<?php include 'assets/components/footer.php' ?>