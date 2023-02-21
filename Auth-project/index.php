<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <srcipt src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css'></srcipt>
    <title>Auth Project</title>
</head>

<body>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h1>Login page</h1>
            <form action="login.php">
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" id="email" class="form-control" name="email" />
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
            <form action="login.php" method="POST">
                

            </form>
        </div>
        <div class="col-md-3></div>
    </div>
</body>
</html>