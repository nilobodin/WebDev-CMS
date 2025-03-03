<?php
include 'assets/components/header.php';
$user = $mysqli->query("SELECT * FROM `users` WHERE `id` = '{$_SESSION['user']['id']}'");
foreach ($user as $key => $value) {
}
?>

<form class="personal-account" action="account_edit.php" method="GET">
    <div class="personal-account-container">
        <div class="personal-account__personal-information">
            <p>Personal information</p>
            <div class="personal-account-info-all">
                <div class="personal-account__personal-information--avatar">
                    <img src="assets/img/uploads/<?= $value['avatar'] ?>" alt="avatar">
                </div>
                <div class="personal-account__personal-information--info">
                    <p><span>Full name:</span> <?= $value['fullname'] ?>
                    </p>
                    <p><span>Phone:</span> <?= $value['phone'] ?>
                    </p>
                    <p><span>Email:</span> <?= $value['email'] ?>
                    </p>
                    <br>
                    <p><span>Date of registration:</span> <?= $_SESSION['user']['reg_date'] ?>
                    </p>
                    <button class="button account-update-btn">Edit</button>
                </div>
            </div>
        </div>
    </div>
</form>

<?php include 'assets/components/footer.php' ?>