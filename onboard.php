<?php
require('./modules/process-onboard.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="d-flex min-vh-100 justify-content-center align-items-center">
        <div class="shadow-sm mx-2 border rounded p-5">
            <h3>Welcome back, user!</h3>
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="uinput" class="mt-3 mb-1 text-muted">
                        Kindly, enter your mobile number to proceed.
                    </label>
                    <input id="uinput" type="text" name="phone" class="form-control" required>
                    <button type="submit" name="submit" class="btn btn-dark mt-2 w-100">Continue</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>