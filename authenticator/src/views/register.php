

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>inscripton</title>

    <link rel="stylesheet" href="authenticator/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="authenticator/assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="authenticator/assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="authenticator/assets/css/styles.css">
</head>

<body>
    <div data-aos="fade-down" data-aos-duration="800" data-aos-delay="1050" class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <form method="POST">
                <?php if (isset($_SESSION['message']) && !empty($_SESSION['message'])) : ?>
                    <div class="alert alert-<?php echo $_SESSION['type']; ?>">
                        <?php echo $_SESSION['message']; ?>
                    </div>
                    <?php
                    unset($_SESSION['message']);
                    unset($_SESSION['type']);
                    ?>
                <?php endif ?>
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                <div class="form-group"><input class="form-control" type="text" name="name" placeholder="name" required></div>
                <div class="form-group"><input class="form-control" type="text" name="lastname" placeholder="lastname" required></div>
                <div class="form-group"><input class="form-control" type="text" name="phone" placeholder="phone" required></div>
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email" required></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" required></div>
                <!-- <div class="form-group"><input class="form-control" type="password" name="password-repeat" placeholder="Password (repeat)"></div> -->
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox" required>I agree to the license terms.</label></div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" name="submit" type="submit">Sign Up</button>
                </div>
                <a class="already" href="?page=login">You already have an account? Login here.</a>
            </form>
        </div>
    </div>
    <script src="authenticator/assets/js/jquery.min.js"></script>
    <script src="authenticator/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="authenticator/assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
</body>

</html>