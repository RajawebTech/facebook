<!DOCTYPE html>
<html>
<head>
    <title>RajaBook Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f0f2f5;
        }

        .brand-text h1 {
            color: #1877f2;
            font-size: 60px;
            font-weight: bold;
        }

        .brand-text p {
            font-size: 24px;
        }

        .login-card {
            width: 400px;
            padding: 20px;
            border-radius: 8px;
            background: #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .btn-login {
            background-color: #1877f2;
            color: white;
            font-weight: bold;
        }

        .btn-login:hover {
            background-color: #166fe5;
        }

        .btn-create {
            background-color: #42b72a;
            color: white;
            font-weight: bold;
        }

        .btn-create:hover {
            background-color: #36a420;
        }
    </style>
</head>

<body>

<div class="container">
    <div class="row vh-100 align-items-center">

        <!-- Left Section -->
        <div class="col-md-6 brand-text">
            <h1>facebook</h1>
            <p>Connect with friends and the world around you.</p>
        </div>

        <!-- Right Section -->
        <div class="col-md-6 d-flex justify-content-center">
            <div class="login-card">

                <form method="POST" action="login.php">

                    <div class="mb-3">
                        <input type="text" name="email" class="form-control form-control-lg" placeholder="Email or phone number" required>
                    </div>

                    <div class="mb-3">
                        <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" required>
                    </div>

                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-login btn-lg">Log in</button>
                    </div>

                    <div class="text-center mb-3">
                        <a href="#">Forgot password?</a>
                    </div>

                    <hr>

                    <div class="d-grid">
                        <button type="button" class="btn btn-create btn-lg">Create new account</button>
                    </div>

                </form>

            </div>
        </div>

    </div>
</div>

</body>
</html>