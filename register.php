<?php
$title = "Sign Up";
require_once "./includes/header.php";
require_once "./includes/classes/FormSanitizer.php";

if (isset($_POST["signup"])) {
    $firstName = FormSanitizer::sanitizeText($_POST['firstname']);
    $lastName = FormSanitizer::sanitizeText($_POST['lastname']);
    $username = FormSanitizer::sanitizeUsername($_POST['username']);
    $password1 = FormSanitizer::sanitizePassword($_POST['password']);
    $password2 = FormSanitizer::sanitizePassword($_POST['confirm_password']);
    $email = FormSanitizer::sanitizeEmail($_POST['email']);

    $is_registered = $account->register($firstName, $lastName, $email, $password1, $password2, $username);

    if ($is_registered) {
        $_SESSION["username"] = $username;
        header('Location: index.php');
    }
}
?>

<div class="row account-landing">
    <div class="col-lg-6">
        <div class="form">
            <h2 class="title text-center mb-5">Register Now!</h2>
            <form action="register.php" method="POST">
                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" name="firstname" class="form-control"
                        value="<?php $account->getInput('firstname')?>">
                    <div class="is-invalid">
                        <?=$account->getError(Constants::$FirstNameError)?>
                    </div>
                </div>
                <div class=" form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" class="form-control"
                        value="<?php $account->getInput('lastname')?>">
                    <div class="is-invalid">
                        <?=$account->getError(Constants::$LastNameError)?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control"
                        value="<?php $account->getInput('username')?>">
                    <div class="is-invalid">
                        <?=$account->getError(Constants::$UsernameError)?>
                        <br>
                        <?=$account->getError(Constants::$UsernameExistError)?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control"
                        value="<?php $account->getInput('email')?>">
                    <div class="is-invalid">
                        <?=$account->getError(Constants::$EmailExistError)?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                    <div class="is-invalid">
                        <?=$account->getError(Constants::$PasswordLengthError)?>
                        <br>
                        <?=$account->getError(Constants::$PasswordMatchError)?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirm password</label>
                    <input type="password" name="confirm_password" class="form-control">
                </div>
                <div class="mt-4">
                    <button type="submit" class="btn form-btn lev" name="signup">Sign Up &nbsp;<i
                            class='fas fa-arrow-circle-right'></i></button>
                </div>
                <div class="form-group mt-4">
                    <p>Already have an account? <a href="login.php" style="font-weight: 600;color: var(--bg2);">Login
                            here</a></p>
                </div>
            </form>
        </div>
    </div>
    <div class="col-lg-6 p-0">
        <div class="signup-img mobile-invisible img-fluid">
        </div>
    </div>
</div>