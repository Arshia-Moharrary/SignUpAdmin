<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign up admin</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/style.css">

</head>

<body>
    <div class="container">
        <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="post">
            <div class="row">
                <h4>Account</h4>
                <div class="input-group input-group-icon">
                    <input type="text" placeholder="Full Name" name="fullName" />
                    <div class="input-icon"><i class="fa fa-user"></i></div>
                </div>
                <div class="input-group input-group-icon">
                    <input type="email" placeholder="Email Adress" name="email" />
                    <div class="input-icon"><i class="fa fa-envelope"></i></div>
                </div>
                <div class="input-group input-group-icon">
                    <input type="password" placeholder="Password" name="password" />
                    <div class="input-icon"><i class="fa fa-key"></i></div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h4>Export method</h4>
                    <div class="input-group">
                        <input id="gender-male" type="radio" name="role" value="male" />
                        <label for="gender-male">Json</label>
                        <input id="gender-female" type="radio" name="role" value="female" />
                        <label for="gender-female">Csv</label>
                    </div>
                </div>
                <div class="row">
                    <input type="submit" value="Sign up admin" class="payment-method-card submit" id="sign">
                </div>
        </form>
    </div>

    <!-- CDN -->

    <!-- JQuery -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <!-- Local -->
    <script src="<?= BASE_URL ?>/assets/js/script.js"></script>

</body>

</html>