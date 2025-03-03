<?php include 'assets/components/header.php' ?>

<form action="assets\functions\login.php" class="sign-up" method="POST">
    <div class="sign-up-container">
        <div class="sign-up__title">
            <p>Sign in</p>
        </div>
        <div class="sign-up__inputs">
            <input type="text" name="login" placeholder="Login or email"><br>
            <input type="text" name="password" placeholder="Password"><br><br>
            <?php
            if (isset($_SESSION['error'])) {
                echo "<p class='error'>" . $_SESSION['error'] . "</p>";
                unset($_SESSION['error']);
            }
            ?>
        </div>
        <div class="sign-up__link-reg">
            <div class="sign-up__link-reg--text">
                <p>Not registered yet?</p>
            </div>
            <div class="sign-up__link-reg--link"><a href="signup.php">Sign up</a></div>
        </div>
        <div class="sign-up__btn">
            <button name="sign-up-btn">Sign in</button>
        </div>
    </div>
</form>

<?php include 'assets/components/footer.php' ?>