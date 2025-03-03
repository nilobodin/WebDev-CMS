<?php include 'assets/components/header.php';
$SpecCart = $mysqli->query("SELECT * FROM `spec`");
$Portfolio = $mysqli->query("SELECT * FROM `portfolio`");
$Testimonials = $mysqli->query("SELECT * FROM `testimonials`");
$Pricing = $mysqli->query("SELECT * FROM `pricing`");
?>

<div class="admin-panel__title">
    <p>Admin panel</p>
</div>

<div class="admin-panel">
    <div class="admin-panel-container">
        <div class="admin-panel__cards" data-aos="fade-up">
            <div class="admin-panel__cards--title">
                <p>Change <span>specialization</span> card</p>
            </div>
            <div class="admin-panel__cards-form">
                <form action="assets/functions/addSpec.php" method="POST" class="admin-panel__card-add"
                    enctype="multipart/form-data">
                    <div class="admin-panel__card-add--title">
                        <p>Add a card</p>
                    </div>
                    <div class="admin-panel__card-add--inputs">
                        <label for="card-logo">Add logo</label><input type="file" name="card-logo"><br>
                        <label for="card-title">Add title</label><input type="text" name="card-title"><br>
                        <label for="card-description">Add description</label><input type="text"
                            name="card-description"><br><br>
                    </div>
                    <button name="add-specialization-card">Add</button>
                </form>
                <form action="assets/functions/deleteSpec.php" method="POST" class="admin-panel__card-delete">
                    <div class="admin-panel__card-delete--title">
                        <p>Delete a card</p>
                    </div>
                    <div class="admin-panel__card-delete--inputs">
                        <label for="card-delete-id">Name of the header to be deleted</label>
                        <select name="card-delete-id">
                            <?php foreach ($SpecCart as $key => $value) { ?>
                                <option value="<?= $value['id'] ?>">
                                    <?= $value['title'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <button name="delete-specialization-card">Delete</button>
                </form>
                <form action="assets/functions/updateSpec.php" method="POST" class="admin-panel__card-update"
                    enctype="multipart/form-data">
                    <div class="admin-panel__card-update--title">
                        <p>Update a card</p>
                    </div>
                    <div class="admin-panel__card-update--inputs">
                        <label for="card-update-id">Name of the product that needs to be changed</label>
                        <select name="card-update-id">
                            <?php foreach ($SpecCart as $key => $value) { ?>
                                <option value="<?= $value['id'] ?>">
                                    <?= $value['title'] ?>
                                </option>
                            <?php } ?>
                        </select>
                        <label for="card-logo-update">New logo</label><input type="file" name="card-logo-update"><br>
                        <label for="card-title-update">New title</label><input type="text" name="card-title-update"><br>
                        <label for="card-description-update">New description</label><input type="text"
                            name="card-description-update"><br><br>
                    </div>
                    <button name="update-specialization-card">Update</button>
                </form>
            </div>
        </div>
        <br>
        <div class="admin-panel__cards" data-aos="fade-up">
            <div class="admin-panel__cards--title">
                <p>Change <span>portfolio</span> pages</p>
            </div>
            <div class="admin-panel__cards-form">
                <form action="assets/functions/addPortfolio.php" method="POST" class="admin-panel__card-add"
                    enctype="multipart/form-data">
                    <div class="admin-panel__card-add--title">
                        <p>Add a page</p>
                    </div>
                    <div class="admin-panel__card-add--inputs">
                        <label for="card-image">Add image</label><input type="file" name="card-image"><br>
                        <label for="card-name">Add name</label><input type="text" name="card-name"><br>
                        <label for="card-link">Add link</label><input type="text" name="card-link"><br><br>
                    </div>
                    <button name="add-portfolio-page">Add</button>
                </form>
                <form action="assets/functions/deletePortfolio.php" method="POST" class="admin-panel__card-delete">
                    <div class="admin-panel__card-delete--title">
                        <p>Delete a page</p>
                    </div>
                    <div class="admin-panel__card-delete--inputs">
                        <label for="card-delete-id">Name of the header to be deleted</label>
                        <select name="card-delete-id">
                            <?php foreach ($Portfolio as $key => $value) { ?>
                                <option value="<?= $value['id'] ?>">
                                    <?= $value['name'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <button name="delete-add-portfolio-page">Delete</button>
                </form>
                <form action="assets/functions/updatePortfolio.php" method="POST" class="admin-panel__card-update"
                    enctype="multipart/form-data">
                    <div class="admin-panel__card-update--title">
                        <p>Update a page</p>
                    </div>
                    <div class="admin-panel__card-update--inputs">
                        <label for="card-update-id">ID of the page that needs to be changed</label>
                        <select name="card-update-id">
                            <?php foreach ($Portfolio as $key => $value) { ?>
                                <option value="<?= $value['id'] ?>">
                                    <?= $value['name'] ?>
                                </option>
                            <?php } ?>
                        </select>
                        <label for="card-image-update">New image</label><input type="file" name="card-image-update"><br>
                        <label for="card-name-update">New name</label><input type="text" name="card-name-update"><br>
                        <label for="card-link-update">New link</label><input type="text"
                            name="card-link-update"><br><br>
                    </div>
                    <button name="update-add-portfolio-page">Update</button>
                </form>
            </div>
        </div>
        <br>
        <div class="admin-panel__cards" data-aos="fade-up">
            <div class="admin-panel__cards--title">
                <p>Change <span>testimonials</span> card</p>
            </div>
            <div class="admin-panel__cards-form">
                <form action="assets/functions/addTestimonials.php" method="POST" class="admin-panel__card-add">
                    <div class="admin-panel__card-add--title">
                        <p>Add a card</p>
                    </div>
                    <div class="admin-panel__card-add--inputs">
                        <label for="card-title">Add title</label><input type="text" name="card-title"><br>
                        <label for="card-description">Add description</label><input type="text"
                            name="card-description"><br>
                        <label for="card-rating">Add rating (1-5)</label><input type="number" name="card-rating" min="1"
                            max="5"><br><br>
                        <label for="card-link">Add link</label><input type="text" name="card-link"><br>
                    </div>
                    <button name="add-testimonials-card">Add</button>
                </form>
                <form action="assets/functions/deleteTestimonials.php" method="POST" class="admin-panel__card-delete">
                    <div class="admin-panel__card-delete--title">
                        <p>Delete a card</p>
                    </div>
                    <div class="admin-panel__card-delete--inputs">
                        <label for="card-delete-id">Name of the header to be deleted</label>
                        <select name="card-delete-id">
                            <?php foreach ($Testimonials as $key => $value) { ?>
                                <option value="<?= $value['id'] ?>">
                                    <?= $value['title'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <button name="delete-add-testimonials-card">Delete</button>
                </form>
                <form action="assets/functions/updateTestimonials.php" method="POST" class="admin-panel__card-update">
                    <div class="admin-panel__card-update--title">
                        <p>Update a card</p>
                    </div>
                    <div class="admin-panel__card-update--inputs">
                        <label for="card-update-id">Title of the page that needs to be changed</label>
                        <select name="card-update-id">
                            <?php foreach ($Testimonials as $key => $value) { ?>
                                <option value="<?= $value['id'] ?>">
                                    <?= $value['title'] ?>
                                </option>
                            <?php } ?>
                        </select>
                        <label for="card-title-update">New title</label><input type="text" name="card-title-update"><br>
                        <label for="card-description-update">New description</label><input type="text"
                            name="card-description-update"><br>
                        <label for="card-rating-update">Add rating (1-5)</label><input type="number"
                            name="card-rating-update" min="1" max="5"><br><br>
                        <label for="card-link-update">New link</label><input type="text"
                            name="card-link-update"><br><br>
                    </div>
                    <button name="update-add-testimonials-card">Update</button>
                </form>
            </div>
        </div>
        <br>
        <div class="admin-panel__cards" data-aos="fade-up">
            <div class="admin-panel__cards--title">
                <p>Change <span>pricing</span> card</p>
            </div>
            <div class="admin-panel__cards-form">
                <form action="/assets/functions/addPricing.php" method="POST" class="admin-panel__card-add">
                    <div class="admin-panel__card-add--title">
                        <p>Add a card</p>
                    </div>
                    <div class="admin-panel__card-add--inputs">
                        <label for="card-title">Add title</label><input type="text" name="card-title"><br>
                        <label for="card-price">Add price</label><input type="text" name="card-description"><br>
                        <label for="card-items">Add items (1-5)</label>
                        <input type="text" name="card-items-one" placeholder="Write the first point here"><br>
                        <input type="text" name="card-items-two" placeholder="Write the second point here"><br>
                        <input type="text" name="card-items-three" placeholder="Write the third point here"><br>
                        <input type="text" name="card-items-four" placeholder="Write the fourth point here"><br>
                        <input type="text" name="card-items-five" placeholder="Write the first point here"><br><br>
                    </div>
                    <button name="add-testimonials-card">Add</button>
                </form>
                <form action="/assets/functions/deletePricing.php" method="POST" class="admin-panel__card-delete">
                    <div class="admin-panel__card-delete--title">
                        <p>Delete a card</p>
                    </div>
                    <div class="admin-panel__card-delete--inputs">
                        <label for="card-delete-id">Name of the header to be deleted</label>
                        <select name="card-delete-id">
                            <?php foreach ($Pricing as $key => $value) { ?>
                                <option value="<?= $value['id'] ?>">
                                    <?= $value['title'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <button name="delete-add-testimonials-card">Delete</button>
                </form>
                <form action="/assets/functions/updatePricing.php" method="POST" class="admin-panel__card-update">
                    <div class="admin-panel__card-update--title">
                        <p>Update a card</p>
                    </div>
                    <div class="admin-panel__card-update--inputs">
                        <label for="card-update-id">ID of the page that needs to be changed</label>
                        <label for="card-update-id">Name of the header to be deleted</label>
                        <select name="card-update-id">
                            <?php foreach ($Pricing as $key => $value) { ?>
                                <option value="<?= $value['id'] ?>">
                                    <?= $value['title'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <label for="card-title-update">New title</label><input type="text" name="card-title-update"><br>
                    <label for="card-price-update">New price</label><input type="text"name="card-price-update"><br>
                    <label for="card-items-update">New items (1-5)</label>
                    <input type="text" name="card-items-one" placeholder="Write the first point here"><br>
                    <input type="text" name="card-items-two" placeholder="Write the second point here"><br>
                    <input type="text" name="card-items-three" placeholder="Write the third point here"><br>
                    <input type="text" name="card-items-four" placeholder="Write the fourth point here"><br>
                    <input type="text" name="card-items-five" placeholder="Write the first point here"><br><br>
                    <button name="update-add-testimonials-card">Update</button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>

<?php include 'assets/components/footer.php' ?>