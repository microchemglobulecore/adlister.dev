<?php

$passError = isset($_SESSION['PASS_ERROR'])? ($_SESSION['PASS_ERROR']) : '';

?>


<div class="container">

    <section id="login">

        <div class="row">

            <h1 class="section-title">Signup For OooLister</h1>

            <div class="col-md-6 col-md-offset-3">

                <p>Please fill out the information below so we can create your account.</p>
                <p id='error_message'><?= $errorMessage ?></p>
                <?php if (isset($_SESSION['ERROR_MESSAGE'])) : ?>
                    <div class="alert alert-danger">
                        <p class="error"><?= $_SESSION['ERROR_MESSAGE']; ?></p>
                    </div>
                    <?php unset($_SESSION['ERROR_MESSAGE']); ?>
                <?php endif; ?>
                <?php if (isset($_SESSION['SUCCESS_MESSAGE'])) : ?>
                    <div class="alert alert-success">
                        <p class="success"><?= $_SESSION['SUCCESS_MESSAGE']; ?></p>
                    </div>
                    <?php unset($_SESSION['SUCCESS_MESSAGE']); ?>
                <?php endif; ?>

                <form method="POST" action="/signup" data-validation data-required-message="This field is required">

                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" <?php if(!empty($_POST)): ?> value='<?= $_POST['name']?>' <?php endif ?> required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" <?php if(!empty($_POST)): ?> value='<?= $_POST['email']?>' <?php endif ?> required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" <?php if(!empty($_POST)): ?> value='<?= $_POST['username']?>' <?php endif ?>  required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" <?php if(!empty($_POST)): ?> value='<?= $_POST['password']?>' <?php endif ?> required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="rePassword" name="rePassword" placeholder="Confirm password" <?php if(!empty($_POST)): ?> value='<?= $_POST['rePassword']?>' <?php endif ?> required>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-primary">Signup</button>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="/login" class="btn btn-success">Go To Login</a>
                        </div>
                    </div>

                </form>

            </div>

        </div>

    </section>

</div>
