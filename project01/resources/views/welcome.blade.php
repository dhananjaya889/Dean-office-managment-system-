<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom Styling */
        body {
            background-color: #bca4a2;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            background-color: #f4f1f0;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }

        .header img {
            width: 70px;
            margin-right: 15px;
        }

        .header h1,
        .header h3 {
            color: #980505;
        }

        .welcome {
            background-color: #8f4f4f;
            color: rgb(255, 255, 255);
            padding: 8px;
            font-weight: bold;
        }

        .login-box {
            background-color: #944f4f;
            color: rgb(255, 255, 255);
            padding: 20px;
            border-radius: 5px;
        }

        .login-box input[type="text"],
        .login-box input[type="password"] {
            margin-bottom: 10px;
        }

        .footer {
            font-size: 12px;
            color: #060606;
            margin-top: 20px;
        }

        .footer a {
            color: #5e3535;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Header Section -->
        <div class="header d-flex align-items-center">
            <img src="images/logo.png" alt="University Logo">
            <div>
                <h1>Faculty of Technology</h1>
                <h3>Dean Office Management System</h3>
            </div>
        </div>

        <!-- Welcome Text -->
        <div class="welcome text-center my-3">
            Welcome To The Dean Office Management System!
        </div>

        <!-- University Information -->
        <p class="text-center">University of Ruhuna<br>
            Matara - Sri Lanka<br>
        </p>

        <!-- Login Box -->
        <div class="login-box text-center">
            <h3 class="mb-4">Sign In</h3>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="row g-3">
                    <div class="col">
                        <a href="{{ route('login') }}" class="btn btn-light btn-block mb-2">Login</a>
                    </div>
            
                    <div class="col">
                        <a href="{{ route('register') }}" class="btn btn-light btn-block mb-2">Register</a>
                    </div>
                </div>
            </form>
        </div>

        <!-- Footer -->
        <div class="footer text-center mt-3">
            &copy; Faculty of Technology, University of Ruhuna.
            <a href="#about">[ About ]</a>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
