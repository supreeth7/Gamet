<?php
$title = "Login";
require_once "./includes/header.php";
require_once "./includes/classes/FormSanitizer.php";

if (isset($_POST["login"])) {
    $username = FormSanitizer::sanitizeUsername($_POST['username']);
    $password = FormSanitizer::sanitizePassword($_POST['password']);

    $is_loggedIn = $account->login($username, $password);

    if ($is_loggedIn) {
        $_SESSION["username"] = $username;
        header('Location: index.php');
    }
}

?>

<div class="row" style="margin: 0; background-color: white">
    <div class="col-lg-6 mt-lg-5">
        <div class="form mt-lg-5" style="min-height: 100vh;">
            <div class="text-center login-logo">
                <img src="./assets/icons/default-monochrome-black.svg" alt="logo" class="img-fluid">
            </div>
            <form action="login.php" method="POST" class="mt-lg-5">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control"
                        value="<?php $account->getInput('username')?>">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="is-invalid">
                    <?=$account->getError(Constants::$InvalidCredentialsError)?>
                </div>
                <div class="mt-4">
                    <button type="submit" class="btn form-btn lev" name="login">Login &nbsp;<i
                            class='fas fa-arrow-circle-right'></i></button>
                </div>
                <div class="form-group mt-lg-4">
                    <p>New here? <a href="register.php" style="font-weight: 600;color: var(--bg2);">Create an
                            account</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
    <div class="col-lg-6 p-0">
        <div class="signup-img mobile-invisible img-fluid">
        </div>
    </div>
</div>