<?php
require './modules/process-verify.php';

if (isset($_GET['phone'])) {
    $phone = $_GET['phone'];
} else {
    $phone = '+149384734761';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Verify Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container d-flex min-vh-100 justify-content-center align-items-center">
        <div class="shadow-sm mx-2 border rounded p-5">
            <h3>Complete verification!</h3>
            <?php if (isset($alert)) { ?>
                <div class="alert alert-success mt-4"><?php echo $alert; ?></div>
            <?php } ?>
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="code" class="mt-3 mb-1 text-muted">
                        A verification code has been sent to
                        <b><?php echo $phone; ?></b>, <br />
                        enter the code below to continue.
                    </label>
                    <input id="code" type="text" name="code" class="form-control" required />
                    <input type="hidden" name="phone" value="<?php echo $phone; ?>">
                    <button type="submit" name="submit" class="btn btn-success mt-2 w-100">
                        Submit
                    </button>
                    <small class="d-block mt-3 ">
                        <a href="onboard.php" class="text-muted">Wrong number?</a>
                    </small>
                </div>
            </form>
        </div>
    </div>
</body>

</html>