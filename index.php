<?php error_reporting(0) ?>
<?php require( 'classes.php' ) ?>
<?php require( 'user_validator.php' ) ?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <link rel='shortcut icon' href='upload/icon.svg' type='image/x-icon'>
    <link rel='stylesheet' href='css/all.min.css'>
    <link rel='stylesheet' href='css/bootstrap_2.min.css'>
    <link rel='stylesheet' href='css/style.css'>
    <title>OOP</title>
</head>

<body>

<?php
// validate entries
$errors = [];
if ( isset( $_POST['submit'] ) ) {
    // validate entries
    $validation = new UserValidator( $_POST );
    $errors = $validation->validateForm();
    // if errors is empty --> save data to db
}

?>

    <div class='container my-5'>
        <h1 class='text-center'>OOP <i class='fad fa-object-group'></i></h1>
        <div class='row my-5'>
            <div class='col col-md-4 offset-md-4 bg-info p-5'>
                <h3>create new user</h3>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method='POST'>
                    <div class='form-group'>
                        <label>username: </label>
                        <input type='text' class='form-control' name='username' value="<?php echo htmlspecialchars($_POST['username']) ?? '' ?>">
                        <div class="error">
                            <?php echo $errors['username'] ?? '' ?>
                        </div>
                    </div>
                    <div class='form-group'>
                        <label>email: </label>
                        <input type='text' class='form-control' name='email' value="<?php echo htmlspecialchars($_POST['email']) ?? '' ?>">
                        <div class="error">
                            <?php echo $errors['email'] ?? '' ?>
                        </div>
                    </div>
                    <div class='form-group'>
                        <input class='btn btn-primary' type='submit' value='submit' name='submit'>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    <script src='js/jquery.min.js'></script>
    <script src='js/popper.min.js'></script>
    <script src='js/bootstrap.min.js'></script>
    <script src='js/app.js'></script>
</body>

</html>