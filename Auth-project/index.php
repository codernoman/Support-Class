<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Auth Project</title>
</head>

<body>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h1>Login page</h1>
            <form action="login.php" method="POST">
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" id="email" class="form-control" name="username" />
                    <label class="form-label" for="email">Email address</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" id="password" class="form-control" name="password" />
                    <label class="form-label" for="password">Password</label>
                </div>

                <!-- Submit button -->
                <input type="submit" class="btn btn-primary btn-block mb-4" value="Login">
            </form>
        </div>
        <div class="col-md-3></div>
    </div>
</body>
</html>