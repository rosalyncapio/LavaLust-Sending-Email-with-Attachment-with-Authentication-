<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .verification-container {
            max-width: 600px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.95);
            padding: 3rem;
            border-radius: 1rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .verification-container h1 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #4a5568;
            margin-bottom: 1.5rem;
        }

        .verification-container p {
            font-size: 1.1rem;
            color: #718096;
            margin-bottom: 1.5rem;
        }

        .verification-container .btn-primary {
            background-color: #667eea;
            border-color: #667eea;
            padding: 0.75rem 2rem;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 0.5rem;
            transition: all 0.3s ease;
        }

        .verification-container .btn-primary:hover {
            background-color: #5a67d8;
            border-color: #5a67d8;
            transform: translateY(-2px);
        }

        .verification-container a {
            color: #667eea;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s ease;
        }

        .verification-container a:hover {
            color: #5a67d8;
            text-decoration: underline;
        }

        .enter-otp-btn {
            margin-top: 2rem;
        }

        @media (max-width: 576px) {
            .verification-container {
                padding: 2rem;
            }

            .verification-container h1 {
                font-size: 2rem;
            }

            .verification-container p {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="verification-container text-center">
            <h1 class="display-4">Email Not Verified</h1>
            <p class="lead">Please check your inbox and click the verification link to activate your account.</p>
            <p>Alternatively, you can go back to the <a href="/login">Login</a> page.</p>
            <form action="/index.php/enter-otp" method="get" class="enter-otp-btn">
                <button type="submit" class="btn btn-primary btn-lg">Enter OTP</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>