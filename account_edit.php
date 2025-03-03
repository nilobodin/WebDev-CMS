<?php include 'assets/components/header.php' ;
    $user=$mysqli->query("SELECT * FROM `users` WHERE `id` = '{$_SESSION['user']['id']}'");
    foreach ($user as $key => $value) {}
?>

    <form class="personal-account" action="assets/functions/updateAccount.php" method="POST" enctype="multipart/form-data">
        <div class="personal-account-container">
            <div class="personal-account__personal-information">
                <p style="text-align: center;">Update personal information</p>
                <div class="personal-account-info-all-edit"><br>
                    <p>Update avatar</p><input type="file" name="update_avatar" value="<?= $value['avatar'] ?>"><br>
                    <input type="text" name="update_fullname" placeholder="Update name" value="<?= $value['fullname'] ?>"><br>
                    <input type="text" name="update_phone" placeholder="Update phone" value="<?= $value['phone'] ?>"><br>
                    <input type="text" name="update_email" placeholder="Update email" value="<?= $value['email'] ?>"><br><br>
                    <button class="button">Update</button>
                </div>
            </div>
        </div>
    </form>

    <?php include 'assets/components/footer.php' ?>